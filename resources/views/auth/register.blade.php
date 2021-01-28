@extends('layouts.master')

  {{-- <div class="card-header">{{ __('Register') }}</div> --}}
@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

              

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<main class="main-content">
    <div class="comman-padding-top">
      <div class="u-content-sec">
        <div class="container">
          <div class="u-signup-block common-form-block cmn-block-shadow">
            <div class="row align-items-center">
              <div class="col-lg-6 col-md-6">
                <div class="sign_up_img">
                  <img src="images/sign-up.png" alt="">
                </div>  
              </div> 
              <div class="col-lg-6 col-md-6">
                <form  method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                  <div class="title-sec d-flex align-items-center">
                    <h2 class="page-title">Sign up</h2>
                  </div>
                  <div class="row">
                    
                    <div class="col-md-6 u-mb-6">
                      <div class="form-group">
                        <label for="name" class="col-md-4 col-form-label">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      </div>
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    </div>


                    <div class="col-md-6 u-mb-6">
                      <div class="form-group">
                        <label for="dob" class="col-md-4 col-form-label">{{ __('dob') }}</label>
                        <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus>
                      </div>
                      @error('dob')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    </div>

                    <div class="col-md-12 u-mb-6">
                      <div class="form-group">
                        <label for="ssn" class="col-md-4 col-form-label">{{ __('ssn') }}</label>
                        <input id="ssn" type="text" class="form-control @error('ssn') is-invalid @enderror" name="ssn" value="{{ old('ssn') }}" required autocomplete="ssn" autofocus>
                      </div>
                      @error('ssn')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    </div>

                    <div class="col-md-12 u-mb-6">
                      <div class="form-group">
                        <label for="email" class="col-md-4 col-form-label">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                      </div>
                      @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>


                    <div class="col-md-12 u-mb-6">
                      <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="custom-select custom-select-lg" style="width:100%;">
                                <select name="phone_code">
                                  <option value="0">+01</option>
                                  <option value="1">+01</option>
                                  <option value="2">+02</option>
                                  <option value="3">+03</option>
                                  <option value="4">+04</option>
                                  <option value="5">+05</option>
                                </select>
                            {{-- <div class="select-selected">+01</div>
                            <div class="select-items select-hide">
                            <div>+01</div>
                            <div>+02</div>
                            <div>+03</div>
                            <div>+04</div>
                            <div>+05</div>
                             </div> --}}
                          </div>
                          </div>
                          <div class="col-md-8">
                            <div>
                              <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" placeholder="Mobile Number" value="{{ old('phone_number') }}" required autocomplete="phone_number">
                            </div>
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12 u-mb-6">
                      <div class="form-group">
                        
                        <label for="address" class="col-md-4 col-form-label"> {{ __('Address') }}</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="A 152 Royal Street san Francisco California"  name="address" placeholder="address" value="{{ old('address') }}" required autocomplete="address">
                      </div>
                    </div>
    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <span class="icon-eye-outline"></span>
                      </div>
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <span class="icon-eye-outline"></span>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                      <div class="form-group custom_upload">
                        <label for="upload-photo"> <span class="icon-upload"></span> Upload signature </label>
                        <input type="file" name="photo" id="upload-photo">
                       
                      </div>
                    </div>

                  </div>
                  <div class="note-sec">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck" checked="">
                        <label class="custom-control-label" for="customCheck">I agree with the <a href="terms-condition.html"> Terms and Conditions</a> and <a href="privacy-policy.html">Privacy Policy.</a></label>
                    </div>
                  </div>
                  <button type="submit" class="cus_btn">Sign Up</button>
                </form>
              </div>   
            </div>  
           
          </div>
        </div>
      </div>
    </div>
  </main>




@endsection

@section('scripts')
