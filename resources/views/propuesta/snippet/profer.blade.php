<div onclick="window.location.href='{{ route('propuesta.show',$profer->id ) }}'"
  class=" @if($profer->pro_premium == 1 ) bg-warning @endif rounded-lg shadow-lg shadow-drop-2-center cursor-pointer"
>

  <img
    src="{{ $profer->pro_image }}"
    alt=""
    class="rounded-t-lg"
  />
  <div class="p-4">
    <h1 class="font-bold text-lg">{{ $profer->pro_title }}</h1>
  </div>
</div>