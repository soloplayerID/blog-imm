@extends('template_backend.home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <hr>
                    to do:
                    <ul>
                      <li>Membuat analis pengunjung google firebase & menampilkannya di dashboard</li>
                      <li>merapikan tombol yang belum bisa di click</li>
                      <li>membuat profile setiap user</li>
                      <li>....</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
