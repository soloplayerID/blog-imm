@extends('template_backend.home')
@section('sub-judul', 'Tag')
@section('content')

  <a href="{{ route('tag.create') }}" class="btn btn-info btn-sm">Tambah Tag</a>
  <br>
  <br>
@include ('template_backend._messages')
    <table class="table table-striped table-hover table-sm">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Tag</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tags as $result => $value)
        <tr>
          <td>{{ $result + $tags->firstitem() }}</td>
          <td>{{$value->name}}</td>
          <td>
            <a href="{{ route('tag.edit', $value->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
            <form class="form-delete" action="{{ route('tag.destroy', $value->id) }}" method="post">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('are u sure?')">Hapus</button>
            </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    {{ $tags->links() }}
@endsection
