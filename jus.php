<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

echo "User Agent: $user_agent";

// কিছু শর্তের ভিত্তিতে ডিভাইস তথ্য প্রদান করা হতে পারে
if (strpos($user_agent, 'Mobile') !== false) {
    echo "এটি একটি মোবাইল ডিভাইস";
} else {
    echo "এটি একটি কম্পিউটার বা অন্যান্য ডিভাইস";
}

// echo "<br>";
// echo $_SERVER['PHP_SELF']."<br>"; // path location bole dei
// echo $_SERVER['GATEWAY_INTERFACE']."<br>"; // 
// echo $_SERVER['SERVER_ADDR']."<br>"; // 
// echo $_SERVER['SERVER_NAME']."<br>"; // 
// echo $_SERVER['SERVER_SOFTWARE']."<br>"; // 
// echo $_SERVER['SERVER_PROTOCOL']."<br>"; // 
// echo $_SERVER['REQUEST_METHOD']."<br>"; // 
// echo $_SERVER['REQUEST_TIME']."<br>"; // 
// echo $_SERVER['QUERY_STRING']."<br>"; // 
// echo $_SERVER['HTTP_ACCEPT']."<br>"; // 
// //echo $_SERVER['HTTP_ACCEPT_CHARSET']."<br>"; // 
// echo $_SERVER['HTTP_HOST']."<br>"; // 
// //echo $_SERVER['HTTP_REFERER']."<br>"; // 
// //echo $_SERVER['HTTPS']."<br>"; // 
// echo $_SERVER['REMOTE_ADDR']."<br>"; // 
// //echo $_SERVER['REMOTE_HOST']."<br>"; // 
// //echo $_SERVER['REMOTE_PORT']."<br>"; // 
// echo $_SERVER['SCRIPT_FILENAME']."<br>"; // 
// echo $_SERVER['SERVER_ADMIN']."<br>"; // 
// echo $_SERVER['SERVER_PORT']."<br>"; // 
// echo $_SERVER['SERVER_SIGNATURE']."<br>"; // 
// echo $_SERVER['PATH_TRANSLATED']."<br>"; // 
// echo $_SERVER['SCRIPT_NAME']."<br>"; // 
// echo $_SERVER['SCRIPT_URI']."<br>"; // 
echo"<br>"; // 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #textarea{
            font-size: 16px;
        }
    </style>
</head>
<body>
<!-- <section>
    <div class="container">
        <div class="w_tool">
            <div class="font"><input type="number" name="" id="font_siz" min='1' max="100"n value="16" onchange="f1(this)"></div>
            <div class="sec">
                <button type="button" onclick="f2(this)" >f2 bold</button>
                <button type="button" onclick="f3(this)" >f2 italik</button>
                <button type="button" onclick="f4(this)" > under line</button>
            </div>
            <div class="th">
                <button type="button" onclick="f5(this)" >alain </button>
                <button type="button" onclick="f6(this)" >alain</button>
                <button type="button" onclick="f7(this)" > alain</button>
            </div>
            <div class="forth">
                <button type="button" onclick="f8(this)" >aA</button>
                <button type="button" onclick="f9(this)" >alain</button>
                <input type="color" name="" id="" onchange="f10(this)">
            </div>
            <div class="text">
                <textarea name="" id="textarea"  placeholder="content hearr" contenteditable="true"></textarea>
            </div>

        </div>

    </div>
</section> -->


<section>
    <div class="container">
        <div class="toolbar">
            <select name="font_size" id="">
                <option value="1">h1</option>
                <option value="2">h2</option>
                <option value="3">h2</option>
                <option value="4">h3</option>
                <option value="5">h4</option>
            </select>
            <div class="color">
                <input type="color" name="" id="">
            </div>
            <div class="btn">
                <button>a</button>
                <button>b</button>
                <button>c</button>
            </div>
            <div id="contant">
            
            </div>
        </div>

    </div>
</section>

<script>
function formatDoc(cmd, value=null) {
    if (value) {
        document.execCommand(cmd, false, value);
    }else{
        document.execCommand(cmd, false, value);
    }
    
}

   
</script>



</body>
</html>




