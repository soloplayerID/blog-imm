@extends('template_backend.home')
@section('sub-judul', 'tambah kategori')
@section('content')

@include ('template_backend._messages')
<form action="{{ route('tag.update', $tag->id) }}" method="post">
  {{ method_field('PUT') }}
  @include('admin.tag._form', ['buttonText' => 'update Tag'])
</form>

@endsection
