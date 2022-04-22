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
    <link rel="stylesheet" href="{{asset('fonts/fontawesome-free-6.0.0/css/all.min.css')}}">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap&subnet=vietnamese"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('index')}}">
    <link rel="stylesheet" href="{{asset('login')}}">
</head>

<body>
    <!-- Modal -->
    <div class="modal">
        <div class=" modal__overplay"></div>

        <div class="modal__body">

            <!-- Register form -->

            <div class="auth-form">
                <div class=" auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký</h3>
                        <a href="{{url('login')}}" class=" header__navbar-item  auth-form__switch-btn">Đăng nhập</a>
                    </div>
                <form action="{{ route('post_register') }}" method="post">
                <?php //Hiển thị thông báo thành công?>
                @if ( Session::has('success') )
                    <strong>{{ Session::get('success') }}</strong>
                @endif

            <?php //Hiển thị thông báo lỗi?>
                @if ( Session::has('error') )
                        <strong>{{ Session::get('error') }}</strong>
                @endif
                @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                @endif    
                @csrf
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" name="name" class="auth-form__input" placeholder="Tên đăng kí của bạn">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" name="password" class="auth-form__input" placeholder="Mật khẩu">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" name="password_confirmation" class="auth-form__input" placeholder="Nhập lại mật khẩu">
                        </div>
                    </div>

                    <div class="auto-form__aside">
                        <p class="auth-form__policy-text">
                            <a href="" class="auth-form__text__link">Bạn đã đồng ý với "Điều khoản dịch vụ" và "Chính
                                sách bảo
                                mật"</a>
                        </p>
                    </div>

                    <div class="auth-form__controls">
                        <a href="" class="btn btn--normal auth-form__controls-back ">TRỞ LẠI</a>
                        <button class="btn btn--primary" type="submit" >ĐĂNG KÝ</button>

                    </div>
                </div>
                </form>

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