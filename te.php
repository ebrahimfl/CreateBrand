<?php

$a = fopen("test.txt","w");
readfile("test.txt");
fwrite($a,"amar sonar bangla ami tomai valobashia;djf;alsf 2 3 fxdzgbdf");
fclose($a);
readfile("test.txt");

//fclose($file);

//unlink("test.txt");


?>