@extends('layouts.main')
@section('pageAddress','Book Appointment')
@section('Pagelink','Book Appointment')
@section('content')
		<!-- Breadcrumbs -->
		@include('includes.breadCrumbs')
		<!-- End Breadcrumbs -->
        <!-- appointment-->
		@include('includes.appointment')
		<!-- End appointment -->
@endsection