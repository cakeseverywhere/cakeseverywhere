@extends('templates.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">

                <div class="card-body" style="padding: 0;">
                    <div class="row">

                        <div class="col-1 col-md-1 line-vertial-modal" >
                            <img src="{{asset('img/icons/logo.png')}}" alt="logo">
                        </div>

                        <div class="col-10 col-md-10">

                            <h2 class="text-center">Registrar nuevo Producto</h2>
                            <form method="POST" action="{{ route('registarProducto') }}" enctype="multipart/form-data">
                                <!--un ataque de citio cruzado para proteger (csrf) enviar token que verifica que es valido-->
                                @csrf
                                @include('flash::message')
                                @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach

                                </div>
                                @endif

                                <div class="form-group ">

                                        <label for="np">Nombre del producto</label>
                                    <!-- old nos sirve para mantener lo escrito-->
                                        <input id="np" type="text"
                                               class="form-control{{ $errors->has('np') ? ' is-invalid' : '' }}"
                                               name="nom_producto" value="{{ old('np') }}"
                                               required autofocus>

                                        @if ($errors->has('np'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('np') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="form-group ">
                                    <label for="dp">Descripción del producto</label>
                                        <textarea id="dp" type="text" class="form-control{{ $errors->has('dp') ? ' is-invalid' : '' }}"
                                               name="desc_producto" rows="5" value="{{ old('dp') }}" required autofocus></textarea>
                                        @if ($errors->has('dp'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('dp') }}</strong>
                                            </span>
                                        @endif
                                </div>
                                <div>
                                    <input type="file" name="imagen" id="imagen" >
                                </div>

                                    <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-pink">
                                            Registar producto
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
