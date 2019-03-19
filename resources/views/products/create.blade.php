@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="mx-sm-4 mb2">
                <h1>MENU</h1>
            </div>
        </div>
        <div class="col-md-3">
            <div class="">      
                <div class='btn action secundary form'>                  
                    <form class="form-inline">

                        <div class="form-group mx-sm-3 mb-2">
                            <a class="btn btn-primary" href="{{route('products.create')}}">UPDATE</a>
                        </div>

                        <div class="form-group mx-sm-3 mb-2">                            
                            <a class="btn btn-secondary" href="{{route('products.create')}}">CANCEL</a>
                        </div> 

                        <div class="form-group mx-sm-3 mb-2">                            
                            <a class="btn btn-danger" href="{{route('products.create')}}">DELETE</a>
                        </div>  
                        
                    </form>
                    <form action="form-group">
                        <div class="">
                            <input type="text" class="form-control form-control-sm" id="name" placeholder="Product name">
                            
                            <input type="text" class="form-control form-control-sm" id="subname" placeholder="Product sub name">
                        
                            <input type="text" class="form-control form-control-sm" id="price" placeholder="Price">
                        
                            <textarea class="form-control" id="description" placeholder="Description" required></textarea>
                        </div>
                    </form>
                </div>                                   
            </div>
            
        </div>
        <div class="col-md-3">                                     
                <a class="btn btn-primary" href="{{route('products.create')}}">PREVIEW</a>            
        </div>  
           
            
    </div>
</div>
@endsection