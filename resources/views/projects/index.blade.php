@extends('layouts.app')
@section('content')
    <header class="flex items-center py-4">
        <div class="flex justify-between items-center w-full">
            <h2 class="text-gray-400 text-sm">My Projects</h2>
            <a href="/projects/create" class="button">New Project</a>
        </div>

    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                <div class="bg-white p-5 rounded-lg shadow" style="height: 200px;">
                    <h3 class="font-normal text-xl mb-5 py-4 -ml-5 mb-2 border-l-4 border-blue-500 pl-4">
                        <a href="{{ $project->path()}}">{{ $project->title }}</a>
                    </h3>
                    <div class="text-gray-400">{{ Str::limit($project->description, 200) }}</div>
                </div>
            </div>
        @empty
            <div>No projects yet.</div>
        @endforelse
    </main>
@endsection