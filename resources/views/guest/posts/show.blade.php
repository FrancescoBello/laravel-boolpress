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
                <th scope="col">Tag</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td> {{ $post->id }} </td>
                  <td> {{ $post->username }} </td>
                  <td> {{ $post->title }} </td>
                  <td> {{ $post->post_date }} </td>


                </tr>
            </tbody>
       </table>
       <p>

         @foreach ($post->$tags as $tag)
          {{ $tag->name }}
         @endforeach
       </p>


        </div>
    </div>
</div>
@endsection
