@php
    $oppositeLocale =  \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() === 'ar' ? 'EN' : 'AR'
@endphp
<a class="nav-link text-muted my-2" href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedUrl(strtolower($oppositeLocale)) }}" >
    {{ $oppositeLocale }}
</a>
