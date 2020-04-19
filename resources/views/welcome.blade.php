@extends('layouts/master')
@section('content')

@include('partials/header')

@include('partials/navigation')

@include('components/about')

@include('partials/services')

@include('partials/portfolio')

@include('partials/contact')

@include('components/footer')

@include('components/script')

@endsection
@section('diaporama')
@include('partials/diaporama')
@endsection