<?php
  function pricing ($price, $discount){
     $num = ($price * $discount) / 100;
     echo (int) $num.".00"; 
   }
  
?>





    <link rel="stylesheet" href="assets/css/all_pricing.css">
    <!-- header text part -->


    <div class="parent_main_1 container">
        <h2>Service Description</h2>
    </div>
    <div class="parent_child_2 container">
        <table>
            <thead class="tttt">
                <tr>
                    <td>SL</td>
                    <td>Service Description</td>
                    <td>Details</td>
                    <td>Price </td>
                    <td>Discount </td>
                    <td>Amount </td>
                    <td>Action </td>
                </tr>
            </thead>
            <tbody>
            <?php
                $show =$function;
                $ser = $show->show("service");
                $serial = 1;
                while ($conn = mysqli_fetch_assoc($ser)) {
                    $id = $conn['id'];
                    $ser_name = $conn['ser_name'];
                    $s_price = $conn['s_price'];
                    $ser_dec = $conn['ser_dec'];
                    $ser_img = $conn['ser_img'];
                    $date = $conn['date'];
                    $url = $conn['url'];
                    $discount = $conn['discount'];
                    $help = $conn['help'];
                ?>

   
                <tr>
                    <td><?php echo $serial ++?></td>
                    <td><?php echo $ser_name ?></td>
                    <td><?php echo $help ?></td>
                    <td><?php echo $s_price ?></td>
                    <td><?php echo $discount."%" ?></td>
                    <td><?php pricing($s_price, $discount) ?></td>
                    <td> <a href="#">Order </a>|
                        <a href="<?php $url ?>">Details </a>
                    </td>
                </tr>
            <?php }  ?> 

            </tbody>

        
        </table>
    </div>