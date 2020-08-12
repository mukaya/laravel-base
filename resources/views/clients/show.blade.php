@extends('layout')

@section('content')
<div class="container">
    <h1>Client: {{$client->name}}</h1>
    <a href="/clients/{{$client->id}}/edit" class="btn btn-primary">Edit un client</a>
<hr>

<p>
    <strong>Email</strong>: {{ $client->email}}
</p>
<p>
    <strong>Entreprise</strong>: {{$client->Entreprise->name}}
</p>
</div>
@endsection
