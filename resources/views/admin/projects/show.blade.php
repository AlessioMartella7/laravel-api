@extends('layouts.app')

@section('page-title', 'Project Details')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center my-5 text-primary">
                    Project Details
                </h1>
            </div>

            <div class="col-12 w-50 ">
                <div class="card bg-light mb-4 shadow">
                    <div class="card-header bg-primary text-white">
                        <h5>{{ $project->name }}</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Description:</strong> {{ $project->description }}</p>
                        <p><strong>URL:</strong> {{ $project->url }}</p>
                        <p><strong>Start Date:</strong> {{ $project->start_date }}</p>
                        <p><strong>End Date:</strong> {{ $project->end_date }}</p>
                        <p><strong>Type Name:</strong> {{ $project->type->name }}</p>
                        <p><strong>Type Description:</strong> {{ $project->type->description }}</p>
                        @foreach ($project->technologies as $technology)
                            <span class="badge rounded-pill text-bg-info shadow">{{ $technology->name }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-12 text-center">
                <a href="{{ route('admin.project.index') }}" class="btn btn-primary">Back to Projects</a>
            </div>
        </div>
    </div>

@endsection
