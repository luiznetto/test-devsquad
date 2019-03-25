@extends('layouts.app')

@section('content')
.container-admin
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
            @if (session('error'))
                <div class="row">
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                </div>
            @endif
            <div class="row flex-row justify-content-between">
                <div class="flex-row">
                    <a class="btn btn-primary mr-2" href="{{route('categories.create')}}">ADD CATEGORY</a>
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
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>
                                <td class="form-inline">
                                    <a class="btn btn-primary mr-2" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                                    <a href="javascript(false);" class="btn btn-danger" data-toggle="modal" data-target="{{ '#modal-delete-' . $category->id }}">Delete</a>            
                                    @include('layouts._includes._modal-delete', ['elementId' => $category->id, 'route'=> 'categories.destroy'])      
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if(count($categories) === 0)
                    <div class="col flex-row justify-content-center text-center">
                        No data available
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
