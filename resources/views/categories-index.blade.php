<?php
use App\Models\Category;
$list = Category::all();
?>
@extends('layouts.layout-main')
@section('title', 'Categories')
@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>
                Categories
            </h1>
        </div>
        <div class="col-md-4">
            <a href="{{ url('categories-create') }}" class="btn btn-primary float-end">Create</a>

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
                    @foreach ($list as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td> Edit, 
                                <a href="{{ url('categories?delete=' . $item->id) }}" class="text-danger">Delete</a>
                            </td>
                        </tr>

                    @endforeach


                </tbody>
            </table>
        </div>

    </div>


@endsection