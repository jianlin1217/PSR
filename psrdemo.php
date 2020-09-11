<?php

namespace App\Http\Controllers;

use App\Services\TestService;
use App\Contracts\OneContract;
use App\Contracts\TwoContract;
use App\Contracts\ThreeContract;

/**
 * 這邊範例以傳入參數用一行做範例
 * 多個實作中間用逗點(,)隔開，逗點前面一定沒有空格，後面一定要有一個空格
 */
class OneLineController extends Controller implements OneContract, TwoContract
{
    const CONSTANT_VARIABLE = 'test';
    const PI = 3.14;
    public $public_var = ''; //屬性都要設定可視範圍
    protected static $protected_static_var = ''; //static 一定要在可視範圍後面

    /**
     * 條件判斷式範例
     * 結束右小括號跟開始左大括弧同一行
     * 關鍵字後面空一格
     */
    public function conditionExample(int $status)
    {
        //條件判斷式關鍵字後面空一格
        if ($status === 1) {
            // 結束的右小括號和開始的左大括弧同一行並且空一格
        } elseif ($status === 2) {
            // elseif 中間不空格
        } else {
            // 
        }

        //條件判斷式關鍵字後面空一格
        switch ($status) {
            case 1:
                echo '1';
                break;
            case 2: //有執行其他語句但是沒有跳脫就要寫註解 no break
                echo '2';
                // no break
            case 3:
            case 4:
            case 5:
                echo '5';
                break;
            case 6:
                echo '6';
                return; //可以用 return 代替 break 跳脫
            default:
                break;
        }
    }

    /**
     * 條件判斷式範例
     * 結束右小括號跟開始左大括弧同一行
     * 關鍵字後面空一格
     */
    public function loopExample(int $min, int $max)
    {
        //迴圈關鍵字後面空一格，多個條件中間用逗點(,)隔開，逗點前一定沒有空格，後面一定空一格
        for ($i = $min; $i <= $max; $i++) {
            // 變數跟運算子中間空一格
            // 結束的右小括號和開始的左大括弧同一行並且空一格
        }

        //迴圈關鍵字後面空一格
        while ($min <= $max) {
            // 變數跟運算子中間空一格
            // 結束的右小括號和開始的左大括弧同一行並且空一格
        }

        do {
            //開始左大括弧在同一行
            //結束右大括弧跟迴圈關鍵字同一行並且空一格
        } while ($min <= $max);

        foreach ($literable as $key => $value) {
            // 迴圈關鍵
        }
    }

    /**
     * 這邊是 try catch 的規範
     * 跟迴圈一樣
     */
    public function exceptionExample()
    {
        try {
            // try body
        } catch (Exception $e) {
            // catch body
        } catch (Exception $e) {
            // catch body
        }
    }

    /**
     * closure 類似一般 function，只是不帶 function 名稱
     * 並且結束右小括號跟開始左大括弧在同一行
     */
    public function closureExample()
    {
        $var1 = 'test1';
        $var2 = 'test2';

        $closure_args = function ($arg1, $arg2) {
            // 結束右小括號跟開始左大括弧在同一行
        };

        $closure_args_and_vars = function ($arg1, $arg2) use ($var1, $var2) {
            // 這邊使用了 use 關鍵字，前後都要空格
        };
    }

    /**
     * final 關鍵字在可視範圍關鍵字前
     * static 關鍵字在可視範圍關鍵字後
     */
    final public static function scopeStaticExample()
    {
        //body
    }
}
<?php

namespace App\Http\Controllers;

use App\Services\TestService;
use App\Contracts\OneContract;
use App\Contracts\TwoContract;
use App\Contracts\ThreeContract;

/**
 * 這邊範例以傳入用多行做範例
 * 將實作分成多行，一行獨立宣告一個實作，且第一個換行
 */
class MultiLineController extends Controller implements 
    OneContract,
    TwoContract,
    ThreeContract
{
    /**
     * function 多個參數拆成多行
     */
    public function argList(
        int $arg1,
        $arg2,
        array $arg = []
    ) {
        //多個參數可拆成多行，但一行只能放一個參數
        //結束的右小括號要跟開始的左大括弧同一行，中間用空格隔開

        //呼叫的時候可以一行多個，用逗點隔開
        //也可以拆成多行，一行放一個參數
        $this->argList($arg1, $arg2, $arg3);
        $this->argList(
            $arg1,
            $arg2,
            $arg3
        );
    }

    /**
     * 條件判斷式範例
     * 結束右小括號跟開始左大括弧同一行
     * 關鍵字後面空一格
     */
    public function loopExample(int $min, int $max)
    {
        //迴圈關鍵字後面空一格，多個條件中間用逗點(,)隔開，逗點前一定沒有空格，後面一定空一格
        for ($i = $min, $i <= $max, $i++) {
            // 變數跟運算子中間空一格
            // 結束的右小括號和開始的左大括弧同一行並且空一格
        }

        //迴圈關鍵字後面空一格
        while ($min <= $max) {
            // 變數跟運算子中間空一格
            // 結束的右小括號和開始的左大括弧同一行並且空一格
        }

        do {
            //開始左大括弧在同一行
            //結束右大括弧跟迴圈關鍵字同一行並且空一格
        } while ($min <= $max);

        foreach ($literable as $key => $value) {
            // 迴圈關鍵
        }
    }

    /**
     * closure 傳多個參數或變數的時候
     * 可拆成多行，且一行一個參數或變數
     */
    public function closureExample()
    {
        $multi_args = function (
            $arg_line1,
            $arg_line2,
            $arg_line3
        ) {
            // 傳入多個參數，一個參數一行
        };

        $long_vars = function () use (
            $var1,
            $var2
        ) {
            // 傳入多個變數，一個參數一行
        };

        $long_args_and_vars = function (
            $arg_line1,
            $arg_line2,
            $arg_line3
        ) use (
            $var1,
            $var2
        ) {
            // 傳入多個參數跟變數，一個一行
        };
    }
}