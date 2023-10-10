<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/logo-polmed.png" type="image/png">
    <title>Beasiswa Polmed | {{$title}}</title>
    @include('partials.styles')
</head>
<body>
    <div class="container-scroller">
        @include('partials.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('partials.sidebar')
            <div class="main-panel" styles="margin-top:-100px">
                @yield('content')
            </div>
        </div>
    </div>
    @include('partials.scripts')
</body>

</html>
