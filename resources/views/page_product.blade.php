@extends('layouts.app')
@section("bla")
    <div class="row-top">
        <p>free shipping</p>    
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="product-image">
                    <img src="{{ asset('images/clock_1.png') }}" alt="" height="340" width="370">
                </div>
            </div> 
            <div class="col-6">
                <div class="product-data">
                    <h3>Gold + Black</h3>
                    <h2>$119,00</h2>
                    <p>QUANTITY</p>
                    <div class="qty">
                        <span class="minus">-</span>
                        <input type="number" class="count" name="qty" value="01">
                        <span class="plus">+</span>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        A illo est assumenda autem fugit? 
                        Odit, in vel itaque vero quidem ipsa non tenetur magni corrupti vitae ea maiores ad repudiandae?
                    </p>
                </div>
                    <p>
                        <button class="product">Add to Cart</button>
                    </p>                
            </div>
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
        <footer class="footer"> 
            <div class="container-fluid ">  
                <div class="container"> 
                    <div class="row text-footer">
                        <div class="col-3">
                            <img src="{{ asset('images/soon-footer.png') }}" /> 
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
                            <i class=" fa fa-facebook-official"></i>
                            <i class=" fa fa-facebook-official"></i>
                            <i class=" fa fa-facebook-official"></i>
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
