@extends('layouts.app')

@section("bla")
    <div class="row-top">
        <p>free shipping</p>    
    </div>
@endsection

@section('content')
    <div class="header">
        <img src="{{ asset('images/banner.png') }}" />  
    </div>  
    <div class="container-fluid"> 
        <div class="row">
            <div class="first-row">
                <h1>featured</h1>
                    <p>for man</p>                         
            </div>
        </div>   
    </div>   
    <div class="container container-products"> 
        <div class="row row-products">           
                @foreach($products->slice(0, 3)  as $product)
                    <a href="{{ route('products.show' , $product ) }}" class="product-text">
                        <div class="small-3 medium-3 large-3 columns">         
                            <img class="" id="preview"  src="{{isset($product) ? URL::asset('/images/'.$product->image) : '' }}"
                                height="340" width="370">
                                <div class="row row-informations">
                                    <p class="col-6">{{$product->name}}</p>
                                <p class="col-6">{{'R$ '.number_format($product->price, 2, ',', '.')}}</p>                          
                            </div>
                                <p><button>Add to Cart</button></p>                           
                        </div>               
                    </a> 
                @endforeach                   
        </div>        
    </div>  
    <div class="container-fulid">
        <div class="row">
            <div class="first-row">
                <h1>featured</h1>
                    <p>for woman</p>                        
            </div>
        </div>
    </div> 
    <div class="container container-products"> 
        <div class="row row-products">           
                @foreach($products->slice(0, 3)  as $product)
                    <a href="{{ route('products.show' , $product ) }}" class="product-text">
                        <div class="small-3 medium-3 large-3 columns">         
                            <img class="" id="preview"  src="{{isset($product) ? URL::asset('/images/'.$product->image) : '' }}"
                                height="340" width="370">
                                <div class="row row-informations">
                                    <p class="col-6">{{$product->name}}</p>
                                <p class="col-6">{{'R$ '.number_format($product->price, 2, ',', '.')}}</p>                          
                            </div>
                                <p><button>Add to Cart</button></p>                           
                        </div>               
                    </a> 
                @endforeach                   
        </div>        
    </div>  
       
@endsection
    
@section('footer')
    <div class="container-fluid container-footer">
        <div class="row">
            <div class="newsletter-row">
                <h1>want 80% off?</h1>
                    <p>subscribe below to get</p>                   
                        <input type="email" class="news" placeholder="Email"
                               id="email">                   
                    
                    <p><button>subscribe</button></p>                                          
            </div>
        </div> 
    </div>
    <footer class="footer mt-auto py-3"> 
            <div class="container-fluid ">  
                <div class="container"> 
                    <div class="row text-footer">
                        <div class="col-3">
                            <img src="{{ asset('images/logo-footer1.png') }}" /> 
                        </div>
                        <div class=""></div>
                        <div class="col-3">
                            <h4>about</h4>
                            <p>our mission</p>
                            <p>about us</p>
                            <p>reviews</p>
                        </div>
                        <div class="col-3">
                            <h4>menu</h4>
                            <p>for man</p>
                            <p>for woman</p>
                            <p>others</p>
                        </div>
                        <div class="col-3">
                            <h4>social media</h4>
                            <div class="social-media">
                                <span class="">
                                    <i class="fab fa-facebook-square"></i>
                                </span>                                
                            </div>   
                            <div class="social-media">
                                <span class="">
                                    <i class="fab fa-twitter"></i>
                                </span>                                
                            </div>   
                            <div class="social-media">
                                <span class="">
                                    <i class="fab fa-youtube"></i>
                                </span>                                
                            </div>   
                        </div>
                    </div>
                    <div class="row row-end-footer">
                        <div class="col-6">
                            <p>support@vincerowatches.com</p>
                        </div>
                        <div class="col-6">
                            <p>2019 Vintage - All rigths reserveds</p>
                        </div>
                    </div>
                </div>    
            </div>
        </footer>    
       
@endsection
    
    

