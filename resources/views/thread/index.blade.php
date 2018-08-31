@extends('layouts.front') 
@section('banner')
<div class="jumbotron">
  <h3>Abdullah Community Forum</h3>
  <button type="button" name="" id="" class="btn btn-primary">Learn More</button>
</div>
@endsection
 
@section('heading')

<a href="{{route('thread.create')}}" class="btn btn-primary float-right ">Create Thread</a>
@endsection
 
@section('content')
  @include('thread.includes.thread')
@endsection