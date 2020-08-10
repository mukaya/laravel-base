@extends('layout')

@section('content')
<h1>List of customer</h1>
<ul>
   @foreach ($clients as $client)
      <li>{{$client->name}}</li>
   @endforeach
</ul>
@endsection
