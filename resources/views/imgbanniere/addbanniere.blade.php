{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h2> Add Banniere</h2>
@stop

@section('content')

<div class="container">

    <form action="{{route('imgbanniere.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group text-darka ">
            <label class="h3" for="titre">Titre :</label> <br>
            <input value="" type="text" name="titre"
                class="form-control @error('titre') is-invalid @enderror" id="titre">
            @error('titre')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka ">
            <label class="h3  " for="img">Image :</label> <br>
            <input class="form-control" value=""
            type="file" name="imgba" class=" @error('imgba') is-invalid @enderror" id="imgba" >
            @error('imgba')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>

        <div class="text-center">

            <button type="submit" class="btn btn-outline-dark">Ajouter</button>
        </div>

    </form>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
