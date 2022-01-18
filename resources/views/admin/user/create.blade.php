@extends('template_backend.home')
@section('sub-judul', 'tambah kategori')
@section('content')

@include ('template_backend._messages')
<form action="{{ route('user.store') }}" method="post">
  @include('admin.user._form', ['buttonText' => 'Create user'])
</form>

@endsection
