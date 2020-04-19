{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h2> Table contact</h2>
@stop

@section('content')

<div class="table-wrapper"> 
    <table class="table table-striped">
        
        <thead>
        <tr>
            <th scope="col" class="text-center">adresse</th>
            <th scope="col" class="text-center">telephone</th>
            <th scope="col" class="text-center">email</th>
            <th scope="col" class="text-center">action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $item)
        <tr>
        <td class="text-center"  colspan="">{{$item->adresse}}</td>
        <td class="text-center"  colspan="">{{$item->telephone}}</td>
        <td class="text-center"  colspan="">{{$item->email}}</td>
            <td class="text-center d-flex justify-content-center"  colspan="">
                <a href="{{route('contact.edit',$item)}}" class="btn btn-warning scrollto mx-3">Edit</a>
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
