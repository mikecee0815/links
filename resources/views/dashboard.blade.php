@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h3>links</h3>
                    <a class="btn btn-info my-2 -2" href="/submit">New Post</a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @foreach ($links as $link)
                            <ul class="list-group">
                                <li class = "list-group-item"> <a href="{{$link->url}}">{{$link->title}}</a></li> 
                            </ul>
                        @endforeach
                    {{-- You are logged in! --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
