<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('front/bootstrap.min.css')}}">
  <title>Forum</title>
</head>

<body>
  @include('layouts.includes.navbar') @yield('banner')

  <div class="container">



    <div class="row">
  @include('thread.includes.category')

      <div class="col-md-9">
        <div class="row">
          <h4 class="ml-4">@yield('heading')</h4>

        </div>
        @yield('content')
      </div>
    </div>

  </div>

  <script src="{{asset('front/jquery.js')}}"></script>

</body>

</html>