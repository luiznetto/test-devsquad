@extends('layouts.app')

@section('content')
<div class="d-flex flex-column h-100">
    <div class="row justify-content-center">
        <div class="head">
            <div class="">                
                <img src="{{ asset('images/soon-login.png') }}"  />  
            </div>                       
                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">                          

                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus
                            placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif                           
                        </div>

                        <div class="form-group">                                                    
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required 
                            placeholder="Passoword">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>                      

                        <div class="form-group">
                            <div class="text-center">                                 
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div> 
                <footer class="mt-auto py-3">
                    <div class="container">
                        <span class="text-muted">2019 Vintage - All rigths reserveds</span>
                    </div>
                </footer>           
        </div>
        
    </div>
  
</div>
@endsection
