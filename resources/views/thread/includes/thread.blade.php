<div class="list-group ">
  @forelse ($threads as $item)
  <a href="{{route('thread.show',$item->id)}}" class="list-group-item list-group-item-action ">
    <h4> {{$item->subject}} </h4>
    <p>
      {{ str_limit($item->thread,50) }}
    </p>
  </a> @empty No Threads Found.... @endforelse

</div>