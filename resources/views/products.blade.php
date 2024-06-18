@extends('layouts.index')
@section('title', $seo->getTranslatedAttribute('meta_title', app()->getLocale(), 'ru'))
@section('seo_tags')
    <meta name="description" content="{{$seo->getTranslatedAttribute('meta_description', app()->getLocale(), 'ru')}}">
    <meta name="keywords" content="{{$seo->getTranslatedAttribute('meta_keywords', app()->getLocale(), 'ru')}}">
@endsection

@section('content')
    <main>
        <section class="products">
            <div class="container">
                <div class="products__container inner__content">
                    <h1 class="products__title title way way-element-drop">
                    {{ __('messages.products') }}
                    </h1>
                    <div class="products__text way way-element-opacity">
                        <p>
                        {!! $productInfo -> getTranslatedAttribute('text', app()->getLocale(), 'ru') !!}
                        </p>
                    </div>
                    <div class="products__tabs way way-element-opacity">
                        <div class="products__tabs-links">
                            @foreach ($ourProducts as $index => $product)
                                <a
                                    href="javascript:;"
                                    class="products__tabs-link {{ $index == 0 ? 'active' : '' }}"
                                    data-id="{{ $product->id }}"
                                >{{ sprintf('%02d', $index + 1) }} {{ $product->getTranslatedAttribute('title', app()->getLocale(), 'ru') }}</a>
                            @endforeach
                        </div>
                        <div class="products__tabs-contents">
                            @foreach ($ourProducts as $index => $product)
                                <div class="products__tabs-content {{ $index == 0 ? 'active' : '' }}" data-id="{{ $product->id }}">
                                    <p>
                                        {{ $product->getTranslatedAttribute('text', app()->getLocale(), 'ru') }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
