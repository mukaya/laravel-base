@extends('layout')

@section('content')
<h1>List of customer</h1>

<a href="/clients/create" class="btn btn-primary m-3">Nouveau client</a>
<hr/>
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">entreprise</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td><a href="/clients/{{$client->id}}">{{$client->name}}</a></td>
                <td>{{$client->email}}</td>
                <td>{{$client->status}}</td>
                <td>{{$client->entreprise->name}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
