@extends('layout.layout')

@section('content')

<div>
    <div>
        @foreach ($trains as $key => $train)
            <p>
                Codice treno:{{ $train->codice_treno }}
            </p>
        @endforeach
    </div>
</div>
    
@endsection