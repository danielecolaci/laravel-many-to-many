@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4 text-center">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <br>
                        <a class="btn btn-info my-5 btn-lg text-white" href="{{ url('/admin/projects') }}">Manage
                            Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
