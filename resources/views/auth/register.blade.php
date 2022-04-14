@extends('layouts.auth')

@section('content')

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

                        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <input type="hidden" value="profile.jpg" name="picture">
                        <input type="hidden" value="0" name="is_admin">

                            <!-- name -->
                            <div class="form-group mb-3">
								<label class="label" for="name">{{ __('Nama') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukkan Nama Kamu">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

                            <!-- email -->
							<div class="form-group mb-3">
								<label class="label" for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="emailkamu@gmail.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

                            <!-- nomor telepon -->
							<div class="form-group mb-3">
								<label class="label" for="no_telp">{{ __('Nomor Telepon') }}</label>
                                <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp') }}" required autocomplete="no_telp" placeholder="Masukkan Nomor Telepon" autofocus>
                                @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

                            <!-- password -->
                            <div class="form-group mb-3">
                                <label class="label" for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Masukkan Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <!-- password confirm-->
                            <div class="form-group mb-3">
                                <label class="label" for="password-confirm">{{ __('Konfirmasi Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Masukkan Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                        <!-- tambahan -->
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
                                    {{ __('Register') }}
                                </button>
                            </div>

                            <div class="text-center p-t-46 ">
                                <span > <br>
                                    Sudah punya akun? <a class="txt" href="/login"><strong>Masuk</strong></a>
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
