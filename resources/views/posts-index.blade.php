
@extends('layouts.layout-main')
@section('title', 'Posts')
@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>
                Posts
            </h1>
        </div>
        <div class="col-md-4">
            <a href="{{ url('post-create') }}" class="btn btn-primary float-end">Create</a>

        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-striped mt-4 ">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td> Edit, 
                                <a href="{{ url('delete-posts?delete=' . $post->id) }}" class="text-danger">Delete</a>
                            </td>
                        </tr>

                    @endforeach


                </tbody>
            </table>
        </div>

    </div>


@endsection