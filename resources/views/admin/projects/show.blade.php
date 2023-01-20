@extends('layouts.admin')

@section('title')
    | {{$project->name}}
@endsection

@section('content')
<div class="container mt-3">

    <h1 class="my-3">{{$project->name}}</h1>

    <h3>{{$project->client_name}}</h3>

    <img src="{{$project->cover_image}}" alt="{{$project->name}}">

    <p>{!!$project->summary!!}</p>

    <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna all'elenco</a>


</div>
@endsection
