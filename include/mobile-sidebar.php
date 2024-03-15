<div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>

        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>

        <div class="mobile-menu-container scrollable">
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit" title="submit-button">
                    <i class="d-icon-search"></i>
                </button>
            </form>

            <ul class="mobile-menu mmenu-anim">
                <li class="<?php if ($activePage == 'index') {
                                echo "active";
                            } ?>">
                    <a href="index.php">Home</a>
                </li>
                <li class="<?php if ($activePage == 'category') {
                                echo "active";
                            } ?>">
                    <a href="category.php">Categories</a>
                </li>
                <li class="<?php if ($activePage == 'shop') {
                                echo "active";
                            } ?>">
                    <a href="shop.php">Products</a>
                </li>
                <li class="<?php if ($activePage == 'blog') {
                                echo "active";
                            } ?>">
                    <a href="blog.php">Blog</a>
                </li>
                <li class="<?php if ($activePage == 'wishlist') {
                                echo "active";
                            } ?>">
                    <a href="wishlist.php">Wishlist</a>
                </li>
                <li class="<?php if ($activePage == 'about-us') {
                                echo "active";
                            } ?>">
                    <a href="about-us.php">About Us</a>
                </li>
                <?php
                if (isset($_SESSION)) {
                    if (!empty($_SESSION['user_id'])) {
                ?>
                        <li class="<?php if ($activePage == 'account') {
                                        echo "active";
                                    } ?>">
                            <a href="account.php">Account</a>
                        </li>
                <?php
                    }else{
                        ?>
                        <li class="<?php if ($activePage == 'login') {
                                        echo "active";
                                    } ?>">
                            <a href="login.php">Login</a>
                        </li>
                        <?php
                    }
                }
                ?>
                <li class="<?php if ($activePage == 'contact-us') {
                                echo "active";
                            } ?>">
                    <a href="contact-us.php">Contact Us</a>
                </li>
                
            </ul>
        </div>
    </div>