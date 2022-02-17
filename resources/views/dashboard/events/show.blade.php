@extends('base')
@section('content')
    <div class="container">
        <h1>Dashboard</h1>
        <h2 class="border-bottom border-4">Event Detailpagina</h2>
        <h3>{{ $event->title }}</h3>
        <p><span class="fw-bolder">Start: </span>{{$event->start_time}}</p>
        <p><span class="fw-bolder">Adres: </span>{{$event->address}}</p>
        <p><span class="fw-bolder">Postcode: </span>{{$event->zip}}</p>
        <p><span class="fw-bolder">Locatie: </span>{{$event->city}}</p>
        <p><span class="fw-bolder">Ticketprijs: </span>{{$event->ticket_price}}</p>
        <button type="button" class="btn btn-info">Aanpassen</button>
        <button type="button" class="btn btn-danger">Verwijderen</button>
    </div>
@endsection
