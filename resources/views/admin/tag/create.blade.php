@extends('template_backend.home')
@section('sub-judul', 'tambah kategori')
@section('content')

@include ('template_backend._messages')
<form action="{{ route('tag.store') }}" method="post">
  @include('admin.tag._form', ['buttonText' => 'Create tag'])
</form>

@endsection
