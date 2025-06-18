@extends('layouts.layout-main')
@section('title', 'create-category')
@section('heading', 'Creating a new category')
@section('content')

    <div class="row">
        <div class="col-md-9">
            <h1>
                Creating a new category
            </h1>
        </div>
        <div class="col-md-3">
            <a href="{{ url('categories') }}" class="btn btn-primary float-end">List</a>


        </div>
    </div>

    <form action="" method="post">
        @csrf
        <div class="form-group mt-4">
            <label for="name" class="mt-4 fw-bold">Category Name</label>
            <input type="text" class="form-control mt-2" id="name" name="name" placeholder="Enter category name" required>
        </div>
        <div class="form-group mt-2">
            <label for="category" class="mt-2 fw-bold">Category Description</label>
            <textarea name="details" id="details" class="form-control mt-1" placeholder="Enter category name" rows='5'
                required></textarea>

        </div>
        <button class="btn btn-primary mt-2" type='submit'>SUBMIT</button>
    </form>

@endsection