@include('main/layouts/header')


<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6">
            <div class="login d-flex align-items-center py-5">

                <!-- Login-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h1 class="f-600">Login to VNC Digital Services</h1>
                            <p class="text-muted mb-4">Login using your Email Address or Linkedin</p>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror border-0 shadow-sm px-4"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Email Address" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <small>{{ $message }}</small>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror border-0 shadow-sm px-4"
                                        name="password" required autocomplete="current-password" placeholder="password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <small>{{ $message }}</small>
                                    </span>
                                    @enderror
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="remember" type="checkbox" checked class="custom-control-input"
                                        type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" class="custom-control-label">Remember password</label>

                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Login</button>
                                <span class="px-2"> or </span>
                                <a href="{{ url('/login/linkedin') }}" class="btn btn-primary mb-2">
                                    <i class="mdi mdi-linkedin d-inline-block"></i> Login With
                                    Linkedin
                                </a>

                                @if (Route::has('password.request'))
                                <a class="d-inline-block pl-lg-2 pt-2 text-dark" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </form>
                            <hr>
                            <div class="text-center d-flex justify-content-between mt-4">
                                <p>New User? <a class="text-muted" href="/register">
                                        <u>Signup Here</u></a></p>
                            </div>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>

@include('main/layouts/footer')
