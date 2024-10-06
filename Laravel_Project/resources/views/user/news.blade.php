@extends('frontend.app')
@section('subNavbar')
        <!--// SubHeader //-->
        <div class="ritekhana-subheader-view1">
            <span class="ritekhana-banner-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>News & Updates</h1>
                    </div>
                    <ul class="ritekhana-breadcrumb">
                        <li><a href="{{route('user.index')}}">Home</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">News & Updates</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--// SubHeader //-->
@endsection

@section('content')
    <div class="container">
        <h1>Latest News</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <a href="{{ route('news.fetch') }}" class="btn btn-primary">Fetch Latest News</a>

        <ul class="list-group mt-4">
            @foreach ($news as $article)
                <li class="list-group-item">
                    <h3>{{ $article->title }}</h3>
                    <p>{{ $article->description }}</p>
                    <a href="{{ $article->url }}" target="_blank">Read more</a>
                    <p><small>Source: {{ $article->source }} | Published on {{ $article->published_at }}</small></p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
