<?php
    class PsrPratice
    {
        //變數psr  變數一定要設定可視範圍  public/private 等等
        const PI="3.141596";
        public $choose_buy=1;
        public static $flag=true;
        public static $arrayList=array();

        //方法psr
        /**
         * function 多個參數拆成多行
         */
        public function getChoose(
            int $choose_buy,
            bool $flag
        ){
             switch($choose_buy)
            {
                case 1:
                    echo '1';
                    break;
                case 2:
                    echo '2';
                    //no break
                case 3:  //沒有任何敘述則不用 nobreak
                case 4:    
                    return;//return可以代替break
            }
            /**
             * 條件判斷式範例
             * 結束右小括號跟開始左大括弧同一行
             * 關鍵字後面空一格
             */
            if($flag == true && $choose_buy == 1) {

            }elseif($flag == true && $choose_buy == 2) {

            }else{

            }
        }

        //方法2練習
        public function loop(
            int $count,
            array $arrayList   
        ){
            //迴圈關鍵字後面空一格，多個條件中間用逗點(,)隔開，逗點前一定沒有空格，後面一定空一格
            for ($i = 0; $i < $count; $i++){
                // 變數跟運算子中間空一格
                // 結束的右小括號和開始的左大括弧同一行並且空一格
            }
            static $j=0;
            //迴圈關鍵字後方空格
            while ($j < $count){
                $j++;
            }

            static $h=0;
            do{
                $h++;
            } while ($h < $count);

            foreach ($arrayList as $key => $value) {

            }
        }

        public function exceptionExample()
        {
            try{
                //try body
            } catch (Exception $e){
                //catch
            } catch (Exception $e){
                //catch body 2
            }
                
        }
    }
    /**
    * 這邊範例以傳入用多行做範例
    * 將實作分成多行，一行獨立宣告一個實作，且第一個換行
    */
    class AController
    {

    }
    class BController
    {

    }
    class CController
    {

    }

    //extends  實作多個時需要一行extends一個
    class OneController extends Controller implements 
        AController,
        BController,
        CController
    {
        public function argList(
            int $arg1,
            $arg2,
            array $arg3 = []
        ){
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
    }

?>