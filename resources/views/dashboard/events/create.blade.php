@extends('base')
@section('content')
    <div class="container">
        <h1>Nieuw Event</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $errors)
                            <li>{{$errors}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('events.store') }}" method="POST">
            @csrf
            <div class="form">
                <label for="title">Naam Event</label>
                <input type="text" id="title" name="title" placeholder="Event Naam" class="form-control">

                <label for="address">Address Event</label>
                <input type="text" id="address" name="address" placeholder="Straat Naam" class="form-control">

                <label for="zip">Postcode</label>
                <input type="text" id="zip" name="zip" placeholder="1234AB" class="form-control">

                <label for="city">Stad</label>
                <input type="text" id="city" name="city" placeholder="Stad" class="form-control">

                <label for="start_time">Begin Datum</label>
                <input type="date" id="start_time" name="start_time" placeholder="yyyy-mm-dd" class="form-control">

                <label for="start_time">End Datum</label>
                <input type="date" id="end_date" name="end_date" placeholder="yyyy-mm-dd" class="form-control">

                <label for="capacity">Capaciteit</label>
                <input type="number" min="20" id="capacity" name="capacity" placeholder="20" class="form-control" >

                <label for="service_cost">service kosten</label>
                <input type="number"  id="" name="service_cost" placeholder="3,50" class="form-control" >

                <label for="ticket_price">Prijs tickets</label>
                <input type="number" id="ticket_price" name="ticket_price" placeholder="14,99" class="form-control" >

                <label for="description">Description </label>
                    <br>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
                <br>
                <br>
                <input type="submit" class="btn btn-success" value="Verzenden">

            </div>
        </form>
    </div>
@endsection
