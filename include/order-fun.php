<?php

session_start();


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

?>
