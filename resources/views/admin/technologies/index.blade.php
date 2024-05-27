@extends('layouts.admin')

@section('title', 'Manage Technologies')

@section('content')
    <div class="container">
        <h1>Technologies</h1>
        <a href="{{ route('admin.technologies.create') }}" class="btn btn-info text-white my-3">Create New Technology</a>

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
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal-{{ $technology->id }}">Delete</button>

                            <div class="modal fade" id="deleteModal-{{ $technology->id }}" tabindex="-1"
                                aria-labelledby="deleteModalLabel-{{ $technology->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel-{{ $technology->id }}">Confirm
                                                Delete</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete "{{ $technology->name }}"?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('admin.technologies.destroy', $technology->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
