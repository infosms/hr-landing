@extends('layouts.index')

@section('title', $seo->getTranslatedAttribute('meta_title', app()->getLocale(), 'ru'))
@section('seo_tags')
    <meta name="description" content="{{$seo->getTranslatedAttribute('meta_description', app()->getLocale(), 'ru')}}">
    <meta name="keywords" content="{{$seo->getTranslatedAttribute('meta_keywords', app()->getLocale(), 'ru')}}">
@endsection

@section('content')
    <main>
        <section class="resources">
            <div class="container">
                <div class="resources__container inner__content">
                    <h1 class="recources__title title way way-element-drop">
                       {{ __('messages.ourResources') }}
                    </h1>
                    <div class="resources__items">
                        <div class="resources__item way way-element-opacity">
                            <div class="resources__item-img">
                                <img src="{{asset('img/res-1.png')}}" alt=""/>
                            </div>

                    
                            <div class="resources__item-title">
                            {{ __('messages.user_manual') }}

                            </div>
                            <div class="resources__item-text">
                                <p>
                                    {{$guideInfo->getTranslatedAttribute('text', app()->getLocale(), 'ru')}}
                                </p>
                            </div>
                            <div class="resources__item-links">
                                @foreach($guides as $item)
                                    <a href="{{$item -> link}}" target="_blank">{{$item -> getTranslatedAttribute('title', app()->getLocale(), 'ru')}}</a>
                                @endforeach
                            </div>
                        </div>
                    
                        <div class="resources__item way way-element-opacity">
                            <div class="resources__item-img">
                                <img src="{{asset('img/res-2.png')}}" alt=""/>
                            </div>

                            @foreach($videos as $video)
                            <div class="resources__item-title">
                            {{ $video -> getTranslatedAttribute('title', app()->getLocale(), 'ru') }}
                            </div>
                            <div
                                class="resources__item-video"
                                data-src="{{ $video -> video }}"
                                data-fancybox
                            >
                                <img src="/storage/{{ $video -> preview_image }}" alt=""/>
                            </div>
                            @endforeach

                        </div>
                     
                        

                        <div class="resources__item way way-element-opacity">
                            <div class="resources__item-img">
                                <img src="{{asset('img/res-3.png')}}" alt=""/>
                            </div>
                            <div class="resources__item-title">{{ __('messages.frequently_asked_questions') }}</div>
                            <div class="resources__main-accordeons">
                                @foreach($faq as $item)
                                    <div class="resources__main-accordeon">
                                        <a
                                            href="javascript:;"
                                            class="resources__main-title js-accordeons__item-title"
                                        >
                                            {{$item -> getTranslatedAttribute('question', app()->getLocale(), 'ru')}}
                                            <svg
                                                width="12"
                                                height="12"
                                                viewBox="0 0 12 12"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path d="M6 0V12" stroke="#2A2730"/>
                                                <path d="M12 6L-2.98023e-07 6" stroke="#2A2730"/>
                                            </svg>
                                        </a>
                                        <div
                                            class="resources__main-body js-accordeons__item-body"
                                            style="display: none"
                                        >
                                            <p>
                                                {{$item -> getTranslatedAttribute('answer', app()->getLocale(), 'ru')}}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
