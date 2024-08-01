@extends('layouts.index')


@section('title', $seo->getTranslatedAttribute('meta_title', app()->getLocale(), 'ru'))
@section('seo_tags')
    <meta name="description" content="{{$seo->getTranslatedAttribute('meta_description', app()->getLocale(), 'ru')}}">
    <meta name="keywords" content="{{$seo->getTranslatedAttribute('meta_keywords', app()->getLocale(), 'ru')}}">
@endsection

@section('content')
    <main>
        <section class="hero">
            <div class="container">
                <div class="hero__container">
                    <div class="hero__left">
                        <h1 class="hero__title way way-element-drop">  {{$hero -> getTranslatedAttribute('title', app()->getLocale(), 'ru')}}</h1>
                        <div class="hero__text way way-element-drop">
                            <p>
                                {!!$hero -> getTranslatedAttribute('text', app()->getLocale(), 'ru')!!}
                            </p>
                        </div>
                    </div>
                    <div class="hero__img way way-element-drop">
                        @if(isset($hero->video[0]['download_link']))
                            <video controls="controls" autoplay muted loop class="lazy" >
                                <source data-src="storage/{{ asset($hero->video[0]['download_link']) }}" type="video/mp4"/>
                            </video>
                        @endif
{{--                        <script>var promise = document.querySelector('.hero__img video').play();</script>--}}
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var video = document.querySelector('.hero__img video');
                                var src = video.querySelector('source').getAttribute('data-src');
                                video.querySelector('source').setAttribute('src', src);
                                video.load();
                                var promise = video.play();
                                if (promise !== undefined) {
                                    promise.catch(error => {
                                        console.error("Error attempting to play the video:", error);
                                    });
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </section>

        <section class="product">
            <div class="container">
                <div class="product__container content">
                    <h2 class="product__title title way way-element-drop">
                        @foreach ($title as $t)
                            <span @if ($loop->first) class="active" @endif>{{ $t->getTranslatedAttribute('title', app()->getLocale(), 'ru') }}</span>
                        @endforeach
                    </h2>
                    <div class="product__items" style="grid-template-columns: repeat({{count($aboutProduct)}}, 1fr)">
                        @foreach($aboutProduct as $item)
                            <a href="/products/{{$item -> id}}" class="product__item">
                                <div class="product__item-box">
                                    <span></span>
                                    <div class="product__item-block way way-element-drop">
                                        <p class=product__item-block_title>{{$item -> getTranslatedAttribute('title', app()->getLocale(), 'ru')}}</p>
                                        <br>
                                        <p> {{$item -> getTranslatedAttribute('text', app()->getLocale(), 'ru')}}</p>
                                        <div class="product__item-btn">{{__('messages.read_more')}}</div>
                                    </div>
                                </div>

                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="video">
            <div class="container">
                <div
                    class="video__block way way-element-drop"
                    data-fancybox
                    data-src="{{$elements -> main_page_video}}"
                >
                    <img src="/storage/{{$elements -> main_page_video_image}}" alt=""/>
                </div>
            </div>
        </section>
        <section class="price">
            <div class="container">
                <div class="price__container content">
                    <h2 class="price__title title way way-element-drop">{{ __('messages.license_rates') }}</h2>
                    <div class="price__table">
                        <div class="price__table-subtitle way way-element-left">
                        {{__('messages.quantity')}}
                        </div>
                        <div class="price__table-subtitle way way-element-right">
                        {{__('messages.cost')}}
                        </div>

                        <div class="price__table-col">
                            <ul class="price__table-list">
                                @foreach($costs  as $item )
                                    <li class="way way-element-left">{{$item-> getTranslatedAttribute('quantity', app()->getLocale(), 'ru')}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="price__table-col">
                            <ul class="price__table-list">
                                @foreach($costs as $item)
                                    <li class="way way-element-right">{{ $item->getTranslatedAttribute('cost', app()->getLocale(), 'ru') }}</li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="benefits">
            <div class="container">
                <div class="benefits__container">
                    <div class="benefits__items way way-element-opacity">
                        @foreach($benefits as $item)
                            <div class="benefits__item">
                                <div class="benefits__item-wrapper">
                                    <div class="benefits__item-front">
                                        <div class="benefits__item-img">
                                            <img src="/storage/{{ $item->background}}"/>
                                        </div>
                                        <div class="benefits__item-wrap">
                                            <div class="benefits__item-title">{{ $item->getTranslatedAttribute('title', app()->getLocale(), 'ru')}}</div>
                                            <div style="margin-top: 20px;" class="benefits__item-text">   {!! $item->getTranslatedAttribute('text_front', app()->getLocale(), 'ru')!!}</div>
                                        </div>

                                    </div>

                                    <div class="benefits__item-back">
                                        <div class="benefits__item-icon">
                                            <img src="/storage/{{ $item->icon}}" alt=""/>
                                        </div>
                                        <p>
                                            {!! $item->getTranslatedAttribute('text_bac', app()->getLocale(), 'ru')!!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <section class="problem">
            <div class="container">
                <div class="problem__container content">
                    <h2 class="problem__title title way way-element-drop">
                    {{__('messages.problems_solutions')}}
                    </h2>
                    <div class="problem__items">
                        @foreach($problems as $item)
                            <div class="problem__item">
                                <div class="problem__item-subtitle way way-element-left">
                                    {{$item -> getTranslatedAttribute('problems', app()->getLocale(), 'ru')}}
                                </div>
                                <div class="problem__item-text way way-element-right">
                                    <p>
                                        {{$item -> getTranslatedAttribute('decisions', app()->getLocale(), 'ru')}}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="clients">
            <div class="container">
                <div class="clients__container">
                    <h2 class="clients__title title way way-element-drop">
                    {{ __('messages.respected_partners_clients') }}

                    </h2>
                    <div class="clients__items swiper way way-element-opacity">
                        <div class="swiper-wrapper">
                            @foreach($clients as $item)
                                <div class="clients__item swiper-slide" title="{{$item->getTranslatedAttribute('name', app()->getLocale(), 'ru')}}">
                                    <img src="/storage/{{$item->image}}" alt=""/>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="salem">
            <div class="container">
                <div class="salem__container content">
                    <h2 class="salem__title way way-element-drop">{{ __('messages.about') }}</h2>
                    <div class="salem__info">
                        <div class="salem__info-text way way-element-opacity">
                            <p>
                                {!! $about -> getTranslatedAttribute('main_page', app()->getLocale(), 'ru')!!}
                            </p>
                        </div>
                        <a href="/about" class="salem__link black-btn way way-element-opacity"
                        >{{ __('messages.learn_more') }}</a
                        >
                    </div>
                </div>
            </div>
        </section>

        <section class="reviews">
            <div class="container">
                <div class="reviews__container">
                    <h2 class="reviews__title title way way-element-drop">{{ __('messages.reviews') }}</h2>
                    <div class="reviews__items way way-element-opacity">
                        <!-- <div class="swiper-wrapper"> -->
                        @foreach($reviews as $index => $review)
    @php
        // Decode the images JSON field, fallback to an empty array if it's null
        $images = $review->images ? json_decode($review->images) : [];
        // Determine the first image to use in the main review item
        $firstImage = count($images) > 0 ? $images[0] : "";
    @endphp
    <div class="reviews__wrap">
        <div
            class="reviews__item"
            data-fancybox="{{ 'gallery-' . $review->id }}"
            data-src="/storage/{{$firstImage}}"
        >
            @if(count($images) > 1)
                <div class="reviews__item-gallery" hidden>
                    @foreach(array_slice($images, 1) as $image) {{-- Start from the second image --}}
                        <img
                        src="/storage/{{$image}}"
                        data-fancybox="{{ 'gallery-' . $review->id }}"
                        data-src="/storage/{{$image}}"
                        alt=""
                        >
                    @endforeach
                </div>
            @endif

            <div class="reviews__item-img">
                <img src="/storage/{{$review->image}}" alt=""/>
            </div>
            <div class="reviews__item-text">
                <p>
                    {{$review->getTranslatedAttribute('text', app()->getLocale(), 'ru')}}
                </p>
            </div>
            <a href="javascript:;" class="reviews__item-link">{{ __('messages.read_more') }}</a>
        </div>
    </div>
@endforeach






                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
