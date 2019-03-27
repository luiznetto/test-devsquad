@extends('layouts.app')

@section('content')
<div class="container container-admin">
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
                    <a class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModal">IMPORT PRODUCT</a>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">UPLOAD PRODUCT</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>                        
                        <div class="modal-footer">                            
                            <form action="{{ route('products.import') }}" method="post" enctype="multipart/form-data"> 
                                {{ csrf_field() }}
                                <!-- Modal body -->
                                <div class="modal-body">                                                    
                                    <div class="form-group" >                                        
                                        <input class="file btn btn-lg btn-primary form-control" id="csv" type="file" name="csv">              
                                    </div>
                                </div>  
                                <!-- Modal footer -->
                                <button type="submit" class="btn btn-primary">Upload</button>     
                                <a href="javascript(false);" class="btn btn-danger" data-dismiss="modal">Close</a>
                            </form>                                                  
                        </div>
                    </div>
                </div>
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
                                <td>{{ $product->category->name ?? '' }}</td>
                                <td>{{ $product->price }}</td>
                                <td class="form-inline">
                                    <a class="btn btn-primary mr-2" href="{{ route('products.edit', $product->id) }}">Edit</a>    
                                    <a href="javascript(false);" class="btn btn-danger" data-toggle="modal" data-target="{{ '#modal-delete-' . $product->id }}">Delete</a>            
                                    @include('layouts._includes._modal-delete', ['elementId' => $product->id, 'route'=> 'products.destroy'])                    
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
            <footer class="footer-login">
                <div class="container text-center">
                    <span class="span-text">2019 Vintage - All rigths reserveds</span>
                </div>
            </footer>  
        </div>
    </div>
</div>
@endsection
