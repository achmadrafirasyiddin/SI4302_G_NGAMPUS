@extends('layouts.auth')

@section('content')

<title>Ngampus | Login</title>
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
            
			<div class="col-md-12 col-lg-9">
                <div class="img wrap d-md-flex" style="background-image:url({{asset('Auth/img/bg.jpg')}});">
					<div class="login-wrap p-4 p-lg-5">
						<div class="d-flex">
							<!-- <div class="w-100">
								<h4 class="mb-4">{{ __('Login') }}</h4>
							</div> -->
						</div>

						<form method="POST" action="{{ route('login') }}">
                        @csrf
							<div class="form-group mb-3">
								<label class="label" for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

                            <div class="form-group mb-3">
                                <label class="label" for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group d-md-flex">
                                <div class="w-50 text-left">
                                    <label class="checkbox-wrap checkbox-primary"> {{ __('Remember Me') }}
                                        <input type="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                            
                                @if (Route::has('password.request'))
                                    <div class="w-50 text-md-right">
                                        <a href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            <div class="text-center p-t-46 p-b-20">
                                <span >
                                    Belum punya akun? <a class="txt" href="/register"><strong>Daftar</strong></a>
                                </span>
                                <br><br>
                                <span>
                                    or
                                </spa>

                                <p class="social-media d-flex align-items-center justify-content-center mt-2">
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-google"></span></a>
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-facebook"></span></a>
                                </p>

                                <span >
                                    <a class="txt" href="/"><strong>Kembali ke Landing Page</strong></a>
                                </span>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
