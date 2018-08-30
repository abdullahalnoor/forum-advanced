@extends('layouts.front') 
@section('banner')
<div class="jumbotron">
  <h3>Abdullah Community Forum</h3>
  <button type="button" name="" id="" class="btn btn-primary">Learn More</button>
</div>
@endsection
 
@section('heading','Thread') 
@section('content')

<div class="jumbotron">

  <div class="card">
    <div class="card-header">
      <h4> {{$thread->subject}} </h4>
    </div>
    <div class="card-body">
      <p> {{$thread->thread}} </p>
    </div>
    <div class="card-footer">
      <div class="row">
        <a href="{{route('thread.edit',$thread->id)}}" class="btn  btn-info mr-2">Edit</a>

        <form action="{{route('thread.destroy',$thread->id)}}" method="POST">
          @csrf {{ method_field("DELETE") }}
          <input type="submit" class="btn btn-danger" value="Delete">
        </form>
      </div>


    </div>
  </div>




</div>
@endsection