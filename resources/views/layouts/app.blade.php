<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/bulma.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/font-awesome.min.css">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<section class="hero is-black is-large">
    <!-- Hero header: will stick at the top -->
    <div class="hero-head">
        <header class="nav">
            <div class="container">
                <div class="nav-left">
                    <a class="nav-item" href="{{URL::to('/')}}">
                        <h1>JOKESCRIPT</h1>
                    </a>
                </div>
                <div class="nav-right">
                    <a class="nav-item modal-button" data-target="#modal">
                        Submit
                    </a>
                </div>
            </div>
        </header>
    </div>
</section>
<section class="hero is-danger">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Primary title
            </h1>
            <h2 class="subtitle">
                Primary subtitle
            </h2>
        </div>
    </div>
</section>
<body>
<section class="section">
    <div class="container">
        @yield('content')
    </div>
</section>
</body>

</div>


<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                <strong>JOKESCRIPT</strong> by <a href="http://hexenrobert.me">Hexen Robert</a>. The source code is
                licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
            </p>
            <p>
                <a class="icon" href="https://github.com/jgthms/bulma">
                    <i class="fa fa-github"></i>
                </a>
            </p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="/js/app.js"></script>
<script src="/js/jokescript.js"></script>

</body>
</html>
