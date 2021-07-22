@extends('layouts.indexback')
@section('main')
    <p class='text-center mt-5 directory display-4'>Here you can update Welcome Header</p>
    <section>
        <div class="container mt-5">
            <form action="/welcomeheadersection/{{$edit->id}}" method="POST">
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
                    <label for="exampleInputEmail1" class="form-label">button</label>
                    <input type="text" name="button" value='{{$edit->button}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <select class="form-select mb-3" name="img" aria-label="Default select example">
                    <option selected value="cube.png">cube.png</option>
                </select>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection