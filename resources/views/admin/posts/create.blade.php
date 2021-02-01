@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">title</label>
              <input type="text"  class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label>Categoria</label>
              <select class="form-control" name="category_id">
                  <option value="">seleziona categoria</option>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">  {{ $category->name }}  </option>
                  @endforeach
              </select>
                </div>
             <button type="submit" class="btn btn-success">
         </form>
        </div>
    </div>
</div>
@endsection
