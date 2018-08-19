<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>My Thoughts</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

<div class="container">
    @include('layouts.partials.header')

   @include('layouts.partials.menu')

    {{--@include('posts.featured')--}}
</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            @yield('content')
        </div>

        @include('posts.sidebar')

    </div><!-- /.row -->

</main><!-- /.container -->


@include('layouts.partials.footer')

</body>
</html>
