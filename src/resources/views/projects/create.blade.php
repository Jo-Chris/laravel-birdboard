@extends('layouts.app')

@section('content')
        <h1 class="heading is-1">Create a Project</h1>

        <form method="POST" action="/projects">

            @csrf

            <div class="field">
                <label for="title"> Title </label>
                <div class="control">
                    <input type="text" class="input" name="" placeholder="">
                </div>
            </div>
            <div class="field">
                <label for="description"> Description </label>
                <div class="control">
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="field">
                <label for="description"> Create Project </label>
                <div class="control">
                    <button name="description" id="" cols="30" rows="10">Create Project</button>
                    <a href="/projects"> Cancel </a>
                </div>
            </div>
        </form>
@endsection
