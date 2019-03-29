<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
        <script src="http://keycloak.qa.pbh/auth/js/keycloak.js"></script>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
        <div id="app" class="d-flex flex-column">
            <div ref="containerG">

            <router-view></router-view>

            {{-- <modal-login :show="show_login"></modal-login> --}}
            <painel-footer :show="show_footer"></painel-footer>

            <div id='loading' class="loader loader-default"></div>
            </div>
            <rodape></rodape>
            
            
        </div>

        <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
