@php
if( !isset( $activeType ) ) {
    $activeType = '';
}
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>그로테스큐 스튜디오 || Studio GrotesQ</title>
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1|Poiret+One" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

    {{--favicons--}}
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/favicons/favicon-57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/favicons/favicon-60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/favicons/favicon-72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/favicons/favicon-76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/favicons/favicon-114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/favicons/favicon-120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/favicons/favicon-144.png">
    {{--<link rel="apple-touch-icon" sizes="152x152" href="/assets/images/favicons/favicon-152.png">--}}{{-- 사이즈 없음--}}
    {{--<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/favicon-180.png">--}}{{-- 사이즈 없음--}}

    {{--<link rel="icon" type="image/png" sizes="192x192"  href="/assets/images/favicons/favicon-192.png">--}}{{-- 사이즈 없음--}}
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/images/favicons/favicon-96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16.png">
</head>
<body>

<nav class="gq-nav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="/">
        <img src="/assets/images/logo-small.png" class="gq-nav__logo-image" alt="그로테스큐 스튜디오">
    </a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item @if( $activeType === 'works' ) active @endif">
                <a class="nav-link" href="/works">Works</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mailto:unknown@grotesq.com">Contact</a>
            </li>
        </ul>
    </div>
</nav>

@yield('body')

</body>
</html>
