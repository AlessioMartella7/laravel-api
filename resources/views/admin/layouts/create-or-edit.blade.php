@extends('layouts.app')

@section('page-title', 'Create Project')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-5 text-primary">
                    @yield('form-title')
                </h1>

            </div>
            <div class="col-12 d-flex justify-content-center ">

                <form action="@yield('form-action')" method="POST" class="w-50" enctype="multipart/form-data">
                    @yield('form-method')
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', $project->name) }}">
                        @error('name')
                            <div class="alert alert-warning mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $project->title) }}">
                        @error('title')
                            <div class="alert alert-warning mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $project->description) }}</textarea>
                        @error('description')
                            <div class="alert alert-warning mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="url" class="form-control" id="url" name="url"
                            value="{{ old('url', $project->url) }}">
                        @error('url')
                            <div class="alert alert-warning mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="date" class="form-control" id="start_date" name="start_date"
                            value="{{ old('start_date', $project->start_date) }}">
                        @error('start_date')
                            <div class="alert alert-warning mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" class="form-control" id="end_date" name="end_date"
                            value="{{ old('end_date', $project->end_date) }}">
                        @error('end_date')
                            <div class="alert alert-warning mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group my-2">
                        <label for="project-image">Image</label>
                        <input type="file" name="image" id="project-image" class="form-control">
                        @error('image')
                            <div class="alert alert-warning mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="type_id">Project Type</label>
                        <select class="form-control" id="type_id" name="type_id">
                            @foreach ($types as $singleType)
                                <option value="{{ $singleType->id }}" @if ($singleType->id == old('type_id', $project->type_id)) selected @endif>
                                    {{ $singleType->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    @foreach ($technologies as $technology)
                        <div class="form-check">
                            <label class="form-check-label" for="project-technologies" name="technologies[]"
                                id="project-technologies">
                                {{ $technology->name }}
                            </label>
                            <input class="form-check-input" type="checkbox" name="technologies[]"
                                value="{{ $technology->id }}" id="project-technologies"
                                @if (in_array($technology->id, old('technologies', $project->technologies->pluck('id')->toArray()))) @checked(true) @endif>
                        </div>
                    @endforeach
                    @error('technologies')
                        <div class="alert alert-warning mt-2">{{ $message }}</div>
                    @enderror

                    <div class="d-flex my-3">
                        <div class="text-center justify-content-start align-items-center">
                            <button type="submit" class="btn btn-success">@yield('form-title')</button>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('admin.project.index') }}" class="btn btn-warning ms-2">Back to Projects</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
