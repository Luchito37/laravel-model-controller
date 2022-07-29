@extends('layouts.app')

@section('page_content')
    <div class="sectionMovies">
        <div class="container">
            <div class="row">
                <div class="text-center mb-5">
                    <h1>Lista Film</h1>
                </div>
                <div class="col d-flex flex-wrap justify-content-center">
                            @foreach ($films as $film)
                            <div class="card bg-warning border border-dark border-5 rounded-circle" style="width: 20rem;">
                                <div class="card-body p-5 text-white text-center">
                                    <h5 class="card-title"> Title:   {{$film->title}}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Oiginal Title:   {{$film->original_title}}</h6>
                                    <p class="card-text">Nationality: {{$film->nationality}}</p>
                                    <p  class="card-text">Date of Pubblication:   {{$film->date}}</p>
                                    <p  class="card-text">Vote:   {{$film->vote}}</p>
                                </div>
                            </div>
                            @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection