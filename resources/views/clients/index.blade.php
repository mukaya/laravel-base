@extends('layout')

@section('content')
<h1>List of customer</h1>
<ul>
   @foreach ($clients as $client)
      <li>{{$client->name}}  <em>{{$client->email}}</em></li>
   @endforeach
</ul>
<hr/>
<div class="container">
    <form action="/clients" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Your name"/>
        </div>
        @error('pseudo')
        <div class="alert alert-danger">
            {{ $errors->first('pseudo')}}
        </div>
        @enderror
        <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your email"/>
        </div>
        @error('email')
            <div class="alert alert-danger">
                {{$errors->first('email')}}
            </div>
        @enderror
        <div class="form-group">
           <button type="submit" class="btn btn-primary">Add a customer</button>
        </div>
    </form>
</div>
@endsection
