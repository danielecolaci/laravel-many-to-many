@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Technologies</h1>
        <a href="{{ route('admin.technologies.create') }}" class="btn btn-info text-white mb-3">Create New Technology</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($technologies as $technology)
                    <tr>
                        <td>{{ $technology->name }}</td>
                        <td>{{ $technology->slug }}</td>
                        <td>
                            <a href="{{ route('admin.technologies.edit', $technology->id) }}"
                                class="btn btn-sm btn-info text-white">Edit</a>
                            <form action="{{ route('admin.technologies.destroy', $technology->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button technology="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this technology?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No technologies found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
