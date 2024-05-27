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
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal-{{ $type->id }}">Delete</button>

                            <div class="modal fade" id="deleteModal-{{ $type->id }}" tabindex="-1"
                                aria-labelledby="deleteModalLabel-{{ $type->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel-{{ $type->id }}">Confirm Delete
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete "{{ $type->name }}"?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('admin.types.destroy', $type->id) }}" method="POST">
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
                        <td colspan="3">No types found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
