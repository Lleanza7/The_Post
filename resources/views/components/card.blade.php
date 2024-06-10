



<a href="{{ $url }}">
    
  <div  class="containerAllCard ">
    <div class="divHoverAllCard"></div>
          <img  src="{{ Storage::exists($image) ? Storage::url($image) : asset('/default.jpg') }}"
             alt="">
            

      <div class="containerDetailAllCard">
          <p>Redatto il {{ $data }} </p>
          <h4>{{ $title }}</h4>
          <h5>{{ $subtitle }}</h5>
         <div class="containerTagAllCard"> 
          @if ($category)
          <p><a href="{{ $urlCategory }}">{{ $category }}</a>&nbsp;|&nbsp;</p> 
          @else
          <p>Non categorizzato</p>
          @endif

        @if($tags->count() > 0)
              <p>@foreach ($tags as $tag){{ $tag->name }}&nbsp;@if(!$loop->last)-@endif @endforeach</p>
          @else
              <p>Tag non presenti</p>
          @endif
          
      <p><a href="{{ $urlUser }}">&nbsp;| {{ $user }}</p>
        </div>
      </div>
      
  </div>
</a>

