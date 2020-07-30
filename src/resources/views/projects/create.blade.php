@extends('layouts.app')

@section('content')
        <h1 class="heading is-1">Create a Project</h1>

        <form method="POST" action="/projects">

            @csrf

            <div class="field">
                <label for="title"> Title </label>
                <div class="control">
                    <input type="text" class="resize-none border rounded focus:outline-none focus:shadow-outline" name="title" placeholder="">
                </div>
            </div>
            <div class="field">
                <label for="description"> Description </label>
                <div class="control">
                    <textarea class="resize-none border rounded focus:outline-none focus:shadow-outline" name="description" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="field">
                <div class="control mt-4">
                    <button class="btn btn-primary" id="" cols="30" rows="10" type="submit">Create Project</button>
                    <a href="/projects" class="text-danger"> Cancel </a>
                </div>
            </div>
        </form>
@endsection
