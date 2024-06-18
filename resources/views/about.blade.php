@extends('layouts.index')
@section('title', $seo->getTranslatedAttribute('meta_title', app()->getLocale(), 'ru'))
@section('seo_tags')
    <meta name="description" content="{{$seo->getTranslatedAttribute('meta_description', app()->getLocale(), 'ru')}}">
    <meta name="keywords" content="{{$seo->getTranslatedAttribute('meta_keywords', app()->getLocale(), 'ru')}}">
@endsection

@section('content')
    <main>
        <section class="salem">
            <div class="container">
                <div class="salem__container inner__content">
                    <h2 class="salem__title way way-element-drop">{{ __('messages.about') }}</h2>
                    <div class="salem__info way way-element-opacity">
                        <div class="salem__info-text">
                            <p>
                          {!! $about-> getTranslatedAttribute('text', app()->getLocale(), 'ru') !!}
                            </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="timeline__title title way way-element-drop">
                            Timeline
                        </div>
                        <div class="timeline__items way way-element-before">
                            @foreach($timeline as $index => $item)
                                @php
                                    $color = $colors[$index % count($colors)];
                                @endphp
                                <div class="timeline__item">
                                    <div
                                        class="timeline__item-year way way-element-opacity"
                                        style="--year-color: {{ $color }}"
                                    >
                                        {{ $item->year }}
                                    </div>
                                    <div class="timeline__item-info">
                                        <div class="timeline__item-title way way-element-drop">
                                            {{ $item->getTranslatedAttribute('title', app()->getLocale(), 'ru') }}
                                        </div>
                                        <div class="timeline__item-text way way-element-drop">
                                            <p>
                                                {{ $item->getTranslatedAttribute('text', app()->getLocale(), 'ru') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="timeline__item-line way way-element-line"
                                        style="--line-color: {{ $color }}"
                                    ></div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
