@extends('template_backend.home')
@section('sub-judul', 'edit User')
@section('content')

@include ('template_backend._messages')
<form action="{{ route('user.update', $user->id) }}" method="post">
  {{ method_field('PUT') }}
  @include('admin.user._form', ['buttonText' => 'update user'])
</form>

@endsection
