@extends('layouts.app')

@section('page-title', $project->title)

@section('main-content')

<div class="container">
    <h2 class="text-center">
        Title project:
        {{ $project->title }}
    </h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                {{ $project->title }}
            </h5>
            <p class="card-text">
                <strong>
                    Description:
                </strong>
                {{ $project->description }}
            </p>
            <div>
                <strong>
                    Link:
                </strong>
                <a>
                    {{ $project->url }}
                </a>
            </div>
            <div>
                <strong>
                    Creation date:
                </strong>
                <small>
                    {{ $project->creation_date }}
                </small>
            </div>
            <div>
                <strong>
                    Is online:
                </strong>
                <small>
                    <td>
                        @if ($project->is_online == 1)
                                
                            <span>True</span>
                        @else
                            <span>False</span>

                        @endif
                    </td>
                </small>
            </div>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary mt-4">All projects</a>
          </div>
    </div>
</div>

@endsection