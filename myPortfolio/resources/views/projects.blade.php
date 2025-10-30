@extends('layouts.app')

@section('title', 'Projects')

@section('content')
  <section>
    <h1>Projects</h1>
    <ul>
      @forelse($projects as $project)
        <li>
          <a href="{{ route('project.show', $project['slug']) }}">
            <h3>{{ $project['title'] }}</h3>
          </a>
          <p>{{ $project['summary'] }}</p>
        </li>
      @empty
        <p>No projects found.</p>
      @endforelse
    </ul>
  </section>
@endsection
