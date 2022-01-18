@extends('template_backend.home')
@section('sub-judul', 'User')
@section('content')

  <a href="{{ route('user.create') }}" class="btn btn-info btn-sm">Tambah User</a>
  <br>
  <br>
@include ('template_backend._messages')
    <table class="table table-striped table-hover table-sm">
      <thead>
        <tr>
          <th>No</th>
          <th>nama</th>
          <th>instagram</th>
          <th>Email</th>
          <th>type</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $result => $value)
        <tr>
          <td>{{ $result + $users->firstitem() }}</td>
          <td>{{$value->name}}</td>
          <td>{{$value->instagram}}</td>
          <td>{{$value->email}}</td>
          <td>
            @if ($value->type_user)
              <span class="badge badge-info">administrator</span>
            @else
              <span class="badge badge-warning">Penulis</span>
            @endif
          </td>
          <td>
            <a href="{{ route('user.edit', $value->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
            <form class="form-delete" action="{{ route('user.destroy', $value->id) }}" method="post">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('move user to delete permanent?')">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    {{ $users->links() }}
@endsection
