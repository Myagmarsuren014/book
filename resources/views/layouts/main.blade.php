<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Прогэр - ger of professionals ' }}</title>
    <meta name="description" content="@yield('descr', 'Прогэр нь хуулийн салбарын мэргэжилтнүүд болон хуулийн фирм нь дэлгэрэнгүй танилцуулга, мэдээллээ олон нийт, хууль зүйн үйлчилгээ шаардлагатай хүнд шууд хүргэх, нөгөө талаас иргэн, хуулийн этгээд нь өөрсдийн хэрэгцээ, шаардлагад хамгийн сайн тохирох хуульчийг олоход нь туслах зорилгоор бүтээгдсэн.')">
    <meta name="author" content="Д.Соёл-Эрдэнэ">
    <!-- facebook -->
    <meta property="og:url" content="@yield('url', "https://proger.mn$_SERVER[REQUEST_URI]")" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title', 'Прогэр - ger of professionals')" />
    <meta property="og:image" content="@yield('image', 'https://legaldata.mn/images/proger_cover.png')" />
    <meta property="og:description" content="@yield('descr', 'Прогэр нь хуулийн салбарын мэргэжилтнүүд болон хуулийн фирм нь дэлгэрэнгүй танилцуулга, мэдээллээ олон нийт, хууль зүйн үйлчилгээ шаардлагатай хүнд шууд хүргэх, нөгөө талаас иргэн, хуулийн этгээд нь өөрсдийн хэрэгцээ, шаардлагад хамгийн сайн тохирох хуульчийг олоход нь туслах зорилгоор бүтээгдсэн.')" />
    <!-- twitter -->
    <meta name="twitter:card" content="@yield('tw_summary', 'summary_large_image')" />
    <!--<meta name="twitter:site" content="@legaldata_mn" />
        <meta name="twitter:creator" content="@legaldata_mn" />-->
    <meta name="twitter:title" content="@yield('title', 'Прогэр - ger of professionals')" />
    <meta name="twitter:description" content="@yield('descr', 'Прогэр нь хуулийн салбарын мэргэжилтнүүд болон хуулийн фирм нь дэлгэрэнгүй танилцуулга, мэдээллээ олон нийт, хууль зүйн үйлчилгээ шаардлагатай хүнд шууд хүргэх, нөгөө талаас иргэн, хуулийн этгээд нь өөрсдийн хэрэгцээ, шаардлагад хамгийн сайн тохирох хуульчийг олоход нь туслах зорилгоор бүтээгдсэн.')" />
    <meta name="twitter:image" content="@yield('tw_image', 'https://legaldata.mn/images/proger_cover.png')" />

    @if (auth()->check())
        <meta name="ld-user-id" content="{{ auth()->user()->id }}">
    @else
        <meta name="ld-user-id" content="0">
    @endif

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('scripts')
</head>

<body class="h-full antialiased bg-gray-100">
    <div>
        @include('partials.nav.nav')
        <main>
            {{ $slot }}
        </main>
        @include('partials.footer')
    </div>
</body>

</html>
