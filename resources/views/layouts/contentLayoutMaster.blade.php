@isset($pageConfigs)
    {!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - 123MediaHub Admin</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/logo/logo.png">

        {{-- Include core + vendor Styles --}}
        @include('panels/styles')

        <script>
            function startTime() {
              var today = new Date();
              var h = today.getHours();
              var m = today.getMinutes();
              var s = today.getSeconds();
              m = checkTime(m);
              s = checkTime(s);
              document.getElementById('txt').innerHTML =
              h + ":" + m + ":" + s;
              var t = setTimeout(startTime, 500);
            }
            function checkTime(i) {
              if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
              return i;
            }
            </script>

    </head>

    {{-- {!! Helper::applClasses() !!} --}}
    @php
        $configData = Helper::applClasses();
    @endphp

    @extends((( $configData["mainLayoutType"] === 'horizontal') ? 'layouts/horizontalLayoutMaster' : 'layouts.verticalLayoutMaster' ))
    