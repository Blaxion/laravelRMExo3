@extends('layouts.indexback')
@section('main')
<p class='text-center mt-5 directory display-1'>Here you can set all your statique data</p>

<div class="container mt-5">
    <p class='text-center  directory display-3'>Welcomme header</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Sous-titre</th>
                <th scope="col">Button</th>
                <th scope="col">Logo</th>
                <th scope="col">Utilities</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <th scope="row">{{ $welcomeheadersections[0]->id }}</th>
                    <td>{{ $welcomeheadersections[0]->titre }}</td>
                    <td>{{ $welcomeheadersections[0]->sous_titre }}</td>
                    <td>{{ $welcomeheadersections[0]->button }}</td>
                    <td><img src="{{ asset('images/' . $welcomeheadersections[0]->img) }}"></td>
                    <td><a class="btn btn-warning " href="/welcomeheadersection/{{ $welcomeheadersections[0]->id }}/edit">EDIT</a></td>
                </tr>
        </tbody>
    </table>
</div>

<div class="container mt-5">
    <p class='text-center  directory display-3'>Clients</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Logo</th>
                <th scope="col">Utilities</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client )
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td><img src="{{ asset('/images/'.$client->img) }}"></td>
                    <td><a class="btn btn-warning " href="client/{{ $client->id }}/edit">EDIT</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container mt-5">
    <p class='text-center  directory display-3'>Titres et sous-titre des sections </p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Sous-titre</th>
                <th scope="col">Utilities</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($sections as $section )
            <tr>
                <th scope="row">{{ $section->id }}</th>
                <td>{{ $section->titre }}</td>
                <td>{{ $section->sous_titre }}</td>
                <td><a class="btn btn-warning " href="section/{{ $section->id }}/edit">EDIT</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container mt-5">
    <p class='text-center  directory display-3'>Coordonnées</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Sous-titre</th>
                <th scope="col">Info 1</th>
                <th scope="col">Info 2</th>
                <th scope="col">Info 3</th>
                <th scope="col">Info 4</th>
                <th scope="col">Utilities</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <th scope="row">{{ $coordonnees[0]->id }}</th>
                    <td>{{ $coordonnees[0]->titre }}</td>
                    <td>{{ $coordonnees[0]->sous_titre }}</td>
                    <td>{{ $coordonnees[0]->info1 }}</td>
                    <td>{{ $coordonnees[0]->info2 }}</td>
                    <td>{{ $coordonnees[0]->info3 }}</td>
                    <td>{{ $coordonnees[0]->info4 }}</td>
                    <td><a class="btn btn-warning " href="coordonnee/{{ $coordonnees[0]->id }}/edit">EDIT</a></td>
                </tr>
        </tbody>
    </table>
</div>
@endsection