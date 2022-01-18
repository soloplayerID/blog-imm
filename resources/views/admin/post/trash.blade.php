@extends('template_backend.home')
@section('sub-judul', 'arsip')
@section('content')


@include ('template_backend._messages')
    <table class="table table-striped table-hover table-sm">
      <thead>
        <tr>
          <th>No</th>
          <th>judul</th>
          <th>nama kategory</th>
          <th>tag</th>
          <th>image</th>
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
                <li>{{$tag->name}}</li>
              </ul>
            @endforeach
          </td>
          <td><img src="{{ asset($value->image) }}" class="img-fluid" style="width: 100px"></td>
          <td>
            <form class="d-inline" action="{{route('post.restore', $value->id)}}" method="post">
              @csrf
              <button type="submit" class="btn btn-outline-success btn-sm" onclick="return confirm('restore post?')">Restore</button>
            </form>
            <form class="form-delete" action="{{ route('post.deletepermanent', $value->id) }}" method="post">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('delete permanent???')">Delete Permanent</button>
            </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    {{ $posts->links() }}
@endsection
