@extends('layouts.indexback')
@section('main')
    <p class='text-center mt-5 directory display-4'>Here you can update Testimonial</p>
    <section>
        <div class="container mt-5">
            <form action="/testimonial/{{$edit->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Author</label>
                    <input type="text" name="author" value='{{$edit->author}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Comment</label>
                    <input type="text" name="comment" value='{{$edit->comment}}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <select class="form-select mb-3" name="img" aria-label="Default select example">
                    <option selected>veuillez séléctionner votre genre</option>
                    <option value="Person_1.jpg">Person_1.jpg</option>
                    <option value="Person_2.jpg">Person_2.jpg</option>
                    <option value="Person_3.jpg">Person_3.jpg</option>
                </select>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
