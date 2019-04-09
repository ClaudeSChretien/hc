@extends('layouts.master')

@section('title', 'Page Title')

@section('main')
@include('layouts.banner')
	@include('layouts.gallery')
	@include('layouts.vlog')
	@include('layouts.blog')
@stop