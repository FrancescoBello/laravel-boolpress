@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-8">
        <h1>posts</h1>

        <ul>

          @foreach ($posts as $post)
            <li> <a href="#"> {{ $post->title }} </a> </li>
          @endforeach

        </ul>

      </div>

    </div>

  </div>

@endsection
