<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bulma.css">
    <link rel="stylesheet" href="/css/morris.css">
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">

</head>
<body>
<div class="columns">
    <aside class="column is-2 aside hero is-fullheight is-hidden-mobile">
        <div>
            <div class="main">
                <div class="title">Main</div>
                <a href="{{URL::to('admin/dashboard')}}" class="item"><span class="icon"><i class="fa fa-home"></i></span><span class="name">Dashboard</span></a>
                <a href="{{URL::to('admin/jokes')}}" class="item"><span class="icon"><i class="fa fa-smile-o"></i></span><span class="name">Jokes</span></a>
                <a href="{{URL::to('admin/category')}}" class="item"><span class="icon"><i class="fa fa-tag"></i></span><span class="name">Categories</span></a>
                <a href="{{URL::to('admin/logout')}}" class="item"><span class="icon"><i class="fa fa-sign-out"></i></span><span class="name">Logout</span></a>
            </div>
        </div>
    </aside>
    <div class="column is-10 admin-panel">
        <nav class="nav has-shadow" id="top">
            <div class="container">
                <div class="nav-left">
                    <a class="nav-item" href="">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
          <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </span>
                <div class="nav-right nav-menu is-hidden-tablet">
                    <a href="#" class="nav-item is-active">
                        Dashboard
                    </a>
                    <a href="#" class="nav-item">
                        Activity
                    </a>
                    <a href="#" class="nav-item">
                        Timeline
                    </a>
                    <a href="#" class="nav-item">
                        Folders
                    </a>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="has-text-centered">
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
<script async type="text/javascript" src="/js/bulma.js"></script>
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/raphael.min.js"></script>
<script type="text/javascript" src="/js/morris.js"></script>
<script type="text/javascript" src="/js/admin.js"></script>
</body>
</html>