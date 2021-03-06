@extends('layouts.indexback')
@section('main')
    <p class='text-center mt-5 directory display-4'>Here is testimonial's preview</p>
    <section>
        <div class="container mt-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('images/'.$show->img)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">{{$show->comment}}</p>
                            <p class="card-text"><small class="text-muted">{{$show->author}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
