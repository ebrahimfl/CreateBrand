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



