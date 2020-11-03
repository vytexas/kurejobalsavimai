@extends('layouts.app')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Balsavimo Pavadinimas</th>
            <th scope="col">Balsavimo Klausimas</th>
            <th scope="col">Galimi Atsakymai/th>
            <th scope="col">Balsai</th>
            <th scope="col">Sukūrimo Data</th>
            <th scope="col">Paskutinis Atnaujinimas</th>
        </tr>
        </thead>
        <tbody>
        @foreach($myStrawpolls as $data)
            <tr>
                <th scope="row">{{ $data->name }}</th>
                <td>{{ $data->question }}</td>
                <td>{{ $data->answers }}</td>
                <td>{{ $data->votes }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->updated_at }}</td>
            </tr>
        @endforeach
        </tbody>

@endsection
