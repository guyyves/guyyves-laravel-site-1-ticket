@extends('base')
    @section('content')
        <div class="container">
           <table class="table">
               <thead>
                    <tr>
                        <th>Title</th>
                        <th>Start Datum</th>
                        <th>Prijs</th>
                        <th>Adres</th>
                        <th>Locatie</th>
                        <th>Postcode</th>
                        <th>capaciteit</th>
                        <th>Eind Datum</th>
                    </tr>
               </thead>
                @foreach($events as $event)
                        <tr>
                            <td class="table-dark"><a href="{{ route('events.show', $event->id) }}">{{ $event->title }}</a></td>
                            <td class="table-dark">{{ $event->start_time }}</td>
                            <td class="table-dark">{{ $event->ticket_price }}</td>
                            <td class="table-dark">{{$event->address}}</td>
                            <td class="table-dark">{{$event->city}}</td>
                            <td class="table-dark">{{$event->zip}}</td>
                            <td class="table-dark">{{$event->capacity}}</td>
                            <td class="table-dark">{{$event->end_date}}</td>
                        </tr>
                @endforeach
           </table>
            <a class="btn btn-primary" href="{{ route('events.create') }}" role="button">+ nieuw evenement</a>
        </div>
    @endsection
