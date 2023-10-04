@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    
    @include('site.layouts.partials.topo')

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              <h4>Login</h4>
            </div>
            <div class="card-body">

              @include('site.layouts.formulario_login')
             
            </div>
          </div>
        </div>
    </div>
@endsection
