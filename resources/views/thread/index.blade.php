@extends('layouts.front') 
@section('content')
<div class="container">
  <div class="list-group">
    @forelse ($threads as $item)
    <a href="#" class="list-group-item list-group-item-action ">
      <h4> {{$item->subject}} </h4>
      <p>
        {{ str_limit($item->thread,50) }}
      </p>
    </a> @empty No Threads Found.... @endforelse


  </div>
</div>
@endsection