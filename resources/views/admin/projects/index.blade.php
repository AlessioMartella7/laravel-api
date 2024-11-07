@extends('layouts.app')

@section('page-title', 'Projects')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-5 text-primary">
                    Projects
                </h1>

                <a href="{{ route('admin.project.create') }}" class="btn btn-primary btn-lg my-3">Create</a>

            </div>
            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="table-primary text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">URL</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col" colspan="3">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->description }}</td>
                                <td>{{ $project->url }}</td>
                                <td>{{ $project->start_date }}</td>
                                <td>{{ $project->end_date }}</td>
                                <td>
                                    <a href="{{ route('admin.project.show', $project) }}"
                                        class="btn btn-primary btn-sm text-black fw-bold shadow border border-black">Show</a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.project.edit', $project) }}"
                                        class="btn btn-warning btn-sm fw-bold shadow border border-black">Edit</a>
                                </td>
                                <td>
                                    <form class="d-inline" action="{{ route('admin.project.delete', $project) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="btn btn-danger btn-sm fw-bold fw-bold text-black shadow border border-black"
                                            type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-danger">No projects available.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
