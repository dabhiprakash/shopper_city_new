<div class="sticky-footer sticky-content fix-bottom">
    <a href="index.php" class="sticky-link">
        <i class="d-icon-home"></i>
        <span>Home</span>
    </a>
    <a href="category.php" class="sticky-link">
        <i class="d-icon-volume"></i>
        <span>Categories</span>
    </a>
    <a href="wishlist.php" class="sticky-link">
        <i class="d-icon-heart"></i>
        <span>Wishlist</span>
</a>
    <a href="account.php" class="sticky-link">
        <i class="d-icon-user"></i>
        <span>Account</span>
    </a>
    <div class="header-search hs-toggle dir-up">
        <a href="#" class="search-toggle sticky-link">
            <i class="d-icon-search"></i>
            <span>Search</span>
        </a>
        <form action="#" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search your keyword..." required />
            <button class="btn btn-search" type="submit" title="submit-button">
                <i class="d-icon-search"></i>
            </button>
        </form>
    </div>
</div>

<a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

<?php 
     require_once "include/mobile-sidebar.php";
?>