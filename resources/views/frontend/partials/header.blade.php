<div>
    <header class="header-area d-none d-lg-block">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="header-top-left">
                            <a href="tel:+777 2345 7886">
                                <p class="contact-info">
                                    <i class="icon flaticon-phone"></i>
                                    Call Us:
                                    +123 2587 7886
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="header-top-right">
                            <div class="top-bar-menu">
                                <ul class="menu-list">
                                    <li class="menu-item"><a class="menu-link" href="javascript:void(0)"
                                            data-bs-toggle="modal" data-bs-target="#trackOrderModal">Track Order</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="switcher-lang-currency">
                                <div class="lang-switcher">
                                    <span class="flag"><img
                                            src="{{ asset('frontend/assets/images/language/en.png') }}"
                                            alt="united-states" /></span>
                                    <a href="javascript:void(0)" class="lang">
                                        English
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <ul class="lang-list">
                                        <li class="single-lang"><span class="flag"><img
                                                    src="{{ asset('frontend/assets/images/language/fr.png') }}"
                                                    alt="india"></span><a class="lang-text"
                                                href="/locale/fr">German</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="account-switcher">
                                <span class="flag"><img src="{{ asset('frontend/assets/images/user-avatar11.png') }}" alt="fashionwave"></span>
                                <a href="{{ route('login') }}" class="lang">My Account</a>
                                {{-- <span class="flag">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAGmUlEQVR4nO2dW2wUVRjH/zOzl267tHTbagNN5SJBBJRyMUWD4gX0QSVKREiML5AYE16IiYnhyRd5IISExChP6hMJPkIiqWBjVBCqNhIRsQRIJb1AW6At3evM+NAMdLdz5rI7c+bM9vslfenezny/+b7vnLnsSrqugxCHSNADcEvk+H3Xe1BhR53kx1j8QBI5Q8oJvlNElSSUED8F2CGKICGEBCmilKDFBCZEJAksgpDDXUgYRJTCU4zM64OAcMoA+I6bS4aEVYQZfmeLr0KqSUQpfonxRUg1iyjFazFcewhhj6cZMpcyoxSvMsWzDJnLMgDvtt8TIXNdhoEXcahYCMkoptJ4VCSEZJhTSVzKFkIyrCk3PmUJIRnOKCdOroWQDHe4jRctDAXD8cKQMqNynCweKUMEw5EQyg5vcBJHyhDBsBVC2eEtdvGkDBEMSyGUHf5gFVemEJLhL6z4UskSDFMhlB18MIszZYhgkBDBmCWEyhVfSuNNGSIYRUIoO4JhZtwpQwSD6z2Gm5pldL+UmPX/V39M48ywVvS/hiiwZ0kUbyxQsKpBRjICTKnAyQEV75/P2n7WwoSEra0KXmhRsKpBQnN8+g8A7uZ0XLuv4487Gr4bVHF6WIUqSG0Q4qbPzpRSJGR7m4Iv1sWRihefz6mXgaTNiJfPk/DJihh2tiuIyObng1oTEloTwLPNCvYui+LmlIbDV/I40ldA0F4elKwg+8eGpoeVc/+KKI5tnC3DYCTLHubuxRH0bk3gvUURpgwz2mplHOqIo2dLDRYHdEebEX8hesgzKQUA8MHSCD5dHYMssYMykjMX8tlTURzdEEdMKT+gaxoVnHslgdUNwd1mKISQR2okvLVQwcGnY7bPvZ2ZLWRXu4KPn7B/rROa4xJObKpBS9yTt3ONEEIA4NvnalAbsd8zR0r6eUscOLrePnpDaQ2/jan4656Gybx1dW6rlXG4IxgjQjR1FgVNx9/jOm5ldOQ0Hc1xCQOZ4tnYvuVRS5E/31axrzeH3rsPX6dIwNttCg6viaE1Yb5P7myP4NA/+aLX8UDSdZ1bQ2dNe0u5OqHhwOU8jv9XQFplPy8uA4PbalEfNRfy66iKF7szyDNiuiwpoWdLAknG67++nseenpzteL1EmJJlcHKggI6uNL65YS0DADqbZKYMAPioN8eUAQB9kzqO9OWZj7+5IALe7V0oIVcnNLx7NmsrwuD5FoX52LVJDefH7MvNsf4C87FUXMLaRr4hEkrIgct5ZF2U7JUN7OFfcCADAC6P65ZN/sn6OSzk5AB7bzUjFWMXlGuTzs3emGILaavlW7SEETKZ1zHqsn+mLJYe9124HbfIkHlRFwPyAHGEFNxP9KxW9O7eh/1Yge+sVxwh5WAl0c2enbRYx9xhHKrxi1AL6beo/UvqnG/aIos+UXpkwG9CLeTSPXY96Wxytmkr6yXmwhAALlp8hh+EWsgPw+wFS3udjE3N9pu36zH20aO7OR1/cj50Emoh58c03JxiB+zgmhjiFlu4NClh7+PsZtM15HCF6iGhFgIAn/ex57frUwq+31yDjvnFmykB2LZQwZnNNZbl6tAV9mEVv3hwjyGPA4xWBxeH0hraTqRdv2dCAS69lkC7TRMfSGvon9IRk6cb/nyLRSUAnBos4PWf+Hb0wo46KfQZklaB3T1ZFDTr/WlBQkZnk4K1jYqtjKG0ht2cj/IahF4IAHTf0vDh7zloHnzV1Hhexztnsxg2OTPJg6oQAgBfXS9g+y9ZjFlcBGHHvxMaNp5O49wo5+X5DKpGCACcGFCx8tQUvryaR8bFhVYjWR37L+awriuNKxPBXghU9MUBfjd2P5o6i8bY9Ammlx+dvtCuvVZCMgJk1OkrV4YyOi6Maui+paJrSHV12N8PjC8V4CqEYGMIqaqSVQ2QEMEoEhL0LwPMVWbGnTJEMGYJoSzhS2m8KUMEg4QIhqkQKlt8MIszZYhgMIVQlvgLK76WGUJS/MEqrlSyBMNWCGWJt9jFkzJEMBwJoSzxBvoi5RDi+jeo6CSWe9xUGMoQwXAthPqJO9zGq6wMISnOKCdOZZcskmJNufGpqIeQFHMqiUvFTZ2kFFNpPDyZZZGUabyIg2fT3rkuxavtp5/vrhD6+e4qx5cMMajmTPGrRPsqxKCaxPjdK7kIMQizGF6TFq49JKwzMZ7j5pohMwlDtgSxAwUmZCYiyQk6i4UQYhCkmKBFGAglpBQ/BYkioBShhZhRjiRRg2/G/+T0lZ3psvX/AAAAAElFTkSuQmCC"
                                            alt="Fashionwave">
                                    </span>

                                    <a href="javascript:void(0)" class="lang">rony <i class="fas fa-angle-down"></i></a>
                                    <ul class="account-list">
                                        <li class="single-lang"><a class="lang-text"
                                                href="/user/profile">Profile</a>
                                        </li>
                                        <li class="single-lang"><a class="lang-text"
                                                href="/user/logout">Logout</a></li>
                                    </ul> --}}
                        {{-- </div> --}} 
                        <div class="account-switcher dropdown">
                            <a href="javascript:void(0)" class="lang dropdown-toggle d-flex align-items-center"
                                id="accountDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="flag me-2">
                                    <img src="{{ asset('frontend/assets/images/user-avatar11.png') }}" alt="fashionwave"
                                        style="width: 30px; border-radius: 50%;">
                                </span>
                                @auth
                                    {{ Auth::user()->name }}
                                @else
                                    My Account
                                @endauth
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="accountDropdown">
                                @auth
                                    <li><a class="dropdown-item fs-4" href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                                    <li><a class="dropdown-item fs-4" href="{{ url('/user/profile') }}">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item fs-4">Logout</button>
                                        </form>
                                    </li>
                                @else
                                    <li><a class="dropdown-item fs-4" href="{{ route('login') }}">Login</a></li>
                                    <li><a class="dropdown-item fs-4" href="{{ route('register') }}">Register</a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="header-middle">
    <div class="container">
        <div class="header-middle-wrap">
            <div class="brand-area">
                <a class="brand-logo" href="{{ route('home') }}"><img class="brand-image"
                        src="{{ asset('frontend/assets/images/logo.png') }}" alt="Fashionwave" /></a>
            </div>
            <div class="search-area">
                <form action="#" method="get">
                    <div class="search-wrap">
                        <select class="form-select" name="category">
                            <option value="" selected>Categories</option>
                            <option value="1">
                                Health Category
                            </option>
                            <option value="2">
                                Women Fashion
                            </option>
                            <option value="3">
                                Men Fashion
                            </option>
                            <option value="4">
                                Electronic
                            </option>
                        </select>
                        <div class="form-group">
                            <input type="text" class="form-control" id="search" name="search"
                                placeholder="Search Here" />
                            <button type="submit" class="search-btn"><i class="flaticon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="header-right">

                <div class="wishlist single-btn">
                    <a href="{{ route('wishlist') }}" class="wishlist-btn header-btn">
                        <div class="btn-left">
                            <i class="btn-icon flaticon-like"></i>
                            <span class="count wishListCuntFromController">0</span>
                        </div>
                        <div class="btn-right">
                            <span class="btn-text">Wishlist</span>
                            <span class="item-count wishListCuntFromController">0
                                items</span>
                        </div>
                    </a>
                </div>
                <div class="compare single-btn">
                    <a href="{{ route('compare') }}" class="compare-btn header-btn">
                        <div class="btn-left">
                            <i class="btn-icon flaticon-bar-chart"></i>
                            <span class="count CompareCuntFromController">0</span>
                        </div>
                        <div class="btn-right">
                            <span class="btn-text">Compare</span>
                            <span class="item-count CompareCuntFromController">0
                                items</span>
                        </div>
                    </a>
                </div>

                <div class="cart single-btn">
                    <a data-bs-toggle="offcanvas" href="#cartOffcanvasSidebar" role="button"
                        aria-controls="cartOffcanvasSidebar" class="cart-btn header-btn">
                        <div class="btn-left">
                            <i class="btn-icon flaticon-shopping-bag"></i>
                            <span class="count totalCountItem">2</span>
                        </div>
                        <div class="btn-right">
                            <span class="btn-text">Your Cart</span>
                            <span class="price totalAmount">
                                $ 540</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-bottom">
    <nav class="menu-area">
        <ul class="main-menu">
            <li class="menu-item menu-item-has-children {{ Route::is('home') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="menu-item {{ Route::is('shop') ? 'active' : '' }}"><a class="menu-link"
                    href="{{ route('shop') }}">Shop</a>
            </li>

            <li class="menu-item {{ Route::is('about') ? 'active' : '' }}"><a class="menu-link"
                    href="{{ route('about') }}">About Us</a>
            </li>
            <li class="menu-item {{ Route::is('contact.us') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('contact.us') }}">Contact</a>
            </li>

        </ul>
    </nav>
</div>
</header>
</div>
