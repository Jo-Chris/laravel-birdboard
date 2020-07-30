@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between w-full items-center">
            <h2 class="text-grey text-sm font-normal">My Projects</h2>
            <a href="/projects/create" class="button"> Add Project </a>
        </div>
    </header>

    <main class="lg:flex flex-wrap -mx-3">
        @forelse($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                <div class="bg-white rounded-large shadow p-5 m-3"  style="height: 200px">

                    <h3 class="font-normal text-xl mb-6 py-40 border-left border-primary p-lg-2">
                        <a class="text-black-50 text-decoration-none" href="{{$project->path()}}">{{ $project->title }}</a>
                    </h3>
                    <div class="text-grey-light"> {{Str::limit($project->description, 100) }}</div>
                </div>
            </div>
        @empty
            <div>No projects yet</div>
        @endforelse
    </main>
@endsection
