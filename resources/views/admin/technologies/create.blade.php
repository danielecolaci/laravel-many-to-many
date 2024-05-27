@extends('layouts.admin')

@section('title', 'Create Technology')

@section('content')
    <div class="container">
        <h1>Create New Technology</h1>
        <form action="{{ route('admin.technologies.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-info text-white">Create</button>
        </form>
    </div>
@endsection
