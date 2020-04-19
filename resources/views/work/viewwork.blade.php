{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h2> Table work</h2>
@stop

@section('content')

<div class="table-wrapper"> 
  
        <a href="{{route('work.create')}}" class="btn btn-danger scrollto">create</a></td>

    
    <table class="table table-striped">
        
        <thead>
        <tr>
            <th class="text-center">image</th>
            <th class="text-center">categorie</th>
            <th class="text-center">action</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($works as $item)
        <tr>
        <td class="text-center"  colspan=""><img  src="{{asset('storage/'.$item->image)}}" alt=""></td>
        <td class="text-center"  colspan="">{{$item->categorie}}</td>
            <td class="text-center d-flex justify-content-center"  colspan="">
                <a href="{{route('work.edit',$item)}}" class="btn btn-warning scrollto mx-3">Edit</a>
                <form action="{{route('work.destroy',$item)}}" method="post">
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
<link rel="stylesheet" href="{{asset('/css/admin.css')}}">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
