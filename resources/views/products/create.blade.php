@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts._includes._nav')
        <div class="col-9">
            <h3>Create Product</h3>
            <form method="POST" action="{{ route('products.store') }}"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category_id" class="form-control">
                        <option selected>Category</option>
                        @foreach($categories as $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    </select>
                </div>                
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                </div>
                <div class="form-group" >
                    <label for="image">Images</label>
                    <input class="file btn btn-lg btn-primary" id="image" type="file" name="image"/>                     
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
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
