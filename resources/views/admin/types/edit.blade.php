@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Type</h1>
        <form action="{{ route('admin.types.update', $type->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $type->name }}">
            </div>
            <button type="submit" class="btn btn-info text-white">Update</button>
        </form>
    </div>
@endsection
