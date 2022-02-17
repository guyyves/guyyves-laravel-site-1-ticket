@extends('base')

@section('content')
    <h1>Buy Tickets for {{$event->title}}</h1>
    <form method="post" action="{{route('events.orderTicket', $event->id)}}">
        @csrf
        <div class="form-group">
            <label for="">Amount of Tickets</label>
            <input type="number" name="amount" class="form-control">
        </div>
        <input type="submit" value="Order" class="btn btn-primary">
    </form>

@endsection
