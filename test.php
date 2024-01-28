 <?php 

   // echo "<pre>";
  // print_r ($_SERVER)  ; 


function base_url ($url){
    echo "http://localhost/CreateBrand".$url;


}
echo "<pre>" ;
 print_r ($_SERVER) ; 
print_r ($_SERVER["QUERY_STRING"]);
print_r($_GET); 

?>  