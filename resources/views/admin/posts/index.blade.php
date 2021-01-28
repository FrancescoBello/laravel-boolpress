@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Username</th>
          <th scope="col">Title</th>
          <th scope="col">Post Date</th>

          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>

        @foreach ($posts as $post)

          <tr>

            <td> {{ $post->id}} </td>
            <td> {{ $post->username }} </td>
            <td> {{ $post->title }} </td>
            <td> {{ $post->post_date }} </td>

          <td><a class="btn btn-info" href="{{ route("posts.show", ['posts' => $post->id]) }}">visualizza</a></td>
            <td><a class="btn btn-info" href="{{ route("admin.posts.create") }}">aggiungi</a></td>
          </tr>

        @endforeach



      </tbody>
    </table>
        </div>
    </div>
</div>
@endsection
