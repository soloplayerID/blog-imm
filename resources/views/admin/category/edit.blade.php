@extends('template_backend.home')
@section('sub-judul', 'tambah kategori')
@section('content')

@include ('template_backend._messages')
<form action="{{ route('category.update', $category->id) }}" method="post">
  {{ method_field('PUT') }}
  @include('admin.category._form', ['buttonText' => 'update Category'])
</form>

@endsection
