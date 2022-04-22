<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="{{asset('frontend/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/fonts/fontawesome-free-6.0.0/css/all.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap&subnet=vietnamese"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('index')}}">
    <link rel="stylesheet" href="{{asset('register')}}">
</head>

<body>
    <!-- Modal -->
    <div class="modal">
        <div class=" modal__overplay"></div>

        <div class="modal__body">


            <!-- Login form -->
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>

                        <a href="{{url('register')}}" class="header__navbar-item auth-form__switch-btn">Đăng
                            ký</a>
                    </div>
                    <form action="{{ route('post_login') }}" method="post">
                        @csrf
                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="text" class="auth-form__input" placeholder="Tên đăng nhâp của bạn" name="name">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" placeholder="Mật khẩu" name="password">
                            </div>
                        </div>
                        <div class="auth-form__controls">
                            <a href="{{url('register')}}" class="btn btn--normal auth-form__controls-back ">TRỞ LẠI</a>
                            <button class="btn btn--primary" type='submit'>ĐĂNG NHẬP</button>
                        </div>
                    </form>
                    <!-- <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="name của bạn">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Mật khẩu">
                        </div>

                    </div>

                    <div class="auto-form__aside">
                        <div class="auth-form__help">
                            <a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                            <span class="auth-form__help-separate"></span>
                            <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                        </div>
                    </div> -->

                    
                </div>

                <div class="auth-form__socials">
                    <a href=""
                        class="auth-form__socials--facebook auth-form__socials-icon btn btn--size-s btn--with-icon">
                        <i class="fab fa-facebook-square"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Facebook
                        </span>
                    </a>
                    <a href=""
                        class="auth-form__socials--google auth-form__socials-icon btn btn--size-s btn--with-icon">
                        <i class="fab fa-google"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Google
                        </span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</body>

</html>