@extends('layouts.app')
@section('content')
  <h1>Create a project</h1>
  <form method="POST" action="/projects">
    @csrf
    <input type="text" name="title">Title <br>
    <input type="text" name="description">Description <br>
    <button type="submit" class="button is-link">Create</button>
    <a href="/projects">cancel</a>
  </form>
@endsection