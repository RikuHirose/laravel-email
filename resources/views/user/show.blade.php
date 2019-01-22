@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><a href="{{ route('user.show', $user->id) }}">{{ $user->id }}</a></th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>
            <!-- <form action="/send" method="post">
            {{ csrf_field() }}

            <input type="hidden" name="email" value="{{ $user->email }}">

            <input type="submit" value="お茶する" class="btn btn-success">
          </form> -->

          <contact
            :user="{{json_encode($user)}}"
          >
          </contact>
      </td>
    </tr>
  </tbody>
</table>

@endsection
