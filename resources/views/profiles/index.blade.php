@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="data:image/jpeg;base64,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" class="w-75 rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baselinea">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <a href="/profile/{{$user->id}}/edit">Edit profile</a>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="https://www.freecodecamp.org/">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5 center">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img class="w-100" src="/storage/{{ $post->image }}">
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
