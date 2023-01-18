@extends('layouts.admin')

@section('title')
    | Admin
@endsection

@section('content')
<div class="container mt-3">
    <h1 class="my-3">Elenco dei projects</h1>

    @dump($projects);
</div>
@endsection
