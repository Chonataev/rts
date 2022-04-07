<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Lyceum' }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/louder.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Icons -->
    <link rel="icon" href="{{ URL::asset('icons/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ URL::asset('icons/favicon.ico') }}" type="image/x-icon">

</head>
<body>
@include('components.loader')

@include('components.header')

<div id="main" class="container">
    @yield('content')
</div>

@include('components.footer')

<script type="text/javascript">
    (() => {
        let links = ['about-us', 'news', 'galery', 'parents'];
        let more = document.querySelectorAll('.mainContentLearnMore');
        for (let i = 0; i < more.length; i++) {
            more[i].addEventListener("click", () => {
                location.href = `${links[i]}`;
            })
        }
    })();
</script>
<script src="{{ URL::asset('js/header.js') }}"></script>
<script src="{{ URL::asset('js/menu.js') }}"></script>
</body>
</html>
