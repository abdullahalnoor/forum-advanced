@extends('layouts.front') 
@section('banner')
<div class="jumbotron">
  <h3>Abdullah Community Forum</h3>
  <button type="button" name="" id="" class="btn btn-primary">Learn More</button>
</div>
@endsection
 
@section('heading','View Detail') 
@section('content')

<div class="jumbotron">

  <div class="card">
    <div class="card-header">
      <h4> {{$thread->subject}} </h4>
    </div>
    <div class="card-body">
      <p> {{$thread->thread}} </p>
    </div>

    @auth @if(auth()->user()->id == $thread->user_id)
    <div class="card-footer">
      <div class="row">
        <a href="{{route('thread.edit',$thread->id)}}" class="btn  btn-info mr-2">Edit</a>

        <form action="{{route('thread.destroy',$thread->id)}}" method="POST">
          @csrf {{ method_field("DELETE") }}
          <input type="submit" class="btn btn-danger" value="Delete">
        </form>
      </div>
    </div>
    @endif @endauth






  </div>

  <div class="row">
    <div class="col-md-11 offset-md-1">
      <ul class="list-group">
        @foreach ($thread->comments as $comment)
        <li class="list-group-item d-flex justify-content-between align-items-center ">
          <span class="text-left">{{$comment->body }} 
          <b class="bg-secondary p-1">- {{ $comment->user->name }}</b></span>
          <span class="badge badge-secondary badge-pill">{{$comment->created_at->diffforhumans() }}</span> @auth @if(auth()->user()->id
          == $comment->user_id)
          <span>
                          <a href="" class="bg-ifno">Edit</a>
                          <form action="{{route('comment.destroy',$comment->id)}}" method="POST">
                            @csrf
                            {{ method_field("DELETE") }}
                            <input type="submit" class="bg-danger border-danger" value="Delete">
                          </form>
                        </span> @endif @endauth

        </li>

        <div class="row">
          <div class="col-md-11 offset-md-1">
            <ul class="list-group">
              @foreach ($comment->comments as $reply)
              <li class="list-group-item d-flex justify-content-between align-items-center ">
                {{ $reply->body }} {{ $reply->user->name }}
                <span class="badge badge-secondary badge-pill">pill1</span>



              </li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <form action="{{route('reply.comment.store',$comment->id)}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="body">Reply</label>
                <input type="text" name="body" class="form-control" name="body">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-info" value="Reply">
              </div>
            </form>
          </div>
        </div>


        @endforeach
      </ul>


    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <form action="{{route('thread.comment.store',$thread->id)}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="body">Commmet</label>
          <input type="text" name="body" class="form-control" name="body">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-info" value="Comment">
        </div>
      </form>
    </div>
  </div>


</div>
@endsection