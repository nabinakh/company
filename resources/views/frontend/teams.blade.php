@extends('frontend/home')
@section('content')
<section class="iq-breadcrumb">
    <div class="iq-breadcrumb-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 align-self-center">
                    <h2 class="iq-fw-8 mb-3">Team</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Team</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-5">
                    <img src="images/breadcrumb/team.png" class="img-fluid" alt="image">
                </div>
            </div>
        </div>
    </div>
    <div class="iq-breadcrumb-img">
        <img src="{{asset('frontend/images/breadcrumb/02.png')}}" class="img-fluid breadcrumb-two" alt="image">
    </div>
</section>
<div class="main-content">
    <section>
        <div class="container">
            <div class="row">

                @foreach($teams as $team)
                <div class="col-lg-3 col-md-6">
                    <div class="team-box mb-4">
                        <div class="team-img text-center">
                            <img src="{{asset('images/'.@$team->image)}}" class="img-fluid rounded-circle" alt="image"
                                style="height: 180px; width: 180px;">
                        </div>
                        <div class="team-detail">
                            <a class="team-plus" href="javascript:void(0)"><i class="fas fa-plus"></i></a>
                            <div class="team-info">
                                <h6 class="mb-0"><a href="team-detail.html">{{$team->name}}</a></h6>
                                <span class="mb-0 text-gray iq-fw-4">
                                {{ Str::limit($team->designation, 12) }}
                                </span>
                            </div>
                        </div>
                        <div class="team-hover">
                            <p>{{$team->description}}</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{$team->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="{{$team->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="{{$team->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="{{$team->instagram}}"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection