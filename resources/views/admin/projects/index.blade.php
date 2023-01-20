@extends('layouts.admin')

@section('title')
    | Admin
@endsection

@section('content')
<div class="container mt-3">
    <h1 class="my-3">Elenco dei projects</h1>




    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col"><a href="{{route('admin.projects.orderby', ['id', $direction])}}">ID</a></th>
            <th scope="col"><a href="{{route('admin.projects.orderby', ['name', $direction])}}">Name</a></th>
            <th scope="col"><a href="{{route('admin.projects.orderby', ['client_name', $direction])}}">ID</a></th>
            <th scope="col"><a href="{{route('admin.projects.orderby', ['summary', $direction])}}">Summary</a></th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($projects as $project)
          <tr>
            <td>{{$project->id}}</td>
            <td>{{$project->name}}</td>
            <td>{{$project->client_name}}</td>
            <td>{{$project->summary}}</td>
            <td>
                <a href="{{route('admin.projects.show', $project)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
      </table>

      <div>
        {{$projects->links()}}
      </div>



</div>
@endsection
