@extends('template.template')

@section('title')
Home Dosen
@endsection

@section('content')
<div class="row">
    <div class="offset-10 ">
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahDosen">
  Tambah Dosen
</button>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12  text-center">
        <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Dosen</th>
      <th scope="col">Nama</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Alamat</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>16120008</td>
      <td>Ari Cahyono</td>
      <td>085733350494</td>
      <td>Tanjungsari Jaya Bhakti No.38</td>
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


<!-- Modal tambahDosen -->
<div class="modal fade" id="tambahDosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title text-muted" id="exampleModalLabel">Tambah Dosen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   <form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control"  value="email@example.com">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" >
    </div>
  </div>

@include('adminTu._formDosen')
<div class="offset-10">
    <input type="submit" class="btn btn-primary" value="Proses">
</div>
</form>
      </div>

    </div>
  </div>
</div>

<!-- Modal Edit Dosen -->
<div class="modal fade" id="editDosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title text-muted" id="exampleModalLabel">Edit Dosen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   <form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control"  value="email@example.com">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" >
    </div>
  </div>

@include('adminTu._formDosen')
<div class="offset-10">
    <input type="submit" class="btn btn-primary" value="Proses">
</div>
</form>
      </div>

    </div>
  </div>
</div>


<!-- Modal Hapus Dosen -->
<div class="modal fade" id="hapusDosen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Dosen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data Dosen Akan Dihapus
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

