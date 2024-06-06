@extends('layouts.main')
@section('pageAddress','Portfolio Details Page')
@section('Pagelink','Portfolio Details')
@section('content')	
		<!-- Breadcrumbs -->
		@include('includes.breadCrumbs')
		<!-- End Breadcrumbs -->
	
		<!-- Start Portfolio Details Area -->
		@include('includes.portfolioDetails')
		<!-- End Portfolio Details Area -->
@endsection