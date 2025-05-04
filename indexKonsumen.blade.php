@extends('layout.template')

@section('isian')
<form action="{{ url('konsumen/create') }}" method="post">
@csrf
@method('get')
<div class="container text-center">
  <h1 class="mb-4">Antrian saat ini</h1>

  <div class="card shadow-lg p-4" style="max-width: 400px; margin: auto; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); border-radius: 20px; transform: perspective(1000px) rotateX(5deg); transition: transform 0.3s;" onmouseover="this.style.transform='perspective(1000px) rotateX(0deg) translateY(-5px)';" onmouseout="this.style.transform='perspective(1000px) rotateX(5deg)';">
      <div class="card-body">
          <h2 class="display-1 fw-bold text-primary">{{ $data }}</h2>
          <p class="text-muted">Pelanggan</p>
      </div>
  </div>

  <button class="btn btn-primary mt-4" type="submit" name="submit">Daftar</button>
</div>
</form>
@endsection