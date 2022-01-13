@extends('layouts.main')
@section('content')

<div class="projects1">
    <div class="news1">
        <div class="container">
            <h2>{!! $news->title !!}</h2>
            <p class="awtor">{{  __('content.author')  }}: {{ $news->author }}</p>
            {{-- @dd($detail) --}}
            @if ($detail->banner != null)
                <img class="news1back" src="/storage/{{ $detail->banner }}">    
            @else
                <img class="news1back" src="/storage/{{ $news->image }}"> 
            @endif
            {!! $detail->text !!}
        </div>
    </div>
</div>

@endsection