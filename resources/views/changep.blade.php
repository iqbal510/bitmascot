@extends('layouts.app')
@section('content')

	<div class="container">
		
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            	
              
                <div class="card-header" style="text-align: center;background:#c5879c;font-size: 30px;">{{ __('Change Password') }}</div>
                {{-- @if (session("ErrorMsg"))
                    <div class="alert alert-danger alert-dismissible fade show">
                        <strong>Opps!</strong> {{ session("ErrorMsg") }}
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                @endif --}}
               

                <div class="card-body">
                    <form method="POST" action="{{ url('passwordupdate') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="oldpassword"   autocomplete="password" autofocus>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary">
                                    {{ __('Change Password') }}
                                </button>
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
@include('sweetalert::alert')
</div>
	
@endsection