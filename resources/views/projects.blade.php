@extends('layouts.main')
@section('content')

<div class="projects1">

    <div class="page-projects">
        <div class="container">
            <div class="projects1-title" data-aos="fade-down">
                <h1>{{ $project->title }}</h1>
                <br>
            </div>
            {!! $detail->text !!}
            <div class="contain2">
                @foreach ($photos as $photo)
                    @if($loop -> index % 2)
                        <div class="contain2-column">
                            <div class="contain2-column-title">
                                {!! $photo->title !!}
                            </div>
                            <div class="contain2-column-img" data-aos="fade-left"><img src="/storage/{{ $photo->image }}"></div>
                        </div>
                    @else
                        <div class="contain2-column2">
                            <div class="contain2-column-img" data-aos="fade-left"><img src="/storage/{{ $photo->image }}"></div>
                            <div class="contain2-column-title">
                                {!! $photo->title !!}
                            </div>
                        </div>
                    @endif
                    <div class="line"></div>
                @endforeach
            </div>

        </div>

    </div>
</div>

@endsection