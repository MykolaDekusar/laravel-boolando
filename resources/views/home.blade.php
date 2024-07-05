@extends('layouts.main')
{{-- title of the page --}}
@section('page-title')
    HomePage
@endsection
{{-- main section of the page --}}
@section('main')
@include('shared.card')
@endsection