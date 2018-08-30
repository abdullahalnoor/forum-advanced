@extends('layouts.front') 
@section('banner')
<div class="jumbotron">
  <h3>Abdullah Community Forum</h3>
  <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block ">Learn More</button>
    </div>
@endsection
































@section('heading','Xreate Thread')

















@section('content')
 <div class=" ">
   <form action="{{route( 'thread.update',$thread->id)}} " method="POST" role="form "> @csrf {{ method_field("PUT") }}
  <div class="form-group ">
    <label for="subject ">Subject</label>
    <input type="text " class="form-control " placeholder="subject.. " name="subject" value="{{$thread->subject}}
  ">
  </div>
  <div class="form-group ">
    <label for="type ">type</label>
    <input type="text " class="form-control " placeholder="type.. " name="type" value="{{$thread->type}} ">
  </div>
  <div class="form-group ">
    <label for="thread ">thread</label>
    <textarea class="form-control " placeholder="thread.. " name="thread">{{$thread->thread}} </textarea>
  </div>

  <div class="form-group ">
    <input type="submit" class="btn btn-info " value="Create Thread ">
  </div>
  </form>
</div>
@endsection