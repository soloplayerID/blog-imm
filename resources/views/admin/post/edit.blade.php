@extends('template_backend.home')
@section('sub-judul', 'edit post')
@section('content')

@include ('template_backend._messages')
<form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
  {{ method_field('PATCH') }}
  @include('admin.post._form', ['buttonText' => 'update post'])
</form>

@endsection
