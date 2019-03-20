@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts._includes._nav')
        <div class="col-9">
            <h3>Create Category</h3>
            <form method="POST" action="{{ route('categories.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name">
                </div>                
            </form>
        </div>
    </div>
</div>
@endsection
