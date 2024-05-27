@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Technology</h1>
        <form action="{{ route('admin.technologies.update', $technology->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $technology->name }}">
            </div>
            <button type="submit" class="btn btn-info text-white">Update</button>
        </form>
    </div>
@endsection
