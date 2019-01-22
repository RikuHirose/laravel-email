@extends('layouts.app')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
        <tr>
          <th scope="row"><a href="{{ route('user.show', $user->id) }}">{{ $user->id }}</a></th>
          <td>{{ $user->name }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection
