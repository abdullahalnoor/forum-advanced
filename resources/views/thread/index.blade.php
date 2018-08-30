@extends('layouts.front') 
@section('banner')
<div class="jumbotron">
  <h3>Abdullah Community Forum</h3>
  <button type="button" name="" id="" class="btn btn-primary">Learn More</button>
</div>
@endsection
 
@section('heading','Thread') 
@section('content')
  @include('thread.includes.thread')
@endsection