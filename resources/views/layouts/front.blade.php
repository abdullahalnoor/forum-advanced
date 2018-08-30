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
      <div class="col-md-3">Category</div>
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-4">
            <h4>@yield('heading')</h4>
          </div>
          <div class="offset-md-6 col-md-2">
            <a href="{{route('thread.create')}}" class="btn btn-primary">Create Thresd</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">Active item</a>
          <a href="#" class="list-group-item list-group-item-action">Item</a>
          <a href="#" class="list-group-item list-group-item-action disabled">Disabled item</a>
        </div>
      </div>
      <div class="col-md-9">
        @yield('content')
      </div>
    </div>

  </div>

  <script src="{{asset('front/jquery.js')}}"></script>

</body>

</html>