@extends('layout')

@section('content')

    <!-- Begin Preloader -->
    <div class="preloader-wrapper">
        <div>
            <img src="" alt=""/>
        </div>
    </div>
    <!-- End Preloader-->
    <!-- Begin Scroll Up Button -->

    <form action="#home">
        <button id="toTop" title="Go to top">
            <i class="fas fa-angle-up"></i>
        </button>
    </form>
    <!-- End Scroll Up Button -->

    <!-- Begin Header -->
    <div class="header-wrapper" id="home">
        <!-- Begin Hero -->
        <section class="hero is-large">
            <!-- Begin Mobile Nav -->
            <nav class="navbar is-transparent is-hidden-desktop">
                <!-- Begin Burger Menu -->
                <div class="navbar-brand">
                    <div class="navbar-burger burger black border border-white rounded-circle bg-white" data-target="mobile-nav">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <!-- End Burger Menu -->
                <div id="mobile-nav" class="navbar-menu">
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <a class="navbar-item" href="/">
                                Home
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End Mobile Nav -->
            <!-- Begin Hero Content-->
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="subtitle">Discover</h1>
                    <h2 class="title">Autonomous Sailing</h2>
                </div>
            </div>
            <!-- End Hero Content-->
            <!-- Begin Hero Menu -->
            <div class="hero-foot ">
                <div class="hero-foot--wrapper">
                    <div class="columns">
                        <div class="column is-12 hero-menu-desktop has-text-centered">
                            <ul>
                                <li class="is-active">
                                    <a href="/">Home</a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero Menu -->
        </section>

        <div class="main-content">
            <!-- Begin About The Ship Section -->
            <div class="section-light about-me" id="about-me">
                <div class="container">
                    <div class="column is-12 about-me">
                        <h1 class="title has-text-centered section-title">{{$blog->title}}</h1>
                            <form action="{{ url()->previous() }}/#blogs">
                                <button class="button is-black">Back</button>
                            </form>
                    </div>
                    <div class="columns is-multiline">
                        <div
                            class="column is-6 has-vertically-aligned-content"
                            data-aos="fade-right">
                            <p class="is-larger">
                                &emsp;&emsp;<strong>{{$blog->description}}</strong>
                            </p>
                            <br/>
                            <p>{{$blog->blog}}</p>
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
            </div>


@endsection
