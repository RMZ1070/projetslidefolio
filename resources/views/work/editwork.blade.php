@extends('adminlte::page')
@section('content_header')

<h2> Editer work</h2>
@stop

@section('content')

<div class="container">

    <form action="{{route('work.update',$work)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group text-darka ">
            <label class="h3  " for="img">Image :</label> <br>
            <input class="form-control" value="" type="file" name="image" class=" @error('image') is-invalid @enderror"
                id="image">
            @error('image')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka ">
            <label class="h3" for="categorie">categorie :</label> <br>
            <input value="{{$work->categorie}}" type="text" name="categorie"
                class="form-control @error('categorie') is-invalid @enderror" id="categorie">
            @error('categorie')
            <div class="alert alert-danger">{{  $message  }}</div>
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
<script>
    console.log('Hi!');

</script>
@stop
