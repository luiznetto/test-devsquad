@extends('layouts.app')

@section('content')
<div class="container container-admin">
    <div class="row">
        @include('layouts._includes._nav')
        <div class="col-9">
            <h3>Create Product</h3>
            <form method="POST" 
            action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}"  
            enctype="multipart/form-data">                
                {{ csrf_field() }}               
                <div class="form-group" >
                    <label for="image">Image</label>
                    <input 
                        class="file btn btn-lg btn-primary form-control" 
                        value="{{ isset($product) ? URL::asset('/images/' . $product->image) : '' }}" 
                        id="image" 
                        type="file" 
                        name="image"
                    >  
                    @if(isset($product))
                    <img class="mt-2" id="preview" src="{{ URL::asset('/images/' . $product->image) }}"
                    height="50" width="50">
                    @endif
                </div>              
                <div class="form-inline">
                    <button type="submit" class="btn btn-success mr-2">Save</button>
                    <a href="{{ route('products.index') }}" class="btn btn-danger mr-2">Cancel</a>
                    <a href="" class="btn btn-primary">Preview</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
