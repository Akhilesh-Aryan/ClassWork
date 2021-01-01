<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-danger">
        <a class="navbar-brand" href="/"><h4 class="text-white">ClassRoom</h4></a>
        <form action="" method="get" class="form-inline mx-auto">
            <div class="input-group">
                <input type="text" name="search" class="form-control ml-5" size="70">
                <div class="input-group-append">
                    <button type="submit" name="find" class="btn btn-primary">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor"  xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                          </svg>
                    </button>
                </div>
            </div>
        </form>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="" class="nav-link">About Us</a></li>
        </ul>
    </nav>
    @section('content')

    @show
</body>

</html>
