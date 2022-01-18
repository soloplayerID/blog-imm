@extends('template_backend.home')
@section('sub-judul', 'tambah kategori')
@section('content')

@include ('template_backend._messages')
<form action="{{ route('category.store') }}" method="post">
  @include('admin.category._form', ['buttonText' => 'Create Category'])
</form>

@endsection
