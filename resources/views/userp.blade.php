@extends('layouts.app')
@section('content')

	<div style="margin:auto;width: 39%;text-align: center;" class="card">
		<h3 style="font-style: italic;font-size: 30px;">First Name:{{ Auth::user()->first_name }}</h3>
		<h3>Last Name :{{ Auth::user()->last_name }}</h3>
		<h3>Address  : {{ Auth::user()->address }}</h3>
		<h3>Phone:{{ Auth::user()->phone }}</h3>
		<h3>Email:{{ Auth::user()->email }}</h3>
		<h3>Birthdate:{{ Auth::user()->birth }}</h3>
		
	</div>
	
@endsection