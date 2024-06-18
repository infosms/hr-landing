@extends('layouts.index')

@section('title', $seo->getTranslatedAttribute('meta_title', app()->getLocale(), 'ru'))
@section('seo_tags')
    <meta name="description" content="{{$seo->getTranslatedAttribute('meta_description', app()->getLocale(), 'ru')}}">
    <meta name="keywords" content="{{$seo->getTranslatedAttribute('meta_keywords', app()->getLocale(), 'ru')}}">
@endsection

@section('content')
    <main>
        <section class="banner">
            <div class="container">
                <div class="banner__container inner__content">
                    <h1 class="banner__title small__title way way-element-drop">
                        {{$aboutProduct-> getTranslatedAttribute('inner_title', app()->getLocale(), 'ru')}}
                    </h1>
                    <div class="banner__slider swiper way way-element-opacity">

                        <div class="swiper-wrapper">
                            @foreach ($aboutProduct->contents as $content)
                                <div class="banner__slider-item swiper-slide">
                                    <div class="banner__slider-img" data-fancybox="banner" data-src="/storage/{{ $content->image }}">
                                        <img src="/storage/{{ $content->image }}" alt=""/>
                                    </div>
                                    <div class="banner__slider-text">
                                        <p>
                                            {{ $content->getTranslatedAttribute('text', app()->getLocale(), 'ru') }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="banner__slider-arrows">
                            <a href="javascript:;" class="banner__slider-arrow prev">
                                <svg
                                    width="44"
                                    height="44"
                                    viewBox="0 0 44 44"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <rect
                                        x="43.25"
                                        y="43.25"
                                        width="42.5"
                                        height="42.5"
                                        rx="21.25"
                                        transform="rotate(-180 43.25 43.25)"
                                        stroke="#2A2730"
                                        stroke-opacity="0.2"
                                        stroke-width="1.5"
                                    />
                                    <path
                                        d="M31 22L13 22M13 22L19.1017 28M13 22L19.1017 16"
                                        stroke="#2A2730"
                                        stroke-width="1.5"
                                    />
                                </svg>
                            </a>
                            <a href="javascript:;" class="banner__slider-arrow next">
                                <svg
                                    width="44"
                                    height="44"
                                    viewBox="0 0 44 44"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <rect
                                        x="0.75"
                                        y="0.75"
                                        width="42.5"
                                        height="42.5"
                                        rx="21.25"
                                        stroke="#2A2730"
                                        stroke-opacity="0.2"
                                        stroke-width="1.5"
                                    />
                                    <path
                                        d="M13 22H31M31 22L24.8983 16M31 22L24.8983 28"
                                        stroke="#2A2730"
                                        stroke-width="1.5"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
