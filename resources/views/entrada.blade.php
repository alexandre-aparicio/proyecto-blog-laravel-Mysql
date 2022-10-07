@extends ('layouts.home')
@section('title', 'Hola Mundo')
@section('content')
<div class="column is-9-desktop">
   <article class="columns is-multiline is-justify-content-center mb-6">
      <div class="col-lg-10 mx-auto mb-4">
         <h1 class="h2 mb-3">{{ $entrada->titulo }}</h1>
         <ul class="list-inline post-meta mb-3">
            <li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John Doe</a>
            </li>
            <li class="list-inline-item">Date : March 15, 2020</li>
            <li class="list-inline-item">Categories : <a href="#!" class="ml-1">Photography </a>
            </li>
            <li class="list-inline-item">Tags : <a href="#!" class="ml-1">Photo </a> ,<a href="#!" class="ml-1">Image </a> 
            </li>
         </ul>
      </div>
      <div class="col-lg-8 mx-auto mb-4 pr-5 justificar">
         
         {{ $entrada->resumen }}
                                        
      </div>
      <div class="col-lg-8 mx-auto mb-4 pr-6">
         
         <img src="{{ $entrada->imagen_url }}" alt="image">
                                        
      </div>
      <div class="col-lg-8 mx-auto mb-4 pr-6 justificar">
         
         {!! $entrada->contenido !!}
                                        
      </div>
   </article>
</div>
@endsection