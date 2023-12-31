@extends('layouts.app')

@section('page-title', 'Projects')

@section('main-content')

<div class="container">
    <h2 class="text-center">
        Add new Project
    </h2>

    <div class="bg-success px-3 py-3">

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
    
            <div class="mb-3">
                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" min="2" max="170" placeholder="Write here the title..." value="{{ old('title') }}" required>
            </div>
            @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="creation_date" class="form-label">Creation date</label>
                <input type="date" class="form-control" id="creation_date" name="creation_date" placeholder="Write here the creation date..." value="{{ old('creation_date') }}">
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Url <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" placeholder="Write here the url..." min="100" max="2054" value="{{ old('url') }}" required>
            </div>
            @error('url')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Write here the thumb..." min="100" max="2054" value="{{ old('thumb') }}" >
            </div>
            <div class="mb-3">
                <label for="is_online" class="form-label">Is online <span class="text-danger">*</span></label>
                <input type="number" min="0" max="1" class="form-control @error('is_online') is-invalid @enderror" id="is_online" name="is_online" placeholder="Write here if this is online..." value="{{ old('is_online') }}" required>
            </div>
            @error('is_online')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="description" class="form-label">Description<span class="text-danger">*</span></label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description"  name="description" rows="3" placeholder="Write here the description..." required>value="{{ old('description') }}" </textarea>
            </div>
            @error('description')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            
            <div class="text-center">
                <button type="submit" class="btn btn-success border border-white">
                    Add
                </button>
            </div>
    
        </form>

    </div>
</div>

@endsection