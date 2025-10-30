
@extends('layouts.app')

@section('title', $project['title'])

@section('content')
  <section>
    <a href="{{ route('projects') }}">&larr; Back to Projects</a>
    <h1>{{ $project['title'] }}</h1>
    <p>{{ $project['content'] }}</p>
  </section>
@endsection
