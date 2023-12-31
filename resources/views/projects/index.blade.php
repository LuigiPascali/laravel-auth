@extends('layouts.app')

@section('page-title', 'Projects')

@section('main-content')
    
    <div class="container">

        <h2 class="text-center">
            All Projects
        </h2>

        <div class="text-center my-4">

            <a href="{{ route('admin.projects.create') }}">
                <button class="btn btn-success">
                    Add new Project
                </button>
            </a>

        </div>

        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Creation Date</th>
                        <th scope="col">Url</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Description</th>
                        <th scope="col">Is Online</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($projects as $project)
                        
                        <tr>
                            <th scope="row">
                                {{ $project->id }}
                            </th>
                            <td>
                                {{ $project->title }}
                            </td>
                            <td>
                                {{ $project->creation_date }}
                            </td>
                            <td>
                                {{ $project->url }}
                            </td>
                            <td>
                                {{ $project->thumb }}
                            </td>
                            <td>
                                {{ $project->description }}
                            </td>
                            <td>
                                @if ($project->is_online == 1)
                                        
                                    <span>True</span>
                                @else
                                    <span>False</span>

                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}">
                                    <button class="btn btn-primary">
                                        View
                                    </button>
                                </a>
                                <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}">
                                    <button class="btn btn-warning">
                                        Edit
                                    </button>
                                </a>
                                <button class="btn btn-danger">
                                    Delete
                                </button>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
