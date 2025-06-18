

@extends('layouts.layout-main')
@section('title', 'create-post')
@section('heading', 'Creating a new post')
@section('content')

    <div class="row">
        <div class="col-md-9">
            <h1>
                Creating a new post
            </h1>
        </div>
        <div class="col-md-3">
            <a href="{{ url('posts') }}" class="btn btn-primary float-end">List</a>


        </div>
    </div>

    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title" class="mt-2 fw-bold">Post Title</label>
            <input type="text" class="form-control mt-2" id="title" name="title" placeholder="Your post title" required>
        </div>
        <div class="form-group">
            <label for="category_id" class="mt-2 fw-bold">Post category</label>
            <select class="form-control mt-2" id="category_id" name="category_id" required>
                <option value="">Select a category</option>
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    
                @endforeach
            </select>
        </div>
            <div class="form-group">
                <label for="photo">Post image</label>
                <input type="file" accept=".png, .jpg, .jpeg" class="form-control mt-2" id="photo"
                    name="photo" placeholder="Your post image" required>

            </div>

        <div class="form-group">
            <label for="body" class="mt-2 fw-bold">Post Body</label>
            <textarea name="body" id="body" class="form-control mt-1" placeholder="Your content comes here" rows='5'
                required></textarea>

        </div>
        <button class="btn btn-primary mt-2" type='submit'>SUBMIT</button>
    </form>

@endsection