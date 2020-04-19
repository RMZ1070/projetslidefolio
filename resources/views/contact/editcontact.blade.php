{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h2> Editer contact</h2>
@stop

@section('content')

<div class="container">

    <form action="{{route('contact.update',$contact)}}" method="post" enctype="multipart/form-data">
        @csrf
@method('put')
        <div class="form-group text-darka ">
            <label class="h3" for="adresse">adresse :</label> <br>
            <input value="{{$contact->adresse}}" type="text" name="adresse"
                class="form-control @error('adresse') is-invalid @enderror" id="adresse">
            @error('texte')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka ">
            <label class="h3" for="telephone">telephone :</label> <br>
            <input value="{{$contact->telephone}}" type="text" name="telephone"
                class="form-control @error('texte') is-invalid @enderror" id="telephone">
            @error('texte')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka ">
            <label class="h3" for="email">email :</label> <br>
            <input value="{{$contact->email}}" type="text" name="email"
                class="form-control @error('texte') is-invalid @enderror" id="email">
            @error('texte')
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
    <script> console.log('Hi!'); </script>
@stop
