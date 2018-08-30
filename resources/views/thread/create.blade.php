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
   <form action="{{route( 'thread.store')}} " method="POST " role="form ">
     @csrf
     <div class="form-group ">
       <label for="subject ">Subject</label>
       <input type="text " class="form-control " placeholder="subject.. " name="subject " value="{{old( 'subject')}} ">
     </div>
     <div class="form-group ">
      <label for="type ">type</label>
      <input type="text " class="form-control " placeholder="type.. " name="type " value="{{old( 'type')}} ">
    </div>
    <div class="form-group ">
      <label for="thread ">thread</label>
      <textarea  class="form-control " placeholder="thread.. " name="thread " >{{old('thread')}}</textarea>
    </div>
    
 <div class="form-group ">
   <input type="submit " class="btn btn-info " value="Create Thread ">
 </div>
   </form>
 </div>
@endsection