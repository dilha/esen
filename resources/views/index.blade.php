@extends('layouts.main')
@section('content')

<div class="wrap animate__animated " data-in="animate__zoomIn" data-out="animate__zoomOut">
    <div class="soc">
        @foreach ($socials as $social)
        <div class="social">
            <a href="{{ $social->link }}" target="_blank">
                <img src="/storage/{{ $social->icon }}">
            </a>
        </div>
        @endforeach
        <div class="mail">{{ $contact->email }}</div>
        <div class="message"><img src="../img/icons/message.png"></div>
    </div>
    <div class="wrap-title">
        <div class="container">
            <div class="wrap_slid">
                <h2 class="text text-while text-s88 lol" id="lol">ESENTAI </h2>
                <h3 class="text text-while text-s133 lol" id="wow">TOWERS</h3>
            </div>
        </div>
    </div>
</div>


<div class="about">
    <div class="container">
        <div>
            <div class="about-title text text-s34 animate__animated " data-in="animate__lightSpeedInLeft" data-out="animate__zoomOut">
                <a style="color: black" href="/getInfrastructure">{{ __('content.about')  }}</a>
            </div>
            <div class="about-top">
                @foreach ($abouts as $about)
                <div class="about-top__column animate__animated " data-in="animate__lightSpeedInLeft" data-out="animate__lightSpeedOutLeft">
                    <img src="/storage/{{ $about->icon }}">
                    <h4 class="text text-s15">{{ $about->title }}</h4>
                    <p class="text text-s15">
                        {{ $about->text }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
        <div class="about-bottom__title animate__animated " data-in="animate__lightSpeedInLeft" data-out="animate__lightSpeedOutLeft">
            <h2 class="text text-s99">ESENTAI </h2>
            <h3 class="text text-s42">TOWERS</h3>
        </div>
        <div class="about-bottom">
            @foreach ($advantages as $advantage)
            <div class="about-bottom__column animate__animated " data-in="animate__lightSpeedInLeft" data-out="animate__lightSpeedOutLeft">
                <div class="about-btm__title">
                    <img src="/storage/{{ $advantage->icon }}">
                    <h5 class="text text-s34">
                        <a style="color: black" href="">
                            {{ $advantage->title }}
                        </a>
                    </h5>
                </div>
                <p class="text text-s15">
                    {{ $advantage->text }}
                </p>
            </div>
            @endforeach
        </div>
        <div class="about-img animate__animated " data-in="animate__lightSpeedInRight" data-out="animate__lightSpeedOutRight">
            <img src="../img/icons/about/about.png">
        </div>
    </div>
</div>


<div class="infrast">
    <div class="container">
        <div class="infr-title animate__animated " data-in="animate__lightSpeedInLeft" data-out="animate__lightSpeedOutLeft">
            {{ __('content.infrastructure')  }}
        </div>
        <div class="slider animate__animated " data-in="animate__lightSpeedInRight" data-out="animate__lightSpeedOutRight">
            <div class="slider_src">
                <div class="slider_src_text">
                    <h3 class="text text-while text-bold  text-s25"></h3>
                    <p class="text text-while text-s15">
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container_pagi">
        <a class="button-slider button-slider-page1 active" href="javascript:void(false)"></a>
        <a class="button-slider button-slider-page2" href="javascript:void(false)"></a>
        <a class="button-slider button-slider-page3" href="javascript:void(false)"></a>
        <a class="button-slider button-slider-page4" href="javascript:void(false)"></a>
        <a class="button-slider button-slider-page5" href="javascript:void(false)"></a>
        <a class="button-slider button-slider-page6" href="javascript:void(false)"></a>
    </div>
</div>

<div class="projects">
    <div class="container projects_box">
        <div class="projects-1">
            <div class="projects-1__column">
                <div class="project-1-title animate__animated " data-in="animate__lightSpeedInLeft" data-out="animate__lightSpeedOutLeft">
                    <h3 class="text text-s34">{{ __('content.projects')  }}</h3>
                </div>
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        @foreach ($projects as $project)
                        <div class="project-1-p animate__animated swiper-slide" data-in="animate__lightSpeedInLeft" data-out="animate__lightSpeedOutLeft">
                            <div class="swiper-text">
                                <h4 class="text text-s25">{{ $project->title }}</h4>
                                {!! $project->text !!}
                                <br><a href="/project/{{ $project->id }}">{{ __('content.readMore')  }}</a>
                            </div>
                            <div class="slider_project_1">
                                <img class="slider-1-img" src="/storage/{{ $project->image }}">
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="projects-1__column">
                <div class="project-1-title animate__animated " data-in="animate__lightSpeedInLeft" data-out="animate__lightSpeedOutLeft">
                    <h3 class="press-project text text-s34">{{ __('content.press')  }}</h3>
                </div>
                <div class="project-1-img animate__animated " data-in="animate__lightSpeedInLeft" data-out="animate__lightSpeedOutLeft">
                    @foreach ($presses as $press)
                    <img src="/storage/{{ $press->image }}">
                    @endforeach
                </div>
            </div>


        </div>
        <!-- <div class="projects-2 animate__animated " data-in="animate__lightSpeedInRight" data-out="animate__lightSpeedOutRight">  -->


        <!-- </div>  -->
    </div>
</div>
<div class="slider-page">
    <div class="container">
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach ($news as $news)
                <div class="project-1-p animate__animated swiper-slide" style="flex-direction: column;padding: 0 5rem;" data-in="animate__lightSpeedInLeft" data-out="animate__lightSpeedOutLeft">
                    <div class="slider-content__title">{!! $news->title !!}</div>
                    <div class="slider-content__data">
                        <p>{{ $news->author }}</p>
                    </div>
                    <div class="slider-content__paragraf">
                        <p>
                            {{ $news->text }}
                        </p>
                        <br>
                        <a href="/news" style="color:white">{{ __('content.readMore')  }}</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
<div class="partners" id="partners">
    <div class="container">
        <div class="partners-title animate__animated " data-in="animate__lightSpeedInLeft" data-out="animate__lightSpeedOutLeft">
            <h4 class="press-project text text-s34">{{ __('content.partners')  }}</h4>
        </div>
        <div class="partner-img animate__animated " data-in="animate__lightSpeedInLeft" data-out="animate__lightSpeedOutLeft">
            @foreach ($partners as $partner)
            <img src="/storage/{{ $partner->image }}">
            @endforeach
        </div>
    </div>
</div>
@endsection
