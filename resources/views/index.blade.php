<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ Admin::title() }} @if($header) | {{ $header }}@endif</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    {!! Admin::css() !!}

    <script src="{{ Admin::jQuery() }}"></script>
    {!! Admin::headerJs() !!}
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="hold-transition {{ join(' ', config('admin.layout')) }}">
    <div class="wrapper">

        @include('adminlte::partials.header')

        @include('adminlte::partials.sidebar')

        <div class="content-wrapper" id="pjax-container">
            <div id="app">
                @yield('content')
            </div>
            {!! Admin::script() !!}
        </div>

        @include('adminlte::partials.footer')

        @include('adminlte::partials.control-sidebar')

    </div>

    <script>
        function LA() {}
        LA.token = "{{ csrf_token() }}";
    </script>

    {!! Admin::js() !!}

</body>
</html>