@extends('Layouts.app')

@section('title', 'Home')

@section('content')
    @include('Component.HomeBanner')
    @include('Component.HomeServices')
    @include('Component.HomeCource')
    @include('Component.HomeProjects')
    @include('Component.HomeContact')
    @include('Component.HomeReview')

@endsection