@extends('layouts.app')

@section('title', 'About')

@section('content')
  <section>
    <h1>About Me</h1>
    <p>{{ $bio }}</p>
  </section>
@endsection
