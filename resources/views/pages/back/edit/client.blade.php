@extends('layouts.indexback')
@section('main')
    <p class='text-center mt-5 directory display-4'>Here  you can update Client</p>
    <section>
        <div class="container mt-5">
            <form action="/client/{{$edit->id}}" method="POST">
                @csrf
                @method('PUT')
                <select class="form-select mb-3" name="img" aria-label="Default select example">
                    <option selected>veuillez séléctionner votre genre</option>
                    <option value="client_1.png">client_1.png</option>
                    <option value="client_2.png">client_2.png</option>
                    <option value="client_3.png">client_3.png</option>
                    <option value="client_4.png">client_4.png</option>
                    <option value="client_5.png">client_5.png</option>
                </select>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection