@extends('template.template')

@section('title')
Home Ruangan
@endsection

@section('content')


<div class="row">

      <div class="col-7 ml-4">
        <div class="row">
    <div class="col-12 text-right ">
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahDosen">
  Tambah Matakuliah
</button>
    </div>
</div>
        <div class="row mt-4">
    <div class="col-12  text-center">
        <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Matakuliah</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Pemrograman Berorientasi Objek</td>
      <td><button type="button" class="btn btn-block  btn-primary" data-toggle="modal" data-target="#editDosen">
  Edit
</button></td>
      <td>
          <button type="button" class="btn btn-block  btn-danger" data-toggle="modal" data-target="#hapusDosen">
  Hapus
</button>
      </td>
    </tr>
    <tr>
      <td>1</td>
      <td>Perancangan Sistem Teknologi Informasi</td>
      <td><button type="button" class="btn btn-block  btn-primary" data-toggle="modal" data-target="#editDosen">
  Edit
</button></td>
      <td>
          <button type="button" class="btn btn-block  btn-danger" data-toggle="modal" data-target="#hapusDosen">
  Hapus
</button>
      </td>
    </tr>
  </tbody>
</table>
    </div>
</div>
    </div>

    <div class="col-4 ml-4">
        <div class="row">
 <div class="col-12 text-right ">
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahDosen">
  Tambah Ruangan
</button>
    </div>
</div>
        <div class="row mt-4">
    <div class="col-12  text-center">
        <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col" >Ruangan</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>C103</td>
      <td><button type="button" class="btn btn-block  btn-primary" data-toggle="modal" data-target="#editDosen">
  Edit
</button></td>
      <td>
          <button type="button" class="btn btn-block  btn-danger" data-toggle="modal" data-target="#hapusDosen">
  Hapus
</button>
      </td>
    </tr>
  </tbody>
</table>
    </div>
</div>
    </div>


</div>


<!-- Modal tambahDosen -->
<div class="modal fade" id="tambahDosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title text-muted" id="exampleModalLabel">Tambah Ruangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Ruangan</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control"  value="email@example.com">
    </div>
  </div>

<div class="offset-10">
    <input type="submit" class="btn btn-primary" value="Proses">
</div>
</form>
      </div>

    </div>
  </div>
</div>

<!-- Modal Edit Ruangan -->
<div class="modal fade" id="editDosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title text-muted" id="exampleModalLabel">Edit Ruangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   <form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Ruangan</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control"  value="email@example.com">
    </div>
  </div>

<div class="offset-10">
    <input type="submit" class="btn btn-primary" value="Proses">
</div>
</form>
      </div>

    </div>
  </div>
</div>


<!-- Modal Hapus Ruangan -->
<div class="modal fade" id="hapusDosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Ruangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data Ruangan Akan Dihapus
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="" method="post">
                    <button type="button" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

