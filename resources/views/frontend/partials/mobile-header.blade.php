<div>
    <div class="mobile-header-area d-block d-lg-none">
        <div class="container">
            <div class="menu-wrap">
                <div class="header-left">
                    <a class="brand-logo" href="http://127.0.0.1:8000"><img class="brand-image"
                            src="assets/images/logo.png" alt="Fashionwave" /></a>
                </div>
                <div class="header-right">
                    <a href="wishlist.html" class="wishlist-btn header-btn">
                        <div class="btn-left">
                            <i class="btn-icon flaticon-like"></i>
                            <span class="count wishListCuntFromController">0</span>
                        </div>
                    </a>
                    <a href="compare.html" class="compare-btn header-btn">
                        <div class="btn-left">
                            <i class="btn-icon flaticon-bar-chart"></i>
                            <span class="count CompareCuntFromController">0</span>
                        </div>
                    </a>
                    <a data-bs-toggle="offcanvas" href="#cartOffcanvasSidebar" role="button"
                        aria-controls="cartOffcanvasSidebar" class="cart-btn header-btn">
                        <div class="btn-left">
                            <i class="btn-icon flaticon-shopping-bag"></i>
                            <span class="count totalCountItem">2</span>
                        </div>
                    </a>
                    <button class="menu-bar" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasMobileMenu" aria-controls="offcanvasMobileMenu"><i
                            class="fas fa-bars"></i></button>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- mobile-header-area area end here  -->

<!-- mobile-menu-area area start here  -->
<div class="offcanvas offcanvas-start menu-offcanvas" tabindex="-1" id="offcanvasMobileMenu">
    <div class="mobile-menu-area">
        <div class="offcanvas-header">
            <a class="brand-logo" href="http://127.0.0.1:8000"><img class="brand-image" src="assets/images/logo.png"
                    alt="Fashionwave" /></a>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="menu-search-form">
            <form>
                <div class="search-wrap">
                    <select class="form-select">
                        <option selected>Categories</option>
                        <option value="/product/category/1">
                            Health Category</option>
                        <option value="/product/category/2">
                            Women Fashion</option>
                        <option value="/product/category/3">
                            Men Fashion</option>
                        <option value="/product/category/4">
                            Electronic</option>
                    </select>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobilesearch" name="search"
                            placeholder="Search Here" />
                        <button type="button" class="search-btn"><i class="flaticon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <nav class="main-menu">
            <ul class="menu-list">
                <li class="menu-item"><a class="menu-link" href="index.html">Home</a></li>
                <li class="menu-item"><a class="menu-link" href="shop.html">Shop</a>
                </li>
                <li class="menu-item"><a class="menu-link" href="about-us.html">Categories</a></li>
                <li class="menu-item"><a class="menu-link" href="about-us.html">About Us</a></li>
                <li class="menu-item"><a class="menu-link" href="/contact-us">Contact</a></li>

            </ul>
        </nav>
        <div class="menu-bottom">
            <a class="account-btn mb-3" href="/user/profile"><i class="user-icon flaticon-user"></i> Profile</a>
            <a class="account-btn mb-3" href="/user/logout"><i class="user-icon flaticon-user"></i>
                Logout</a>
        </div>
    </div>
</div>