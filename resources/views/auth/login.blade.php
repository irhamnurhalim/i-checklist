<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - @yield('title') </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css')}}" />
    <link rel="stylesheet" href="{{ url('css/vendor.css') }}" />
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div id="app">
            <div>
                <img src="{{ url('/') }}/img/logo-sm.png">
            </div>
            <h3>Welcome to i-Checklist</h3>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" method="POST" action="{{ url('login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="" name="email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>
            <p class="m-t"> <small>IDX i-CheckList &copy; 2017</small> </p>
            <p>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were problems with input:
                    <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ mix('js/app.js')}}" type="text/javascript"></script>
<script src="{{ mix('js/vendor.js')}}" type="text/javascript"></script>

</body>

</html>
