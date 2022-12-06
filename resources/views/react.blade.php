<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>shaun-project</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}?ver={{ $appVer }}" type="text/css" />
        <style>
            #__vconsole {
                display: none;
            }
            .non-scroll {
                overflow: hidden;
                height:100vh;
            }
        </style>
        <script>
            // window.citys = '{{ $citys }}';
            window.appUrl = '{{ $appUrl }}';
            window.assetUrl = function(path) {
                return '{{ $assetUrl }}' + path + '?ver={{ $appVer }}';
            }
            window.oaUrl = '{{ $oaUrl }}';
            window.oaChatUrl = '{{ $oaChatUrl }}';
            window.liffId = '{{ $liffId }}';
            window.liffUrl = '{{ $liffUrl }}';
        </script>
    </head>
    <body class="non-scroll">
        <div id="app"></div>
        <script src="{{ mix('js/app.js') }}?ver={{ $appVer }}"></script>
    </body>
</html>
