@extends('layouts.indexback')
@section('main')
    <p class='text-center mt-5 directory display-4'>Here you can update Coordonnee</p>
    <section>
        <div class="container mt-5">
            <form action="/coordonnee/{{$edit->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titre</label>
                    <input type="text" name="titre" value='{{$edit->titre}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sous-titre</label>
                    <input type="text" name="sous_titre" value='{{$edit->sous_titre}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Info 1</label>
                    <input type="text" name="info1" value='{{$edit->info1}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Info 2</label>
                    <input type="text" name="info2" value='{{$edit->info2}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Info 3</label>
                    <input type="text" name="info3" value='{{$edit->info3}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Info 4</label>
                    <input type="text" name="info4" value='{{$edit->info4}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection