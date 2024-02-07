<?php
$show = new fun();
$ser = $show->show("service");
while ($conn = mysqli_fetch_assoc($ser)) {
    $id = $conn['id'];
    $ser_name = $conn['ser_name'];
    $s_price = $conn['s_price'];
    $ser_dec = $conn['ser_dec'];
    $ser_img = $conn['ser_img'];
    $date = $conn['date'];
?>

    <?php } ?>





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
                <tr>
                    <td> 1</td>
                    <td>স্ট্যাটিকওয়েব</td>
                    <td>১৫,০০০ </td>
                    <td>৫০%</td>
                    <td>৫০%</td>
                    <td>৭৫০০ </td>
                    <td> <a href="#">Order </a>|
                        <a href="#">Details </a>
                    </td>
                </tr>
                <tr>
                    <td> 1</td>
                    <td>লপমেন্ট:</td>
                    <td>১৫,০০০ </td>
                    <td>৫০%</td>
                    <td>৫০%</td>
                    <td>৭৫০০ </td>
                    <td> <a href="#">Order </a>|
                        <a href="#">Details </a>
                    </td>
                </tr>
                <tr>
                    <td> 1</td>
                    <td>বসাইটডিজাইনএবন্ট:</td>
                    <td>১৫,০০০ </td>
                    <td>৫০%</td>
                    <td>৫০%</td>
                    <td>৭৫০০ </td>
                    <td>
                        <a href="#">Order </a> |
                        <a href="#">Details </a>
                    </td>
                </tr>

            </tbody>


        </table>
    </div>