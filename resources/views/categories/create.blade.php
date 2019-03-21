@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts._includes._nav')
        <div class="col-5">
            <h3>Create Category</h3>
            <form 
                method="POST"
                action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}"
            >
                {{ isset($category) ? method_field('put') : null }}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="name" 
                        placeholder="Name" 
                        name="name"
                        value="{{ isset($category) ? $category->name : '' }}"
                    >
                </div>     
                <div class="form-inline">
                    <button type="submit" class="btn btn-success mr-2">Save</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-danger mr-2">Cancel</a>
                </div>           
            </form>
        </div>
    </div>
</div>
@endsection
