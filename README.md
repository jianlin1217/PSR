# PSR

https://www.php-fig.org/psr/psr-1/

<h3>
檔案只能使用 <?php 和 <?= 標籤<br>
檔案字元編碼只能用 UTF-8 檔首無 BOM<br>
檔案應該只宣告符號 (class、function、constant)<br>
或是造成副作用(例如產生輸出、修改 .ini 檔之類)兩者擇一<br>
不應該兩個都做<br>
Namespace 和 Class 必須遵循"自動載入(PSR-4)"的規範<br>
Class 命名必須用首字母大寫駝峰式(StudlCaps)<br>
Class 常數必須全部用大寫字母命名，多個單字之間用 _ (下底線)連接<br>
Method 命名必須用首字母小寫駝峰式(camelCase)<br>
</h3>
<h3>
程式碼必須用 4 個空格做縮排，而不是 tab<br>
一定不能硬性規定一行字元長度，軟性限制必須在 120 個字以內，一行應該在 80 個字元以內<br>
在宣告 namespace 和 use 的區塊後方一定要空一行<br>
class 的開始左大括弧必須要換下一行，結束右大括弧必須要換到程式碼下一行<br>
method 開始左大括弧必須要換下一行，結束右大括弧必須要換到程式碼下一行<br>
所有的 property 和 method 都必須要宣告可視範圍，abstract 和 final 必須要宣告在可視範圍前，<br>
static 必須宣告在可視範圍之後<br>
控制結構關鍵字後面必須要有一個空格，呼叫 method 或 function 時一定不要有空格<br>
控制結構的開始左大括弧必須要在同一行，結束右大括弧必須要換到程式碼下一行<br>
控制結構的開始左小括號後面絕對不要有空格，結束右小括號前面絕對不要有空格<br>
</h3>
