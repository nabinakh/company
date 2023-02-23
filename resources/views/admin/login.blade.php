@extends('layouts.simple')

@section('content')
  <!-- Hero -->
  <div class="hero-static d-flex align-items-center">
                <div class="w-100">
                    <div class="bg-body-light">
                        <div class="content content-full">
                            <div class="row g-0 justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-4 py-4 px-4 px-lg-5">
                                    <div class="text-center">
                                        <p class="mb-4">
                                            <img src="{{asset('media/logo/logo.png')}}" alt="">                                            
                                        </p>
                                        <h1 class="h4 mb-1">
                                            Sign In
                                        </h1>
                                        
                                    </div>
                                    <form class="js-validation-signin" action="" method="post">
                                        @CSRF
                                        <div class="py-3">
                                            @if(Session::has('error'))
                                            <div class="text-center mb-2">
                                                <small class="text-danger fs-0"><em>{{ (Session::get('error')) }}</em></small>
                                            </div>
                                            @endif
                                            <div class="mb-4">
                                                <input type="text" class="form-control form-control-lg form-control-alt" id="login-username" name="email" placeholder="Email">
                                            </div>
                                            <div class="mb-4">
                                                <input type="password" class="form-control form-control-lg form-control-alt" id="login-password" name="password" placeholder="Password">
                                            </div>
                                            {{-- <div class="mb-4">
                                                <div class="d-md-flex align-items-md-center justify-content-md-between">
                                                    <div class="py-2">
                                                        <a class="fs-sm fw-medium" href="op_auth_reminder2.html">Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button type="submit" class="btn w-100 btn-alt-primary">
                                                    <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Sign In
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fs-sm text-center text-muted py-3">
                        <strong>CATTOLICA CONTEST</strong> &copy; <span data-toggle="year-copy"></span>
                    </div>
                  </div>
                </div>
  <!-- END Hero -->
@endsection
