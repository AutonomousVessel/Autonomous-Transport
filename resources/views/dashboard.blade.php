@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                <h1 class="font-weight-bolder text-dark is-size-1">Dashboard</h1>
            </div>
            @foreach($blogs as $blog)
                <div class="main-content">
                    <!-- Begin About The Ship Section -->
                    <div class="section-light about-me" id="about-me">
                    
                        <div class="container">
                            <div class="column is-12 about-me">
                                <h1 class="title has-text-centered section-title">{{$blog->title}}</h1>
                            </div>
                            <div class="columns is-multiline is-wrapped">
                                <div
                                    class="column is-6 has-vertically-aligned-content"
                                    data-aos="fade-right">
                                    <p class="is-larger">
                                        &emsp;&emsp;<strong class="is-wrapped">{{$blog->description}}</strong>
                                    </p>
                                    <br/>
                                    <p class="is-wrapped">{{$blog->blog}}</p>
                                    <br/>
                                </div>
                                <div class="column is-6 right-image " data-aos="fade-left">
                                    <img
                                        class="is-rounded"
                                        src="{{$blog->image}}"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
            @endforeach
        </div>
    </div>
    <div class="buttons text-white justify-content-center mt-6 mb-6">
        <a href="/blogs/create">
            <button class="button is-success">
                Create new Blog
            </button>
        </a>
    </div>
</div>
@endsection
