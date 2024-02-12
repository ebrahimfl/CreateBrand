<?php
  function pricing ($price, $discount){
     $num = ($price * $discount) / 100;
     echo (int) $num.".00"; 
   }
  
?>

    <link rel="stylesheet" href="<?php base_url('assets/css/all_pricing.css') ?>">
    <!-- header text part -->


    <div class="parent_main_1 container">
        <h2>Order Now</h2>
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
                    <td><?php if ($discount!='') {
                        echo $discount."%";
                    }else{
                        $discount= 0;
                        echo $discount;
                    } ?></td>
                    <td><?php pricing($s_price, $discount) ?></td>
                    <td><form action="<?php base_url('include/order-fun.php') ?>" method="post">
                            <button type="submit" name="order">Order</button>
                            <input type="hidden" name="order_id" value="<?php echo $id; ?>">
                            <input type="hidden" name="price" value="<?php echo $s_price; ?> ">
                            <input type="hidden" name="discount" value="<?php echo $discount; ?> ">
                            <input type="hidden" name="ser_name" value="<?php echo $ser_name; ?> ">
                            <input type="hidden" name="help" value="<?php echo $help; ?> ">
                        </form>
                        |
                        <a href="<?php $url ?>">Details </a>
                    </td>
                </tr>
            <?php }  ?> 
            
            </tbody>

        
        </table>


        <?php if (isset($_SESSION['order'])) { ?>
            <h4 style="    margin-top: 20px;
    text-align: center;
    font-size: 18px;
    font-weight: 600;">You Order</h4>
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
            $i = 0; 
            foreach ($_SESSION['order'] as $key => $value) {
                ?>
                
                
                    
                    
                    <tr>
                        <td> <?php echo ($i + 1) ?> </td>
                        <td> <?php echo $value['ser_name'] ?></td>
                        <td> <?php echo $value['help'] ?></td>
                        <td> <?php echo $value['price'] ?></td>
                        <td> <?php echo $value['discount'] ?></td>
                        <td> <?php $de = (int)($value['price'] * $value['discount']) / 100 . '.00' ;
                        echo $aam =$value['price']-$de; ?></td>
                        <td>
                            <form action="<?php base_url('assets/php/userCore.php') ?>" method="post">

                                <button type='submit' name='remove'> Remove</button>
                                <input type='hidden' name='order_id' value='<?php echo $value['order_id'];  ?>'>
                            
                        </td>
                        <!-- Add other columns here if needed -->
                    </tr>
                    <?php
                    $i++;                    
                
            }
        ?>

        </tbody>
    </table>
<?php } ?>
<input type="submit" value="Order" name="order_conf" style="width: fit-content; padding: 5px 15px;     background: tomato;  color: white;  font-size: 16px; border: navajowhite; border-radius: 5px;    margin-top: 5px;  float: right; margin-right: 5px ">
</form>

    </div>

 
      