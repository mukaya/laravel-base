@extends('layout')

@section('content')
<h1>Edit le client : {{$client->name}}</h1>
<div class="container mt-5">
    <form action="/clients/{{$client->name}}" method="POST">
        @method('PATCH')
        @include('includes.form')
        <div class="form-group">
           <button type="submit" class="btn btn-primary">Edit a customer</button>
        </div>
    </form>
</div>
@endsection
