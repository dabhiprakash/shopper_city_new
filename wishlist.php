<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from d-themes.com/html/riode/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Feb 2024 11:27:08 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- /Added by HTTrack -->
    <head>
    <?php 
        require_once "include/header_script.php";
    ?>
    </head>
    <body>
        <div class="page-wrapper">
            <?php 
                require_once "include/header.php";
            ?>
            <main class="main">
                <nav class="breadcrumb-nav">
                    <div class="container">
                        <ul class="breadcrumb">
                            <li>
                                <a href="demo1.html"><i class="d-icon-home"></i></a>
                            </li>
                            <li>Wishlist</li>
                        </ul>
                    </div>
                </nav>
                <div class="page-content pt-10 pb-10 mb-2">
                    <div class="container">
                        <table class="shop-table wishlist-table mt-2 mb-4">
                            <thead>
                                <tr>
                                    <th class=""><span>image</span></th>
                                    <th>Name</th>
                                    <th class=""><span>Shop Name</span></th>
                                    <th class=""><span>Address</span></th>
                                </tr>
                            </thead>
                            <tbody class="wishlist-items-wrapper">
                                <?php
                                    $user_id = $_SESSION["user_id"];
                                    $qry = "SELECT wishlist.*, vendor.* FROM wishlist INNER JOIN vendor ON wishlist.vendor_id = vendor.id WHERE wishlist.user_id = $user_id";
                                    $res = mysqli_query($conn, $qry);
                                    $i = 0;
                                    if(mysqli_num_rows($res) > 0) {
                                        while($row = mysqli_fetch_array($res)){
                                            $i++;
                                ?>
                                    <tr>
                                    <td class="product-thumbnail">
                                        <a href="product-simple.html">
                                            <figure>
                                                <img src="category/<?php echo $row['image']; ?>" width="100" height="100" alt="" />
                                            </figure>
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a href="javascript:void(0)"><?php echo $row['name']; ?></a>
                                    </td>
                                    <td class="product-price">
                                        <span class="amount"><?php echo $row['store_name']; ?></span>
                                    </td>
                                    
                                    <td class="product-remove">
                                        <div>
                                            <a href="#" class="" title="Remove this product"><?php echo $row['street']; ?></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php 
                                    }
                                }else{
                                    echo "<tr><td></td><td><h2>Not Record Found.</h2></td><td></td><td></td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
            <?php 
                require_once "include/footer.php";
            ?>
        </div>
        <?php 
            require_once "include/mobile-menu.php";
            require_once "include/footer_script.php";
        ?>
    </body>
</html>
