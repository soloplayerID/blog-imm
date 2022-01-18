@extends('template_backend.home')
@section('sub-judul', 'Kategori')
@section('content')

  <a href="{{ route('category.create') }}" class="btn btn-info btn-sm">Tambah Kategori</a>
  <br>
  <br>
@include ('template_backend._messages')
    <table class="table table-striped table-hover table-sm">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Kategori</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $result => $value)
        <tr>
          <td>{{ $result + $categories->firstitem() }}</td>
          <td>{{$value->name}}</td>
          <td>
            <a href="{{ route('category.edit', $value->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
            <form class="form-delete" action="{{ route('category.destroy', $value->id) }}" method="post">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('are u sure?')">Hapus</button>
            </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    {{ $categories->links() }}
@endsection
