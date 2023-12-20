<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="{{asset('temp/assets/img/fovicons.jpg')}}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="{{asset('temp/assets/css/styles.css')}}">

      <title>Asl Boya </title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
        <header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav__logo">
                @lang('words.ad')
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">@lang('words.q')</a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link">@lang('words.w')</a>
                    </li>

                    <li class="nav__item">
                        <a href="#popular" class="nav__link">@lang('words.e')</a>
                    </li>

                    <li class="nav__item">
                        <a href="./shop.html" class="nav__link">@lang('words.r')</a>
                    </li>

                    <li class="nav__item">
                        <a href="/lang/uz" class="nav__link">UZ</a>
                    </li>

                    <li class="nav__item">
                        <a href="/lang/ru" class="nav__link">Ru</a>
                    </li>
                                 
                </div>
                </ul>

                

                <!-- Close button -->
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-fill"></i>
            </div>
         </nav>
        </header>


        @yield('content')



        <!--==================== FOOTER ====================-->
      <footer class="footer">
         <div class="footer__container container grid">
            <div class="footer__content grid">
                <div>
                    <a href="#" class="footer__logo">@lang('words.ad')</a>

                    <p class="footer__description">
                        @lang('words.b') 
                    </p>
                </div>


                <div class="footer__data grid">

                    <div>
                        <h3 class="footer__title">@lang('words.q')</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="" class="footer__link">@lang('words.w') </a>
                            </li>

                            <li>
                                <a href="" class="footer__link">@lang('words.e') </a>
                            </li>

                            <li>
                                <a href="" class="footer__link">@lang('words.r') </a>
                            </li> 
                        </ul>
                    </div>

                    <div>
                        <h3 class="footer__title">@lang('words.n')</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="" class="footer__link">@lang('words.m')</a>
                            </li>

                            <li>
                                <a href="" class="footer__link">@lang('words.qa')</a>
                            </li>

                            <li>
                                <a href="" class="footer__link">@lang('words.ws')</a>
                            </li> 
                        </ul>
                    </div>

                    
                    <div>
                        <h3 class="footer__title">@lang('words.ed')</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="" class="footer__link">@lang('words.rf')</a>
                            </li>

                            <li>
                                <a href="" class="footer__link">@lang('words.tg')</a>
                            </li>

                            <li>
                                <a href="" class="footer__link">@lang('words.yh')</a>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__group">
                <div class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-line"></i>
                    </a>

                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-line"></i>
                    </a>

                    <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class="ri-twitter-line"></i>
                    </a>
                </div>

                <span class="footer__copy">&#169; @lang('words.uj')</span>
            </div>

         </div>
      </footer>

      <!--========== SCROLL UP ==========-->
      <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
      </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

      <!--=============== SCROLLREVEAL ===============-->
    <script src="{{asset('temp/assets/js/scrollreveal.min.js')}}"></script>

      <!--=============== MAIN JS ===============-->
    <script src="{{asset('temp/assets/js/main.js')}}"></script>
</body>
</html>