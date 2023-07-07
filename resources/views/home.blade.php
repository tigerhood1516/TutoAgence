@extends('base')

@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Agence lorem ipsun</h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas tempore et laudantium officia. Ullam omnis ab, reiciendis eius esse, repellendus ipsam voluptatem amet ex dolorum aut optio doloremque iure distinctio?
            </p>
        </div>
    </div>

    <div class="container">
        <h2>Nos derniers biens</h2>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col">
                    @include('property.card')
                </div>
            @endforeach
        </div>
    </div>

@endsection



