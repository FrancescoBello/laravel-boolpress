@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
          </div>
          <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf

            <div class="form-group">
              <label for="exampleFormControlInput1">title</label>
              <input type="text" name="title" class="form-control" maxlength="100" required id="exampleFormControlInput1">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" name="description" required id="exampleFormControlTextarea1" rows="3"></textarea>
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
                <div class="form-group">
                  @foreach ($tags as $tag)
                    <div class="form-check">
                       <input type="checkbox" name="tags[]" class="form-check-input" value="{{ $tag->id }}">
                       <label class="form-check-label" >{{ $tag->name }}</label>
                    </div>
                  @endforeach
                </div>


             <button type="submit" class="btn btn-success">aggiungi</button>
         </form>
        </div>
    </div>
</div>
@endsection
