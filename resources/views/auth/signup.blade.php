@extends ('templates.default')

@section ('content')
<div class="row">
	<div class="col-md-12">
		<form method="POST" action="{{ route('auth.signup') }}" class="auth-form signup-form">
			<div class="form-group">
				<label for="first_name"><strong>First name *</strong></label>
				<input type="text" name="first_name" id="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" aria-describedby="validateFirstNameFeedback" value="{{ Request::old('first_name') }}" />

				@if ($errors->has('first_name'))
				<div id="validateFirstNameFeedback" class="invalid-feedback">
					<strong>{{ $errors->first('first_name') }}</strong>
				</div>
				@endif

			</div>
			<div class="form-group">
				<label for="last_name"><strong>Last name *</strong></label>
				<input type="text" name="last_name" id="last_name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" aria-describedby="validateLastNameFeedback" value="{{ Request::old('last_name') }}" />

				@if ($errors->has('last_name'))
				<div id="validateLastNameFeedback" class="invalid-feedback">
					<strong>{{ $errors->first('last_name') }}</strong>
				</div>
				@endif

			</div>
			<div class="form-group">
				<label for="email"><strong>E-mailaddress *</strong></label>
				<input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" aria-describedby="validateEmailFeedback" value="{{ Request::old('email') }}" />

				@if ($errors->has('email'))
				<div id="validateEmailFeedback" class="invalid-feedback">
					<strong>{{ $errors->first('email') }}</strong>
				</div>
				@endif

			</div>
			<div class="form-group">
				<label for="password"><strong>Password *</strong></label>
				<input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" aria-describedby="validatePasswordFeedback" />

				@if ($errors->has('password'))
				<div id="validatePasswordFeedback" class="invalid-feedback">
					<strong>{{ $errors->first('password') }}</strong>
				</div>
				@endif

			</div>

			<button type="submit" class="btn btn btn-primary">Sign Up!</button>

			<input type="hidden" name="_token" value="{{ Session::token() }}" />
		</form>
	</div>
</div>
@endsection