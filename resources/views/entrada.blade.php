@extends ('layouts.home')
@section('title', 'Hola Mundo')

@section('content')
<div class="column is-9-desktop">
        <article class="columns is-multiline is-justify-content-center mb-6">

         <h2>Esta es la entrada del blog</h2>
         
         <p>{{ $entrada->titulo }}</p>
         
        </article>
     </div>

      @endsection