{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h2> Add Diaporama</h2>
@stop

@section('content')

<div class="container">

    <form action="{{route('diaporama.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group text-darka ">
            <label class="h3  " for="image">Image :</label> <br>
            <input class="form-control" value=""
            type="file" name="image" class=" @error('image') is-invalid @enderror" id="image" >
            @error('image')
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
