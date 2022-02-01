@extends('layouts.master')

@section('content')
<table class="table table-dark table-bordered table-hover">
    <thead class="thead bg-success">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description </th>
        <th scope="col">Created At</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tasks as $task)
      <tr>
        <th scope="row">{{ $task->id }}</th>
        <td>{{ $task->title }}</td>
        <td>{{ $task->description }}</td>
        <td>{{ $task->created_at }}</td>
      </tr>
      @endforeach

    </tbody>
  </table>

@endsection
