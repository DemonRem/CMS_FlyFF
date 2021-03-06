@extends('layout')

@section('title', trans('nav.home'))

@section('content')
    <div class="box">
        <div class="ui primary attached message">
            <h1 class="header"><i class="home icon"></i>@yield('title')</h1>
        </div>
        <div class="ui attached fluid clearing segment">
            <section class="ui unstackable divided items">
                @foreach($articles as $article)
                    <article class="item">
                        <div class="ui small image">
                            <img src="{{ $article->image_thumbnail }}">
                        </div>
                        <div class="content">
                            <div class="header">{{ str_limit($article->title, 50) }}...</div>
                            <div class="meta">
                                <span class="detail">{!! $article->detail_info !!}</span>
                            </div>
                            <div class="description">
                                <p>{!! str_limit($article->content, 150) !!}...</p>
                            </div>
                            <div class="extra">
                                <a class="ui {{ $article->category->color }} label" href="{{ route('article.category.show', [$article->category, $article->category->slug]) }}">{{ $article->category->label }}</a>
                                @if($article->authorized_comment)
                                    <span class="ui teal label"><i class="comment outline icon"></i>{{ $article->comment_count }}</span>
                                @endif
                                <a class="ui right floated primary button" href="{{ route('article.show', [$article, $article->slug]) }}">@lang('article.show_more')<i class="right chevron icon"></i></a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </section>
            <div class="ui divider"></div>
            <a class="ui right floated button green basic" href="{{ route('article.index') }}">@lang('article.show_all')<i class="right chevron icon"></i></a>
        </div>
    </div>
@endsection

<?php /** @var \App\Model\Web\Article $article */ ?>