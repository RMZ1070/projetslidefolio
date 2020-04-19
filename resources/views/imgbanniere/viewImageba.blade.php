{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h2> Table banniere</h2>
@stop

@section('content')

<div class="table-wrapper"> 
    @if (count($imgbannieres)<1)
        <a href="{{route('imgbanniere.create')}}" class="btn btn-danger scrollto">create</a></td>

            @else

            <a href="{{route('home')}}" class="btn btn-primary scrollto">home</a></td>
        @endif
    <table class="table table-striped">
        
        <thead>
        <tr>
            <th scope="col" class="text-center">titre</th>
            <th scope="col" class="text-center">image</th>
            <th scope="col" class="text-center">action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($imgbannieres as $item)
        <tr>
        <td class="text-center"  colspan="">{{$item->titre}}</td>
        <td class="text-center" colspan=""><img src="{{asset('storage/'.$item->imgba)}}" alt=""></td>
            <td class="text-center d-flex justify-content-center"  colspan="">
                <a href="{{route('imgbanniere.edit',$item)}}" class="btn btn-warning scrollto mx-3">Edit</a>
                <form action="{{route('imgbanniere.destroy',$item)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger scrollto mx-3">Delete</button>
                </form>
                </td>
         
        </tr>
        @endforeach
       
        <tbody>
            
    </table>

     
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
