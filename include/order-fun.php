<?php

session_start();
// session_destroy();


if (isset($_POST['order'])) {
    $id = $_POST['order_id'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $ser_name = $_POST['ser_name'];
    $help = $_POST['help'];
    if (isset($_SESSION['order'])) {

        // check add hoiche ki na
        $my_order = array_column($_SESSION['order'],'order_id');
        if (in_array($id, $my_order)) {
            echo "<script>
            window.location=('../loginSign.php?log=pricing');
            alert('Service Already Added');
          </script>";

        }

        // count koto gulo seesion ache
        else {
            $count = count($_SESSION['order']);

        // add kora
        $_SESSION['order'][$count]= array(
            'order_id' => $_POST['order_id'],
            'price' => $_POST['price'],
            'discount' => $_POST['discount'],
            'ser_name' => $_POST['ser_name'],
            'help' => $_POST['help']
        );
        echo "<script>
            window.location=('../loginSign.php?log=pricing');
            alert('Service Added');
          </script>";
        }
        
        
    }else {
        $_SESSION['order'][0] = array(
            'order_id' => $_POST['order_id'],
            'price' => $_POST['price'],
            'discount' => $_POST['discount'],
            'ser_name' => $_POST['ser_name'],
            'help' => $_POST['help']
        );
        echo "<script>
            window.location=('../loginSign.php?log=pricing');
            alert('Service Added');
          </script>";

    }
    
}

// if (isset($_POST['remove'])) {    
//     $remove = $_POST['order_id'];
//     foreach ($_SESSION['order'] as $key => $value) {
        
//         if (isset($value['order_id'])) {
//             $se_remove = $value['order_id'];
//             if ($remove == $se_remove) {
        
//                 unset($_SESSION['order'][$key]);
//                 $_SESSION['order']= array_values($_SESSION['order']);
//                 header("location:../loginSign.php?log=pricing");
                
//             }
//         } else {            
//             echo "Value key is not set for order with key: $key";
//         }

//     }    
    
// }
// if (isset($_POST['order_conf'])) {
//     foreach ($_SESSION['order'] as $key => $value) {
        
//         $order_id = $value['order_id']  ;
//         $price = $value['price']  ;
//         $discount = $value['discount']  ;
//         $ser_name = $value['ser_name']  ;
//         $help = $value['help']  ;
//         echo '<pre>';
//         print_r($value);
//         echo '</pre>';
//     }
// }

?>
