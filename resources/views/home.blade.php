@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Team List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card">
                        <img src="img.jpg" alt="John" style="width:100%">
                        <h1>John Doe</h1>
                        <p class="title">CEO & Founder, Example</p>
                        <p>Harvard University</p>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <p align="right"><a href="player-list">View Team</a></p>
                    </div>
                    <div class="card">
                        <img src="img.jpg" alt="John" style="width:100%">
                        <h1>John Doe</h1>
                        <p class="title">CEO & Founder, Example</p>
                        <p>Harvard University</p>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <p align="right"><a href="player-list">View Team</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
