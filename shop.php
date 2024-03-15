<!DOCTYPE html>
<html lang="en">
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
                    <h1 class="page-title">Shop Default 5</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="demo1.html"><i class="d-icon-home"></i></a>
                        </li>
                        <li class="delimiter">/</li>
                        <li><a href="shop.html">Categories</a></li>
                        <li class="delimiter">/</li>
                        <li>Shop Default 5</li>
                    </ul>
                </div>

                <div class="page-content mb-10 pb-6">
                    <div class="container">
                        <div class="row main-content-wrap gutter-lg">
                            <div class="main-content">
                                <nav class="toolbox sticky-toolbox sticky-content fix-top">
                                    <div class="toolbox-left">
                                        <a href="#" class="toolbox-item left-sidebar-toggle btn btn-outline btn-primary btn-rounded btn-icon-right">Filter<i class="d-icon-arrow-right"></i></a>
                                        <div class="toolbox-item toolbox-sort select-box text-dark">
                                            <label>Sort By :</label>
                                            <select name="orderby" class="form-control">
                                                <option value="default">Default</option>
                                                <option value="popularity" selected="selected">Most Popular</option>
                                                <option value="rating">Average rating</option>
                                                <option value="date">Latest</option>
                                                <option value="price-low">Sort forward price low</option>
                                                <option value="price-high">Sort forward price high</option>
                                                <option value>Clear custom sort</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="toolbox-right">
                                        <div class="toolbox-item toolbox-show select-box text-dark">
                                            <label>Show :</label>
                                            <select name="count" class="form-control">
                                                <option value="12">12</option>
                                                <option value="24">24</option>
                                                <option value="36">36</option>
                                            </select>
                                        </div>
                                        <div class="toolbox-item toolbox-layout">
                                            <a href="shop-list-mode.html" class="d-icon-mode-list btn-layout"></a>
                                            <a href="shop.html" class="d-icon-mode-grid btn-layout active"></a>
                                        </div>
                                    </div>
                                </nav>
                                <div class="row cols-2 cols-md-3 cols-lg-4 product-wrapper">
                                    <div class="product-wrap">
                                        <div class="product product-slideup-content text-center product-variable">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/shop/13.jpg" alt="product" width="280" height="315" />
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">new</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-default-5.html">Clothing</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="product.html">Coast Pool Comfort Jacket</a>
                                                </h3>
                                                <div class="product-price"><ins class="new-price">$199.00</ins><del class="old-price">$210.00</del></div>
                                            </div>
                                            <div class="product-hide-details">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i><span>Add to cart</span></a>
                                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product product-slideup-content text-center product-variable">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/shop/1.jpg" alt="product" width="280" height="315" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-default-5.html">bags</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="product.html">Fashionable Hooded Coat</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$35.00</span>
                                                </div>
                                            </div>
                                            <div class="product-hide-details">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i><span>Add to cart</span></a>
                                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product product-slideup-content text-center product-variable">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/shop/2.jpg" alt="product" width="280" height="315" />
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-sale">27% Off</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-default-5.html">bags</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="product.html">Women's Fashion Handbag</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$19.00</span>
                                                </div>
                                            </div>
                                            <div class="product-hide-details">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i><span>Add to cart</span></a>
                                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product product-slideup-content text-center product-variable">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/shop/4.jpg" alt="product" width="280" height="315" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-default-5.html">Clothing</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="product.html">Fashionable Padded Jacket</a>
                                                </h3>
                                                <div class="product-price"><ins class="new-price">$98.00</ins><del class="old-price">$210.00</del></div>
                                            </div>
                                            <div class="product-hide-details">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i><span>Add to cart</span></a>
                                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product product-slideup-content text-center product-variable">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/shop/14.jpg" alt="product" width="280" height="315" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-default-5.html">bags</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="product.html">Cavin Fashion Suede Handbag</a>
                                                </h3>
                                                <div class="product-price"><ins class="new-price">$98.00</ins><del class="old-price">$210.00</del></div>
                                            </div>
                                            <div class="product-hide-details">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i><span>Add to cart</span></a>
                                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product product-slideup-content text-center product-variable">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/shop/3.jpg" alt="product" width="280" height="315" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-default-5.html">shoes</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="product.html">Women's Fashion Hood</a>
                                                </h3>
                                                <div class="product-price"><ins class="new-price">$98.00</ins><del class="old-price">$210.00</del></div>
                                            </div>
                                            <div class="product-hide-details">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i><span>Add to cart</span></a>
                                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product product-slideup-content text-center product-variable">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/shop/5.jpg" alt="product" width="280" height="315" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-default-5.html">Watches</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="product.html">Converse Blue Training Shoes</a>
                                                </h3>
                                                <div class="product-price"><ins class="new-price">$98.00</ins><del class="old-price">$210.00</del></div>
                                            </div>
                                            <div class="product-hide-details">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i><span>Add to cart</span></a>
                                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product product-slideup-content text-center product-variable">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/shop/12.jpg" alt="product" width="280" height="315" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-default-5.html">Watches</a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="product.html">Beyond OTP Jacket</a>
                                                </h3>
                                                <div class="product-price"><ins class="new-price">$98.00</ins><del class="old-price">$210.00</del></div>
                                            </div>
                                            <div class="product-hide-details">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                    <a href="#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i><span>Add to cart</span></a>
                                                    <a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i class="d-icon-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
