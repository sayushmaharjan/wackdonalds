@extends('layouts.app')
@section('title')
Welcome
@endsection

@section('container')

  <div class='col-md-6 col-md-offset-4'>
    <h1>Login </h1>
    <form method="post" action="{{route('login')}}">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" placeholder="email" name="email" required id="email">
      </div>
      <div class="form-group">
        <label for="password1">password</label>
        <input type="password" class="form-control" placeholder="password" name="password"required id="password1">
      </div>

      {{csrf_field()}}
      <button type="submit" name="submit" class="btn btn-primary">submit</button>
    </form>
    @if(count($errors)>0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $er)
          {{$er}}
        @endforeach
    </div>
    @endif
  </div>
@endsection
