@extends('template_backend.home')
@section('sub-judul', 'post')
@section('content')

  <a href="{{ route('post.create') }}" class="btn btn-info btn-sm">Tambah post</a>
  <br>
  <br>
@include ('template_backend._messages')
    <table class="table table-striped table-hover table-sm">
      <thead>
        <tr>
          <th>No</th>
          <th>judul</th>
          <th>nama kategory</th>
          <th>tag</th>
          <th>image</th>
          <th>pembuat</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $result => $value)
        <tr>
          <td>{{ $result + $posts->firstitem() }}</td>
          <td>{{$value->judul}}</td>
          <td>{{$value->category->name}}</td>
          <td>
            @foreach ($value->tag as $tag)
              <ul>
                <h6><span class="badge badge-info">{{$tag->name}}</span></h6>
              </ul>
            @endforeach
          </td>
          <td><img src="{{ asset($value->image) }}" class="img-fluid" style="width: 100px"></td>
          <td>{{$value->user->name}}</td>
          <td>
            <a href="{{ route('post.edit', $value->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
            <form class="form-delete" action="{{ route('post.destroy', $value->id) }}" method="post">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('move post to trash?')">Arsipkan</button>
            </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    {{ $posts->links() }}
@endsection
