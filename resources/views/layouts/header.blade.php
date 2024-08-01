<?php

$elements = \App\Models\Elements::first();

?>
<header class="header way way-header">
    <div class="container">
        <div class="header__container">
            <a href="/" class="header__logo">
                <img src="{{ asset('img/logo-h-3.png') }}" alt="Salem HR" />
            </a>
            <nav class="header__nav">
                <ul class="header__nav-list">
                    <li class="header__nav-item">
                        <a href="/" class="header__nav-link">{{ __('messages.home') }}</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="/products" class="header__nav-link">{{ __('messages.products') }}</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="/about" class="header__nav-link">{{ __('messages.about') }}</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="/resources" class="header__nav-link">{{ __('messages.resources') }}</a>
                    </li>
                </ul>
{{--                <div class="header__lang" style="display: none">--}}
{{--                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                        <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="header__lang-item{{ App::getLocale() == $localeCode ? ' active' : '' }}">--}}
{{--                            {{ $properties['native'] }}--}}
{{--                        </a>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
            </nav>
            <div class="header__controls">
                <a href="{{$elements->login_link}}" style="display: none" target="_blank" class="header__login white-btn">{{ __('messages.login') }}</a>
                <a href="#" class="header__demo black-btn">{{ __('messages.request_demo') }}</a>
            </div>
            <div class="burger" id="menu-icon">
                <div class="burger__dot burger__dot--line burger__dot--left-top"></div>
                <div class="burger__dot burger__dot--aside"></div>
                <div class="burger__dot burger__dot--line burger__dot--right-top"></div>
                <div class="burger__dot burger__dot--aside"></div>
                <div class="burger__dot burger__dot--aside"></div>
                <div class="burger__dot burger__dot--aside"></div>
                <div class="burger__dot burger__dot--line burger__dot--left-bottom"></div>
                <div class="burger__dot burger__dot--aside"></div>
                <div class="burger__dot burger__dot--line burger__dot--right-bottom"></div>
            </div>
        </div>
    </div>
</header>
