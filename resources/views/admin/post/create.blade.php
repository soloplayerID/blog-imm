@extends('template_backend.home')
@section('sub-judul', 'tambah post')
@section('content')

@include ('template_backend._messages')
<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
  @include('admin.post._form', ['buttonText' => 'Create Post'])
</form>

@endsection
