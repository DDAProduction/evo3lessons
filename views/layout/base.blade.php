<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Dm3yy">

    <title>Evolution CMS Starter Kit · Bootstrap v5.0</title>

    <link rel="canonical" href="@makeUrl($documentObject['id'])">

    <link href="/theme/css/bootstrap.min.css" rel="stylesheet">
    <link href="/theme/css/styles.css" rel="stylesheet">

</head>
<body class="d-flex flex-column h-100">

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Evo Starter Theme</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    @foreach($menu as $item)
                        @if(!isset($item['children']))
                            <li class="nav-item">
                                <a class="nav-link
                                    @if(in_array($item['id'], $parentIds)) active @endif"
                                    href="@makeUrl($item['id'])">
                                    {{ $item['pagetitle'] }}
                                </a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle
                                   @if(in_array($item['id'], $parentIds)) active @endif"
                                   href="@makeUrl($item['id'])" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ $item['pagetitle'] }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach($item['children'] as $child)
                                    <li>
                                        <a class="dropdown-item
                                           @if(in_array($child['id'], $parentIds)) active @endif"
                                           href="@makeUrl($child['id'])">
                                            {{ $child['pagetitle'] }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                    @endforeach
                </ul>
                <!--form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form-->
            </div>
        </div>
    </nav>
</header>

@yield('content')

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <div class="row ms-auto">
            <span class="col-12 col-sm-6 text-muted text-start">© 2021 <a href="https://ddaproduction.com">DDA Production</a></span>
            <span class="col-12 col-sm-6 text-muted text-end">Powered on the <a href="https://evo.im">Evolution CMS 3</a></span>
        </div>
    </div>
</footer>


<script src="/theme/js/bootstrap.min.js"></script>
</body>
</html>
