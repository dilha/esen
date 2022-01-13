@extends('layouts.main')
@section('content')

<div class="projects1">

    <div class="vacancy-page">
        <div class="container">
            <div class="misson-block">
                <div class="mission-block__column1">
                    <h2 data-aos="fade-down">{{  __('content.mission')  }}:</h2>
                    <img src="/storage/{{ $mission->icon }}" data-aos="fade-right">
                    <p data-aos="fade-right">{{ $mission->text }}</p>
                </div>
                <div class="mission-block__column" data-aos="fade-left">
                     <img  src="/storage/{{ $mission->image }}">
                </div>
            </div>
        </div>
        <div class="values-block" data-aos="fade-down-right">
            <div class="container">
                <h2 data-aos="fade-down">{{  __('content.values')  }}:</h2>
                <div class="values-column-top">
                    @foreach ($values as $value)    
                        <div class="values-column">
                            <img src="/storage/{{ $value->image }}">
                            {!! $value->text !!}
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
        <div class="vacancy-block">
            <div class="container">
                @foreach ($vacancies as $vacancy)    
                    <div class="vacancy-column">
                        <div class="vacancy-part1" data-aos="fade-right"><img src="/storage/{{ $vacancy->image }}"></div>
                        <div class="vacancy-part2" data-aos="fade-left">
                            <h3>{{ $vacancy->title }}</h3>
                            {!! $vacancy->text !!}
                            <a href="#"><b>hr@esentaitower.com</b></a>

                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection