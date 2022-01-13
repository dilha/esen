@extends('layouts.main')
@section('content')

<div class="project1">

    <div class="newspage">
        <div class="container">
            <h4 class="page-title">{{  __('content.news')  }}</h4>
            <div>
                @foreach ($news as $news)
                    <div class="news-column">
                        <div class="news-column1" style="background-image: url(/storage/{{ $news->image }})">
                            <div class="column1-text">
                                <div class="column1-title">
                                    <h4 class="text text-while text-s34">{!! $news->title !!}</h4>
                                </div>
                                <div class="avtor text text-while text-s15">{{  __('content.author')  }}: {{ $news->author }}</div>
                                <div class="paragraf-news text text-while text-s15">
                                {{ $news->text }}
                                </div>
                                <a class="readmorenews text text-while text-s17" href="/news/{{ $news->id }}">{{  __('content.readMore')  }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection