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
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                        <li><a href="#" class="active">Blog</a></li>
                        <li>Grid 3 Columns</li>
                    </ul>
                </div>
            </nav>
            <div class="page-content pb-10 mb-10">
                <div class="container">
                    <ul class="nav-filters filter-underline blog-filters justify-content-center" data-target=".posts">
                        <li><a href="#" class="nav-filter active" data-filter="*">All</a><span>15</span></li>
                        <li><a href="#" class="nav-filter" data-filter=".fashion">Fashion</a><span>10</span></li>
                        <li><a href="#" class="nav-filter" data-filter=".lifestyle">Lifestyle</a><span>10</span></li>
                        <li><a href="#" class="nav-filter" data-filter=".shopping">Shopping</a><span>2</span></li>
                        <li><a href="#" class="nav-filter" data-filter=".sport">Sport</a><span>4</span></li>
                        <li><a href="#" class="nav-filter" data-filter=".summer-sale">Summer Sale</a><span>1</span></li>
                        <li><a href="#" class="nav-filter" data-filter=".travel">Travel</a><span>4</span></li>
                        <li><a href="#" class="nav-filter" data-filter=".winter-sale">Winter Sale</a><span>1</span></li>
                    </ul>
                    <div class="posts grid post-grid row" data-grid-options="{
                        'layoutMode': 'fitRows'
                    }">
                        <div class="grid-item col-sm-6 col-lg-4 lifestyle shopping winter-sale">
                            <article class="post">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="images/blog/3col/1.jpg" width="380" height="280" alt="post" />
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        on <a href="#" class="post-date">Jun 22, 2018</a>
                                        | <a href="#" class="post-comment"><span>2</span> Comments</a>
                                    </div>
                                    <h4 class="post-title"><a href="post-single.html">Explore Fashion Trending For Women
                                            In Autumn
                                            2020</a>
                                    </h4>
                                    <p class="post-content">
                                        Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo,
                                        eget blandit nunc tortor eu nibh. Suspenditus libero eu augue.
                                    </p>
                                    <a href="post-single.html" class="btn btn-link btn-underline btn-primary">Read
                                        more<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>
                        <div class="grid-item col-sm-6 col-lg-4 lifestyle sport">
                            <article class="post inner-video ">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="images/blog/3col/2.jpg" width="380" height="280" alt="post" />
                                    </a>
                                    <span class="video-play"></span>
                                    <video width="380">
                                        <source src="video/memory-of-a-woman.mp4" type="video/mp4">
                                    </video>
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        on <a href="#" class="post-date">Nov 6, 2019</a>
                                        | <a href="#" class="post-comment"><span>7</span> Comments</a>
                                    </div>
                                    <h4 class="post-title"><a href="post-single.html">Complete Set Of Ski Tools</a></h4>
                                    <p class="post-content">
                                        Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo,
                                        eget blandit nunc tortor eu nibh. Suspenditus libero eu augue.
                                    </p>
                                    <a href="post-single.html" class="btn btn-link btn-underline btn-primary">Read
                                        more<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>
                        <div class="grid-item col-sm-6 col-lg-4 fashion lifestyle">
                            <article class="post">
                                <figure class="post-media">
                                    <div class="owl-carousel owl-theme owl-dot-inner owl-dot-white row cols-1 gutter-no"
                                        data-owl-options="{
                                        'items': 1    
                                    }">
                                        <img src="images/blog/3col/3.jpg" width="380" height="280" alt="post" />
                                        <img src="images/blog/3col/2.jpg" width="380" height="280" alt="post" />
                                        <img src="images/blog/3col/1.jpg" width="380" height="280" alt="post" />
                                    </div>
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        on <a href="#" class="post-date">Nov 18, 2019</a>
                                        | <a href="#" class="post-comment"><span>9</span> Comments</a>
                                    </div>
                                    <h4 class="post-title"><a href="post-single.html">Women's Trending Sunglasses And
                                            Clothing
                                        </a></h4>
                                    <p class="post-content">
                                        Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo,
                                        eget blandit nunc tortor eu nibh. Suspenditus libero eu augue.
                                    </p>
                                    <a href="post-single.html" class="btn btn-link btn-underline btn-primary">Read
                                        more<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>
                        <div class="grid-item col-sm-6 col-lg-4 travel summer-sale">
                            <article class="post">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="images/blog/3col/4.jpg" width="380" height="280" alt="post" />
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        on <a href="#" class="post-date">Jun 6, 2019</a>
                                        | <a href="#" class="post-comment"><span>3</span> Comments</a>
                                    </div>
                                    <h4 class="post-title"><a href="post-single.html">Women's Fashion Summer Dress
                                        </a></h4>
                                    <p class="post-content">
                                        Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo,
                                        eget blandit nunc tortor eu nibh. Suspenditus libero eu augue.
                                    </p>
                                    <a href="post-single.html" class="btn btn-link btn-underline btn-primary">Read
                                        more<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>
                        <div class="grid-item col-sm-6 col-lg-4 travel hobbies">
                            <article class="post">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="images/blog/3col/5.jpg" width="380" height="280" alt="post" />
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        on <a href="#" class="post-date">May 17, 2018</a>
                                        | <a href="#" class="post-comment"><span>4</span> Comments</a>
                                    </div>
                                    <h4 class="post-title"><a href="post-single.html">Explore Fashion Ipad And
                                            Accessories
                                        </a></h4>
                                    <p class="post-content">
                                        Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo,
                                        eget blandit nunc tortor eu nibh. Suspenditus libero eu augue.
                                    </p>
                                    <a href="post-single.html" class="btn btn-link btn-underline btn-primary">Read
                                        more<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>
                        <div class="grid-item col-sm-6 col-lg-4 hobbies">
                            <article class="post">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="images/blog/3col/6.jpg" width="380" height="280" alt="post" />
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        on <a href="#" class="post-date">Nov 22, 2020</a>
                                        | <a href="#" class="post-comment"><span>9</span> Comments</a>
                                    </div>
                                    <h4 class="post-title"><a href="post-single.html">The Best Choice For Spending Time
                                        </a></h4>
                                    <p class="post-content">
                                        Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo,
                                        eget blandit nunc tortor eu nibh. Suspenditus libero eu augue.
                                    </p>
                                    <a href="post-single.html" class="btn btn-link btn-underline btn-primary">Read
                                        more<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
                                aria-disabled="true">
                                <i class="d-icon-arrow-left"></i>Prev
                            </a>
                        </li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-next" href="#" aria-label="Next">
                                Next<i class="d-icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>

        <?php 
            require_once "include/footer.php";
        ?>

    </div>

    <?php 
        require_once "include/mobile-menu.php";
   ?>
<?php 
    require_once "include/footer_script.php";
?>
</body>
</html>