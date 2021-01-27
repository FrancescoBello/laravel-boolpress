@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <form>
    <div class="form-group">
      <label for="exampleFormControlInput1">title</label>
      <input type="email" class="form-control" id="exampleFormControlInput1">
    </div>


    <div class="form-group">
      <label for="exampleFormControlTextarea1">Description</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <a class="btn btn-info" href="">aggiungi</a>
  </form>
        </div>
    </div>
</div>
@endsection
