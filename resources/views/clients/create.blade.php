@extends('layout')

@section('content')
<h1>Créer un nouveau client</h1>
<div class="container mt-5">
    <form action="/clients" method="POST">
        @include('includes.form')
        <div class="form-group">
           <button type="submit" class="btn btn-primary">Add a customer</button>
        </div>
    </form>
</div>
@endsection
