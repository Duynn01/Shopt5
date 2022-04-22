<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css' ">
    <link rel="stylesheet" href="{{asset('frontend/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/fonts/fontawesome-free-6.0.0/css/all.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap&subnet=vietnamese"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('auth/login')}}">
    <link rel="stylesheet" href="{{asset('auth/register')}}">
</head>

<body>
    <!-- Block Element Modifier -->
    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate">
                            Vào cửa hàng trên ứng dụng Shop

                            <!--  Header QR code  -->
                            <div class="header__qr">
                                <img src="{{asset('frontend/img/qr-code.png')}}" alt="QR Code" class="header__qr-img">
                                <div class="header__qr-apps">
                                    <a href="" class="header__qr-link">
                                        <img src="{{asset('frontend/img/google-play.png')}}" alt="Google Play"
                                            class="header__qr-download-img">
                                    </a>
                                    <a href="" class="header__qr-link">
                                        <img src="{{asset('frontend/img/apps-store.png')}}" alt="App Store"
                                            class="header__qr-download-img">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-title--no-pointer">Kết nối</span>
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fab fa-facebook"></i>
                            </a>
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-notify">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon fas fa-bell"></i>
                                Thông báo
                            </a>
                            <div class="header__notify">
                                <header class="header__notify-header">
                                    <h3>Thông báo mới nhận</h3>
                                </header>
                                <ul class="header__notify-list">
                                    <li class="header__notify-item header__notify-item--viewed">
                                        <a href="" class="header__notify-link">
                                            <img src="https://cnes.com.vn/wp-content/uploads/2019/04/dong-ho-automatic-chay-duoc-bao-lau-anh-2.jpg'"
                                                alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Dong ho chinh hang</span>
                                                <span class="header__notify-descriotion">mo ta dong ho chinh hang</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item header__notify-item--viewed">
                                        <a href="" class="header__notify-link">
                                            <img src="https://cnes.com.vn/wp-content/uploads/2019/04/dong-ho-automatic-chay-duoc-bao-lau-anh-2.jpg'"
                                                alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Dong ho chinh hang</span>
                                                <span class="header__notify-descriotion">mo ta dong ho chinh hang</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item header__notify-item--viewed">
                                        <a href="" class="header__notify-link">
                                            <img src="https://cnes.com.vn/wp-content/uploads/2019/04/dong-ho-automatic-chay-duoc-bao-lau-anh-2.jpg'"
                                                alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Dong ho chinh hang</span>
                                                <span class="header__notify-descriotion">mo ta dong ho chinh hang</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="header__notify-footer">
                                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon far fa-question-circle"></i>
                                Trợ giúp
                            </a>
                        </li>
                        <!-- <a href="register.html"
                            class="header__navbar-item header__navbar-item--strong header__navbar-item--separate">Đăng
                            ký</a>

                        <a href="login.html" class=" header__navbar-item header__navbar-item--strong">Đăng nhập</a> -->

                        <li class="header__navbar-item header__navbar-user">
                            <img src="{{asset('frontend/img/logo_dongho.jpg')}}" alt="" class="header__navbar-user-img">
                            <span class="header__navbar-user-name">{{Auth::user()->name}}</span>

                            <ul class="header__navbar-user-menu">
                                <li class="header__navbar-user-item">
                                    <a href="">Tài khoản của tôi</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="">Địa chỉ</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="">Đơn mua</a>
                                </li>
                                <li class="header__navbar-user-item header__navbar-user-item--separate">
                                    <a href="">Đăng xuất</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <!-- Header with search -->
                <div class="header-with-search">
                    <div class="header__logo">
                        <a href="" class="header__logo-img">
                            <img src="{{asset('frontend/img/logo_dongho.jpg')}}" alt="Logo" class="header__logo-img">
                        </a>
                    </div>

                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder="Tìm kiếm">
                            <!-- Search history -->
                            <div class="header__search-history">
                                <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                                <ul class="header__search-history-list">
                                    <li class="header__search-history-item">
                                        <a href="">Đồng hồ trẻ</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="">Đồng hồ người lớn</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="header__search-btn">
                            <i class="header__search-btn-icon fas fa-search"></i>
                        </button>
                    </div>

                    <!-- Cart layout -->
                    <div class="header__cart">
                        <div class="header__cart-wrap">
                            <i class="header__cart-icon fas fa-shopping-cart"></i>
                            <span class="header__cart-notice">3</span>
                            <!-- No cart them class: header__cart-list--no-cart -->
                            <div class="header__cart-list">
                                <img src="{{asset('frontend/img/no_cart.png')}}" alt="" class="header__cart-no-cart-img">
                                <span class="header__cart-list-no-cart-msg">
                                    Chưa có sản phẩm
                                </span>

                                <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                                <ul class="header__cart-list-item">
                                    <!-- Cart item -->
                                    <li class="header__cart-item">
                                        <img src="https://vati.vn/wp-content/uploads/2018/09/z1027662466861_b5cbf1968679a475e95a2afd838c878c.jpg'"
                                            alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Đồng hồ tròn</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">1.000.000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">1</span>
                                                </div>
                                            </div>
                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">
                                                    Phân loại: Bạc
                                                </span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="https://vati.vn/wp-content/uploads/2018/09/z1027662466861_b5cbf1968679a475e95a2afd838c878c.jpg'"
                                            alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Đồng hồ tròn</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">1.000.000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">1</span>
                                                </div>
                                            </div>
                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">
                                                    Phân loại: Bạc
                                                </span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header__cart-item">
                                        <img src="https://vati.vn/wp-content/uploads/2018/09/z1027662466861_b5cbf1968679a475e95a2afd838c878c.jpg'"
                                            alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name">Đồng hồ tròn</h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price">1.000.000đ</span>
                                                    <span class="header__cart-item-multiply">x</span>
                                                    <span class="header__cart-item-qnt">1</span>
                                                </div>
                                            </div>
                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">
                                                    Phân loại: Bạc
                                                </span>
                                                <span class="header__cart-item-remove">Xóa</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <a href="#" class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="app__container">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category__heading">Danh mục</h3>

                            <ul class="category-list">
                                <li class="category-item category-item--active">
                                    <a href="#" class="category-item__link">Đồng hồ cho nam</a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-item__link">Đồng hồ cho nữ</a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-item__link">Đồng hồ cho trẻ em</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="grid__column-10">
                        <div class="home-filter">
                            <span class="home-filter__label">Sắp xếp theo</span>
                            <button class="home-filter__btn btn">Phổ biến</button>
                            <button class="home-filter__btn btn btn--primary">Mới nhất</button>
                            <button class="home-filter__btn btn">Bán chạy</button>

                            <div class="select-input">
                                <span class="select-input__label">Giá</span>
                                <i class="select-input__icon fas fa-angle-down"></i>
                                <!-- List options -->
                                <ul class="select-input__list">
                                    <li class="select-input_item">
                                        <a href="" class="select-input_link">Giá: Thấp đến cao</a>
                                    </li>

                                    <li class="select-input_item">
                                        <a href="" class="select-input_link">Giá: Cao đến thấp</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="home-filter__page">
                                <span class="home-filter__page-num">
                                    <span class="home-filter__page-current">1</span>/14
                                </span>

                                <div class="home-filter-page-control">
                                    <a href="" class="home-filter-page-btn home-filter-page-btn--disabled">
                                        <i class="home-filter-page-icon fas fa-angle-left"></i>
                                    </a>

                                    <a href="" class="home-filter-page-btn">
                                        <i class="home-filter-page-icon fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="home-product">
                            <div class="grid__row">
                                <!-- Product item -->
                                <div class="grid__column-2-4 ">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://cf.shopee.vn/file/20bfbaefcd85138ad14bb24de2856573_tn)">
                                        </div>
                                        <h4 class="home-product-item__name">
                                            Đồng Hồ Nam Dây Kim Loại Cao Cấp Chống Nước
                                        </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">235.000đ</span>
                                            <span class="home-product-item__price-current">149.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__solid">2 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">A</span>
                                            <span class="home-product-item__origin-name">Hà Nội</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">40%</span>
                                            <span class="home-product-item__sale-off-label">Giảm</span>
                                        </div>

                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://cf.shopee.vn/file/20bfbaefcd85138ad14bb24de2856573_tn)">
                                        </div>
                                        <h4 class="home-product-item__name">
                                            Đồng Hồ Nam Dây Kim Loại Cao Cấp Chống Nước
                                        </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">235.000đ</span>
                                            <span class="home-product-item__price-current">149.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__solid">2 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">A</span>
                                            <span class="home-product-item__origin-name">Hà Nội</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">40%</span>
                                            <span class="home-product-item__sale-off-label">Giảm</span>
                                        </div>

                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://cf.shopee.vn/file/20bfbaefcd85138ad14bb24de2856573_tn)">
                                        </div>
                                        <h4 class="home-product-item__name">
                                            Đồng Hồ Nam Dây Kim Loại Cao Cấp Chống Nước
                                        </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">235.000đ</span>
                                            <span class="home-product-item__price-current">149.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__solid">2 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">A</span>
                                            <span class="home-product-item__origin-name">Hà Nội</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">40%</span>
                                            <span class="home-product-item__sale-off-label">Giảm</span>
                                        </div>

                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://cf.shopee.vn/file/20bfbaefcd85138ad14bb24de2856573_tn)">
                                        </div>
                                        <h4 class="home-product-item__name">
                                            Đồng Hồ Nam Dây Kim Loại Cao Cấp Chống Nước
                                        </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">235.000đ</span>
                                            <span class="home-product-item__price-current">149.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__solid">2 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">A</span>
                                            <span class="home-product-item__origin-name">Hà Nội</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">40%</span>
                                            <span class="home-product-item__sale-off-label">Giảm</span>
                                        </div>

                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://cf.shopee.vn/file/20bfbaefcd85138ad14bb24de2856573_tn)">
                                        </div>
                                        <h4 class="home-product-item__name">
                                            Đồng Hồ Nam Dây Kim Loại Cao Cấp Chống Nước
                                        </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">235.000đ</span>
                                            <span class="home-product-item__price-current">149.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__solid">2 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">A</span>
                                            <span class="home-product-item__origin-name">Hà Nội</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">40%</span>
                                            <span class="home-product-item__sale-off-label">Giảm</span>
                                        </div>

                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://cf.shopee.vn/file/20bfbaefcd85138ad14bb24de2856573_tn)">
                                        </div>
                                        <h4 class="home-product-item__name">
                                            Đồng Hồ Nam Dây Kim Loại Cao Cấp Chống Nước
                                        </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">235.000đ</span>
                                            <span class="home-product-item__price-current">149.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__solid">2 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">A</span>
                                            <span class="home-product-item__origin-name">Hà Nội</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">40%</span>
                                            <span class="home-product-item__sale-off-label">Giảm</span>
                                        </div>

                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://cf.shopee.vn/file/20bfbaefcd85138ad14bb24de2856573_tn)">
                                        </div>
                                        <h4 class="home-product-item__name">
                                            Đồng Hồ Nam Dây Kim Loại Cao Cấp Chống Nước
                                        </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">235.000đ</span>
                                            <span class="home-product-item__price-current">149.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__solid">2 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">A</span>
                                            <span class="home-product-item__origin-name">Hà Nội</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">40%</span>
                                            <span class="home-product-item__sale-off-label">Giảm</span>
                                        </div>

                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://cf.shopee.vn/file/20bfbaefcd85138ad14bb24de2856573_tn)">
                                        </div>
                                        <h4 class="home-product-item__name">
                                            Đồng Hồ Nam Dây Kim Loại Cao Cấp Chống Nước
                                        </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">235.000đ</span>
                                            <span class="home-product-item__price-current">149.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__solid">2 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">A</span>
                                            <span class="home-product-item__origin-name">Hà Nội</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">40%</span>
                                            <span class="home-product-item__sale-off-label">Giảm</span>
                                        </div>

                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://cf.shopee.vn/file/20bfbaefcd85138ad14bb24de2856573_tn)">
                                        </div>
                                        <h4 class="home-product-item__name">
                                            Đồng Hồ Nam Dây Kim Loại Cao Cấp Chống Nước
                                        </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">235.000đ</span>
                                            <span class="home-product-item__price-current">149.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__solid">2 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">A</span>
                                            <span class="home-product-item__origin-name">Hà Nội</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">40%</span>
                                            <span class="home-product-item__sale-off-label">Giảm</span>
                                        </div>

                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img"
                                            style="background-image: url(https://cf.shopee.vn/file/20bfbaefcd85138ad14bb24de2856573_tn)">
                                        </div>
                                        <h4 class="home-product-item__name">
                                            Đồng Hồ Nam Dây Kim Loại Cao Cấp Chống Nước
                                        </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">235.000đ</span>
                                            <span class="home-product-item__price-current">149.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__solid">2 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">A</span>
                                            <span class="home-product-item__origin-name">Hà Nội</span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">40%</span>
                                            <span class="home-product-item__sale-off-label">Giảm</span>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>

                        <ul class="pagination home-product__pagination">
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fas fa-angle-left"></i>
                                </a>
                            </li>

                            <li class="pagination-item pagination-item--active">
                                <a href="" class="pagination-item__link">1</a>
                            </li>

                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">2</a>
                            </li>

                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">3</a>
                            </li>

                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">4</a>
                            </li>

                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">...</a>
                            </li>

                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">10</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fas fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer__item-link">Trung tâm trợ giúp</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer__item-link">Hướng dẫn mua hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Giới thiệu</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer__item-link">Giới thiệu</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer__item-link">Tuyển dụng</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer__item-link">Điều khoản</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Theo dõi</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer__item-link">
                                    <i class="footer__item-icon fab fa-facebook"></i>
                                    Facebook</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer__item-link">
                                    <i class="footer__item-icon fab fa-instagram"></i>
                                    Instagram
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer__item-link">
                                    <i class="footer__item-icon fab fa-linkedin"></i>
                                    Linkedin
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Danh mục</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer__item-link">Đồng hồ cho nam</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer__item-link">Đồng hồ cho nữ</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer__item-link">Đồng hồ cho trẻ em</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
                        <div class="footer__download">
                            <img src="{{asset('frontend/img/qr-code.png')}}" alt="" class="footer__download-qr">
                            <div class="footer__download-apps">
                                <a href="" class="footer__download-app-link"><img src="{{asset('frontend/img/google-play.png')}}"
                                        alt="Google Play" class="footer__download-app-img"></a>
                                <a href="" class="footer__download-app-link"><img src="{{asset('frontend/img/apps-store.png')}}"
                                        alt="App Store" class="footer__download-app-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="grid">
                    <p class="footer__text">{{Auth::user()->name}}</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Modal -->

</body>

</html>