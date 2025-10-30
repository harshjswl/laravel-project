@extends('layouts.app')

@section('title', 'Contact')

@section('content')
  <section>
    <h1>Contact Me</h1>

    @if ($errors->any())
      <div class="errors">
        <ul>
          @foreach ($errors->all() as $err)
            <li>{{ $err }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}">
      @csrf
      <label>Name</label>
      <input type="text" name="name" value="{{ old('name') }}">

      <label>Email</label>
      <input type="email" name="email" value="{{ old('email') }}">

      <label>Message</label>
      <textarea name="message">{{ old('message') }}</textarea>

      <button type="submit">Send</button>
    </form>
  </section>
@endsection
