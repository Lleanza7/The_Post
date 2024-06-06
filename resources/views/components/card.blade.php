



<a href="{{ $url }}">
    
  <div  class="containerAllCard ">

          <img  src="{{ Storage::exists($image) ? Storage::url($image) : asset('/default.jpg') }}"
             alt="">

      <div class="containerDetailAllCard">
          <p>Redatto il {{ $data }} </p>
          <h4>{{ $title }}</h4>
          <h5>{{ $subtitle }}</h5>
         <div class="containerTagAllCard"> 
          @if ($category)
          
          <p><a href="{{ $urlCategory }}">{{ $category }}</a>&nbsp; - &nbsp;</p> 
          @else
          <p>Non categorizzato</p>
          @endif
          @if($tags)
          <p>@foreach ($tags as $tag){{ $tag->name }}
          @endforeach
      </p>
      @endif
      <p><a href="{{ $urlUser }}"> &nbsp; - &nbsp; {{ $user }}</p>
        </div>
      </div>
      
  </div>
</a>

