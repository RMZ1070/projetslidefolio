{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h2> Table newsletter</h2>
@stop

@section('content')

<div class="table-wrapper"> 
    <table class="table table-striped">
        
        <thead>
        <tr>
            <th scope="col" class="text-center">nom</th>
            <th scope="col" class="text-center">email</th>
      
        </tr>
    </thead>
    <tbody>
        @foreach ($news as $item)
        <tr>
        <td class="text-center"  colspan="">{{$item->name}}</td>
        <td class="text-center"  colspan="">{{$item->email}}</td>
         
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
