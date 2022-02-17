@extends('base')
    @section('content')
        <div class="container">


        <h1>
            Testing app
        </h1>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus earum incidunt
                ipsum modi minima assumenda eius? Alias, odit quibusdam,
                debitis provident eligendi fugiat repudiandae molestiae quisquam dolorum fuga, quas totam!
            </p>
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-secondary">Secondary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-light">Light</button>
            <button type="button" class="btn btn-dark">Dark</button>

            <button type="button" class="btn btn-link">Link</button>

            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">Left</button>
                <button type="button" class="btn btn-primary">Middle</button>
                <button type="button" class="btn btn-primary">Right</button>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="Test">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>


        </div>

        @endsection
