<aside class="column is-3-desktop">
   <!-- Search -->
   <div class="widget">
      <h5 class="widget-title"><span>Search</span></h5>
      <form action="javascript:void(0)" class="widget-search">
         <input id="search-query2" name="s" type="search" placeholder="Type &amp; Hit Enter...">
         <button type="submit"><i class="ti-search"></i>
         </button>
      </form>
   </div>
   @if ($mismas)
   <!-- Posts misma categoria -->
   <div class="widget">
      <h5 class="widget-title"><span>Entradas Similares</span></h5>
      <!-- post-item -->
      @foreach ($sec_entradas_categoria as $ent_tot)
      <ul class="list-unstyled widget-list">
         <li class="media widget-post is-align-items-center">
            <a href="{{ route('content.entrada', $ent_tot) }}">
            <img loading="lazy" src="{{ asset($ent_tot->imagen_url) }}">
            </a>
            <div class="ml-4">
               <h5 class="h6 mb-0"><a href="{{ route('content.entrada', $ent_tot) }}">{{ $ent_tot->titulo }}</a></h5>
               <small>March 15, 2020</small>
            </div>
         </li>
      </ul>
      @endforeach
   </div>
   @endif
   <!-- categories -->
   <div class="widget">
      <h5 class="widget-title"><span>Categorías</span></h5>
      <ul class="list-unstyled widget-list">
         @foreach ($sec_categorias as $categoria)
         <li><a href="{{ route('content.categoria', $categoria) }}" class="is-flex">{{$categoria->nombre}}
            <small class="ml-auto">({{$categoria->cantidad}})</small></a>
         </li>
         @endforeach
      </ul>
   </div>
   <!-- tags -->
   <div class="widget">
      <h5 class="widget-title"><span>Etiquetas</span></h5>
      <ul class="list-inline widget-list-inline">
         @foreach ($sec_tags as $tags )
         <li class="list-inline-item"><a href="#!">{{ $tags->nombre }}</a>
         </li>
         @endforeach
      </ul>
   </div>
   <!-- latest post -->
   <div class="widget">
      <h5 class="widget-title"><span>Últimas Entradas</span></h5>
      <!-- post-item -->
      @foreach ($sec_ult_entradas as $ent_tot)
      <ul class="list-unstyled widget-list">
         <li class="media widget-post is-align-items-center">
            <a href="{{ route('content.entrada', $ent_tot) }}">
            <img loading="lazy" src="{{ asset($ent_tot->imagen_url) }}">
            </a>
            <div class="ml-4">
               <h5 class="h6 mb-0"><a href="{{ route('content.entrada', $ent_tot) }}">{{ $ent_tot->titulo }}</a></h5>
               <small>March 15, 2020</small>
            </div>
         </li>
      </ul>
      @endforeach
   </div>
</aside>