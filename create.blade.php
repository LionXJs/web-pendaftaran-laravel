@extends('layout.template')
@if ($errors->any())
    <div class="pt-3">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $items)
                    <li>{{$items}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@section('isian')
    <!-- START FORM -->
    <a href="{{ url('client') }}">
        <div class="button">kembali</div>
    </a>
    <form action='{{ url('client') }}' method='post'>
    @csrf
     <div class="my-3 p-3 bg-body rounded shadow-sm">
         <div class="mb-3 row">
             <label for="nama" class="col-sm-2 col-form-label">Nama</label>
             <div class="col-sm-10">
                 <input type="text" class="form-control" name='nama' id="nama">
             </div>
         </div>
         <div class="mb-3 row">
             <label for="telepon" class="col-sm-2 col-form-label">No. Telepon</label>
             <div class="col-sm-10">
                 <input type="number" class="form-control" name='telepon' id="telepon">
             </div>
         </div>
         <div class="mb-3 row">
             <label for="kerusakan" class="col-sm-2 col-form-label">Kerusakan</label>
             <div class="col-sm-10">
                 <input type="text" class="form-control" name='kerusakan' id="kerusakan">
             </div>
         </div>
         <div class="mb-3 row">
             <label for="jurusan" class="col-sm-2 col-form-label"></label>
             <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Daftar</button></div>
         </div>
       </form>
     </div>

@endsection