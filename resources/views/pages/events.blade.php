@extends('base')
    @section('content')

            <h1>Upcoming Events</h1>

            @if(session()->has('message'))
                <p class="alert alert-info">{{session()->get('message')}}</p>
            @endif


            <div class="container">
                <div class="card-group">
                    @foreach($events as $event)

                            <div class="card"style="width: 18rem;">
                                <img src="/idk.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$event->title}}</h5>
                                    <p class="card-text"><b>&euro;</b> {{$event->ticket_price}}</p>
                                    <a href="{{route('events.showBuyTicketForm', $event->id)}}" class="btn btn-primary">Bestel Tickets!</a>
                                </div>
                            </div>

                    @endforeach
                </div>
            </div>
    @endsection
