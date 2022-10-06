@extends ('layouts.home')
@section('title', 'Hola Mundo')
@section('content')
<div class="column is-9-desktop">
   <div class="columns is-desktop is-multiline">
      @foreach ($entradas as $entrada)
      
      <div class="column is-4-desktop">
         <article class="columns is-multiline is-justify-content-center mb-6">
            <div class="column is-12">
               <div class="post-slider slick-initialized slick-slider">
                  <div class="slick-list draggable">
                     <div class="slick-track"><img src="{{ $entrada->imagen_url }}" class="img-fluid" alt="post-thumb" data-slick-index="0" aria-hidden="false" tabindex="0" ></div>
                  </div>
               </div>
            </div>
            <div class="column is-12">
               <h5><a class="post-title" href="{{ route('entrada', $entrada) }}">{{ $entrada->titulo }}</a></h5>
               <ul class="list-inline post-meta mb-4">
                  <li class="list-inline-item"><i class="ti-user mr-2"></i><a href="#">{{$entrada->nombre_us}}</a>
                  </li>
                  @php
                  $pieces = explode(" ", $entrada->created_at);
                  $pieces = explode("-", $pieces[0]);
                  @endphp
                  <li class="list-inline-item">Fecha : {{ $pieces[2] }}/{{ $pieces[1] }}/{{ $pieces[0] }}</li>
                  <li class="list-inline-item">Categoria: <a href="{{ route('categoria', $entrada->slug_cat) }}" class="ml-1">{{$entrada->nombre_cat}}</a>
                  </li>
                  
               </ul>
               
               <a href="{{ route('entrada', $entrada) }}" class="btn btn-outline-primary">Ver Entrada</a>
            </div>
         </article>
      </div>
      @endforeach
   </div>
</div>
@endsection