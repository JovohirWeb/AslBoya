@extends('master')

@section('content')
      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== HOME ====================-->
         <section class="home section" id="home">
            <img src="{{asset('temp/assets/img/home-bg.jpg')}}" alt="home image" class="home__bg">
            <div class="home__shadow"></div>

            <div class="home__container container grid">
                <div class="home__data">
                    <h3 class="home__subtitle">
                        @lang('words.t')
                    </h3>

                    <h1 class="home__title">
                        @lang('words.y')
                    </h1>
                    <p class="home__description"> @lang('words.u')</p>

                    <a href="#" class="button">
                        @lang('words.i') <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="home__cards grid">
                    <article class="home__card">
                        <img src="{{asset('temp/assets/img/home-trees.jpg')}}" alt="home image" class="home__card-img">
                        <h3 class="home__card-title">Croatia</h3>
                        <div class="home__card-shadow"></div>
                    </article>

                    <article class="home__card">
                        <img src="{{asset('temp/assets/img/home-lake.jpg')}}" alt="home image" class="home__card-img">
                        <h3 class="home__card-title">Iceland</h3>
                        <div class="home__card-shadow"></div>
                    </article>

                    <article class="home__card">
                        <img src="{{asset('temp/assets/img/home-mountain.jpg')}}" alt="home image" class="home__card-img">
                        <h3 class="home__card-title">Italy</h3>
                        <div class="home__card-shadow"></div>
                    </article>

                    <article class="home__card">
                        <img src="{{asset('temp/assets/img/home-beach.jpg')}}" alt="home image" class="home__card-img">
                        <h3 class="home__card-title">Spain</h3>
                        <div class="home__card-shadow"></div>
                    </article>
                </div>
            </div>
         </section>

         <!--==================== ABOUT ====================-->
         <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title">
                        @lang('words.o')
                    </h2>
                    <p class="about__description">
                        @lang('words.a')
                    </p>

                    <a href="#" class="button">
                        @lang('words.p') <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="about__image">
                    <img src="{{asset('temp/assets/img/about-beach.jpg')}}" alt="about image" class="about__img">
                    <div class="about__shadow"></div>
                </div>
            </div>
         </section>

         <!--==================== POPULAR ====================-->
         <section class="popular section" id="popular">
            <h2 class="section__title">
                @lang('words.d')
            </h2>

            <div class="popular__container container grid">
                <article class="popular__card">
                    <div class="popular__image">
                        <img src="{{asset('temp/assets/img/popular-mountain.jpg')}}" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>
                    <h2 class="popular__title">
                        @lang('words.f')
                    </h2>

                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span>@lang('words.g')</span>
                    </div>
                </article>

                <article class="popular__card">
                    <div class="popular__image">
                        <img src="{{asset('temp/assets/img/popular-forest.jpg')}}" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>
                    <h2 class="popular__title">
                        @lang('words.h')
                    </h2>

                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span>Irland</span>
                    </div>
                </article>

                <article class="popular__card">
                    <div class="popular__image">
                        <img src="{{asset('temp/assets/img/popular-lake.jpg')}}" alt="popular image" class="popular__img">
                        <div class="popular__shadow"></div>
                    </div>
                    <h2 class="popular__title">
                        @lang('words.j')
                    </h2>

                    <div class="popular__location">
                        <i class="ri-map-pin-line"></i>
                        <span> Italy</span>
                    </div>
                </article>
            </div>
         </section>
         
         <!--==================== EXPLORE ====================-->
         <section class="explore section" id="explore">
            <div class="explore__container">
                <div class="explore__image">
                    <img src="{{asset('temp/assets/img/explore-beach.jpg')}}" alt="explore image" class="explore__img">
                    <div class="explore__shadow"></div>
                </div>
                
                <div class="explore__content container grid">
                    <div class="explore__data">
                        <h2 class="section__title">
                            @lang('words.k')
                        </h2>

                        <p class="explore__description">
                            @lang('words.l')
                        </p>
                    </div>


                    <div class="explore__user">
                        <img src="{{asset('temp/assets/img/explore-perfil.png')}}" alt="explore image" class="explore__perfil">
                        <span class="explore__name">Paul Jeams</span>
                    </div>

                </div>
            </div>
         </section>
         
         <!--==================== JOIN ====================-->
         <section class="join section">
            <div class="join__container container grid">
                <div class="join__data">
                    <h2 class="section__title">
                        @lang('words.z')
                    </h2>
                    <p class="join__description">
                        @lang('words.x')
                    </p>

                    <form action="" class="join__form">
                        <input type="text" placeholder="@lang('words.c')" class="join__input">

                        <button class="join__button button">
                            @lang('words.v') <i class="ri-arrow-right-line"></i>
                        </button>
                    </form>
                </div>

                <div class="join__image">
                    <img src="{{asset('temp/assets/img/join-island.jpg')}}" alt="join image" class="join__img">
                    <div class="join__shadow"></div>
                </div>
            </div>
         </section>

            <div class="local">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d749.7595058754387!2d69.240704!3d41.264508!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b72ff0d1bc1%3A0x5cc5ad3296bd03a4!2sASL%20BOYA!5e0!3m2!1sru!2sus!4v1698306829089!5m2!1sru!2sus" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </main>
      @endsection

      