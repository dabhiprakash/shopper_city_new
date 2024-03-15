<!DOCTYPE html>
<html lang="en">
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
                <div class="page-header" style="background-image: url('images/shop/page-header-back.jpg'); background-color: #3c63a4;">
                    <h3 class="page-subtitle">Categories</h3>
                    <h1 class="page-title">Shop Default 8</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="demo1.html"><i class="d-icon-home"></i></a>
                        </li>
                        <li class="delimiter">/</li>
                        <li><a href="shop.html">Categories</a></li>
                        <li class="delimiter">/</li>
                        <li>Shop Default 8</li>
                    </ul>
                </div>

                <div class="page-content mb-10 pb-6">
                    <div class="container">
                        <div class="row main-content-wrap gutter-lg">
                            <div class="main-content">
                                <div class="row cols-2 cols-sm-3 cols-lg-4 product-wrapper">
                                <?php
                                    if( isset($_GET["cat_id"])){
                                        $get_catId = $_GET["cat_id"];
                                        $qry = "SELECT * FROM `vendor` WHERE `category_id` =$get_catId";
                                        $res = mysqli_query($conn, $qry); 
                                    }
                                     if (mysqli_num_rows($res) > 0) {
                                        while($row = mysqli_fetch_array($res)){
                                            $like = "";
                                            $vendor_id = $row['id'];
                                            if(isset($_SESSION)){
                                                if(!empty($_SESSION['user_id'])){
                                                    $user_id = $_SESSION['user_id'];
                                                    $qry2= "SELECT * FROM `wishlist` WHERE `user_id` = $user_id AND `vendor_id` = $vendor_id";
                                                    $res2 = mysqli_query($conn, $qry2); 
                                                    if (mysqli_num_rows($res2) > 0) {
                                                    $like = 1;
                                                    }
                                                }
                                            }
                                ?>
                                    <div class="product-wrap">
                                        <div class="product text-center shadow-media cart-full">
                                            <figure class="product-media">
                                                <a href="<?php echo $row['id']; ?>">
                                                    <img src="category/<?php echo $row['image']; ?>" alt="product" width="280" height="315" />
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">new</label>
                                                </div>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist <?php if($like != ""){echo "added remove-wishlist";}else{echo "add-wishlist";} ?>" data-id="<?php echo $row['id']; ?>" title="Add to wishlist"><i class="d-icon-heart<?php if($like != ""){echo"-full";} ?>"></i></a>
                                                    <!-- d-icon-heart-full -->
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-default-8.html"><?php echo $row['name']; ?></a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="<?php echo $row['id']; ?>"><?php echo $row['store_name']; ?></a>
                                                </h3>
                                                <!-- <div class="product-price"><ins class="new-price">$199.00</ins><del class="old-price">$210.00</del></div> -->
                                                <!-- <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="<?php //$row['id']; ?>" class="rating-reviews">( 6 reviews )</a>
                                                </div> -->
                                                <a href="<?php echo $row['id']; ?>" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Visit Store"><i class="d-icon-bag"></i>Visit Store</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                        }
                                    }else{
                                        echo '<h3>No any vendor.</h3>';
                                    }
                                ?>
                                </div>
                                <nav class="toolbox toolbox-pagination">
                                    <p class="show-info">Showing <span>12 of 56</span> Products</p>
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true"> <i class="d-icon-arrow-left"></i>Prev </a>
                                        </li>
                                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item page-item-dots"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item">
                                            <a class="page-link page-link-next" href="#" aria-label="Next"> Next<i class="d-icon-arrow-right"></i> </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <aside class="col-lg-3 sidebar shop-sidebar">
                                <div class="sidebar-overlay"></div>
                                <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                                <div class="sidebar-content">
                                    <div class="filter-actions mb-4">
                                        <a href="#" class="sidebar-toggle-btn toggle-remain btn btn-sm btn-outline btn-primary btn-rounded btn-icon-right">Filter<i class="d-icon-arrow-left"></i></a>
                                        <a href="#" class="filter-clean text-primary">Clean All</a>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">Product Categories</h3>
                                        <ul class="widget-body filter-items search-ul">
                                            <li>
                                                <a href="#">Clothing<span class="count">(6)</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Summer sale<span class="count">(2)</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Shirts<span class="count">(3)</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Trunks<span class="count">(1)</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Shoes<span class="count">(5)</span></a>
                                            </li>
                                            <li>
                                                <a href="#">Men<span class="count">(8)</span></a>
                                            </li>
                                            <li>
                                                <a href="#">Women<span class="count">(3)</span></a>
                                            </li>
                                            <li>
                                                <a href="#">Bags & Backpacks<span class="count">(5)</span></a>
                                            </li>
                                            <li>
                                                <a href="#">Watches<span class="count">(4)</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Men's<span class="count">(2)</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Woment's<span class="count">(2)</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Accessosries<span class="count">(1)</span></a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Ring<span class="count">(1)</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">Filter by Price</h3>
                                        <div class="widget-body">
                                            <form action="#">
                                                <div class="filter-price-slider"></div>
                                                <div class="filter-actions">
                                                    <div class="filter-price-text mb-4">
                                                        Price:
                                                        <span class="filter-price-range"></span>
                                                    </div>
                                                    <button type="submit" class="btn btn-sm btn-dark btn-filter btn-rounded">Filter</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">Size</h3>
                                        <ul class="widget-body filter-items">
                                            <li>
                                                <a href="#">Extra Large<span class="count">(2)</span></a>
                                            </li>
                                            <li>
                                                <a href="#">Large<span class="count">(5)</span></a>
                                            </li>
                                            <li>
                                                <a href="#">Medium<span class="count">(8)</span></a>
                                            </li>
                                            <li>
                                                <a href="#">Small<span class="count">(1)</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">Color</h3>
                                        <ul class="widget-body filter-items">
                                            <li>
                                                <a href="#">Black<span class="count">(2)</span></a>
                                            </li>
                                            <li>
                                                <a href="#">Blue<span class="count">(5)</span></a>
                                            </li>
                                            <li>
                                                <a href="#">Green<span class="count">(8)</span></a>
                                            </li>
                                            <li>
                                                <a href="#">White<span class="count">(1)</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">Brands</h3>
                                        <ul class="widget-body filter-items">
                                            <li>
                                                <a href="#">SLS<span>(2)</span></a>
                                            </li>
                                            <li>
                                                <a href="#">Cinderella<span>(5)</span></a>
                                            </li>
                                            <li>
                                                <a href="#">Comedy<span>(8)</span></a>
                                            </li>
                                            <li>
                                                <a href="#">Rightcheck<span>(1)</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
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
