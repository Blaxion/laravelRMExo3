@extends('layouts.indexback')
@section('main')
    <p class='text-center mt-5 directory display-1'>Here is you can set all your dynamique data</p>
    <div class="container mt-5">
        <p class='text-center  directory display-3'>Testimonial</p>
        <a class="btn btn-success" href="testimonial/create">CREATE</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Author</th>
                    <th scope="col">Img</th>
                    <th scope="col">Utilities</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <th scope="row">{{ $testimonial->id }}</th>
                        <td>{{ $testimonial->comment }}</td>
                        <td>{{ $testimonial->author }}</td>
                        <td><img src="{{ asset('images/' . $testimonial->img) }}"></td>
                        <td>
                            <a class="btn btn-info " href="testimonial/{{ $testimonial->id }}">SHOW</a>
                            <form action="testimonial/{{ $testimonial->id }}" method='POST'>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger ">DELETE</button>
                            </form>
                            <a class="btn btn-warning " href="testimonial/{{ $testimonial->id }}/edit">EDIT</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
