{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h2> Add service</h2>
@stop

@section('content')

<div class="container">

    <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="logo">logo :</label>
                       <select id="logo"  name="logo"  class="form-control @error('logo') is-invalid @enderror">
                        @php
                            $logos = [
                            ['code'=> 'f083','class'=>'fa fa-camera-retro'],
                            ['code'=> 'f030','class'=>'fa fa-camera'],
                            ['code'=> 'f0ac','class'=>"fa fa-globe"],
                            ['code'=> 'f1d8','class'=>"fa fa-paper-plane"],
                            ['code'=> 'f005','class'=>"fa fa-star"],
                            ['code'=> 'f018','class'=>"fa fa-road"],
                            ['code'=> 'f017','class'=>"fa fa-clock-o"]
                            ];
                        @endphp

                        @foreach ($logos as $key => $value)

                                <option class="fas" value="{{$logos[$key]['class']}}"> &#x{{$logos[$key]['code']}}</option>

                        @endforeach
                    </select>
                    @error('icon')
                        <div  class="alert alert-danger">{{  $message  }}</div>
                    @enderror
        <div class="form-group text-darka ">
            <label class="h3" for="titre">Titre :</label> <br>
            <input value="" type="text" name="titre"
                class="form-control @error('titre') is-invalid @enderror" id="titre">
            @error('titre')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka ">
            <label class="h3" for="texte">Texte :</label> <br>
            <input value="" type="text" name="texte"
                class="form-control @error('texte') is-invalid @enderror" id="texte">
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
<link rel="stylesheet" href="{{asset('css/admin.css')}}"> 
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
