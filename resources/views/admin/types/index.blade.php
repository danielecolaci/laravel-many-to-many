@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Types</h1>
        <a href="{{ route('admin.types.create') }}" class="btn btn-info text-white mb-3">Create New Type</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($types as $type)
                    <tr>
                        <td>{{ $type->name }}</td>
                        <td>{{ $type->slug }}</td>
                        <td>
                            <a href="{{ route('admin.types.edit', $type->id) }}"
                                class="btn btn-sm btn-info text-white">Edit</a>
                            <form action="{{ route('admin.types.destroy', $type->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this type?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No types found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
