@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="mx-sm-4 mb2">
                <h1>MENU</h1>
            </div>
        </div>
        <div class="col-md-8">
            <div class="">
                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif    
                    <div class='btn primary form'>                  
                        <form class="form-inline">

                        <div class="form-group mx-sm-4 mb-2">
                            <a class="btn btn-primary" href="{{route('products.create')}}">ADD PRODUCT</a>
                        </div>

                        <div class="form-group mx-sm-4 mb-2">                            
                            <a class="btn btn-primary" href="{{route('products.create')}}">IMPORT PRODUCT</a>
                        </div>   

                        <div class="form-group mx-sm-3 mb-2">
                            <label for="" class="sr-only">Serach</label>
                            <input type="Serach" class="form-control" id="" placeholder="Serach">
                        </div>

                            <button type="submit" class="btn btn-primary mb-2">Serach</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
