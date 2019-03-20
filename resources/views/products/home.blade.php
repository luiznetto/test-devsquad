@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts._includes._nav')
        <div class="col-9">
            @if (session('message'))
                <div class="row">
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                </div>
            @endif
            <div class="row flex-row justify-content-between">
                <div class="flex-row">
                    <a class="btn btn-primary mr-2" href="{{route('products.create')}}">ADD PRODUCT</a>
                    <a class="btn btn-primary mr-2" href="{{route('products.create')}}">ADD CATEGORY</a>
                    <a class="btn btn-primary mr-2" href="{{route('products.create')}}">IMPORT PRODUCT</a>
                </div>
                <form class="form-inline">
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <div class="row">
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                                    <a
                                        class="btn btn-danger"
                                        href="javascript:(confirm('Are you sure you want delete this item?') ? window.location.href='{{ route('products.destroy', $product->id) }}' : false)"
                                    >
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if(count($products) === 0)
                    <div class="col flex-row justify-content-center text-center">
                        No data available
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
