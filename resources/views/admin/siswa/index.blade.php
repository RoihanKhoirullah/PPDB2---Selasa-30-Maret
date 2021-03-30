@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-9 offset">
                <button type="button" class="btn btn-primary my-2" data-toggle="modal" data-target="#addGalModal">
                    + Data
                </button>

                <!-- TAMBAH BERITA -->
                <div class="modal fade" id="addGalModal" tabindex="-1" aria-labelledby="addAboutModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="addAboutModalLabel">Tambah Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                        <form action="{{ route('simpan') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                    <label for="nama">NIS</label>
                                                    <input type="text" name="nis" class="form-control" id="nis" required>
                                            </div>
                                        
                                            <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" name="nama" class="form-control" id="nama" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <select name="jk" class="form-control form-control-sm" required>
                                                    <option>-- Jenis Kelamin --</option>
                                                    <option value="laki-laki">Laki-Laki</option>
                                                    <option value="perempuan">Perempuan</option>
                                                </select>
                                            </div>

                                            <br>
                                            
                                            <div class="form-group">
                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" required>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                    <label for="nama">Tanggal Lahir</label>
                                                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea class="form-control" name="alamat" id="alamat" rows="3" required></textarea>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                    <label for="asal_sekolah">Asal Sekolah</label>
                                                    <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" required>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <select name="kelas" class="form-control form-control-sm" required>
                                                    <option>-- Kelas --</option>
                                                    <option value="x">X</option>
                                                </select>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <select name="jurusan" class="form-control form-control-sm"  required >
                                                    <option>--  Jurusan --</option>
                                                    <option value="rpl">RPL</option>
                                                    <option value="multimedia">Multimedia</option>
                                                </select>
                                            </div>
                                            
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Smpan</button>
                                        </form>
                                </div>
                            </div>
                    </div>
                </div>
        </div>
    </div>

                  <div class="row">
                        <div class="col-md-12">
                              <div class="card">
                                    <div class="card-header card-header-primary">
                                     <h3 class="card-title ">Data CRUD</h3>
                                    </div>
                                    <div class="card-body">
                                          <div class="table-responsive">
                                                <table class="table">
                                                    
                                                      <thead class=" text-primary">
                                                            <th>No</th>
                                                            <th>NIS</th>
                                                            <th>Nama</th>
                                                            <th>Jenis Kelamin</th>
                                                            <th>Tempat Lahir</th>
                                                            <th>Tanggal Lahir</th>
                                                            <th>Alamat </th>
                                                            <th>Asal Sekolah</th>
                                                            <th>Kelas </th>
                                                            <th>Jurusan</th>
                                                            <th></th>
                                                      </thead>

                                                      <tbody>
                                                      @php
                                                      $no = 1;
                                                      @endphp
                                                      @foreach ($siswa as $item)
                                                            <tr>
                                                                  <td>{{ $no++ }}</td>
                                                                  <td>{{ $item->nis }}</td>
                                                                  <td>{{ $item->nama }}</td>
                                                                  <td>{{ $item->jk }}</td>
                                                                  <td>{{ $item->tempat_lahir }}</td>
                                                                  <td>{{ $item->tanggal_lahir }}</td>
                                                                  <td>{{ $item->alamat }}</td>
                                                                  <td>{{ $item->asal_sekolah }}</td>
                                                                  <td>{{ $item->kelas }}</td>
                                                                  <td>{{ $item->jurusan }}</td>
                                                                  <td>
                                                                        <a href="{{ route('edit', $item->id) }}"><i style="color : blue" class="material-icons">edit</i> </a> 

                                                                        <a href="{{ route('delete', $item->id) }}"><i style="color : red" class="material-icons">delete</i> </a> 

                                                                        <a href="{{ route('laporansiswa', $item->id) }}"><i style="color : grey" class="material-icons">print</i> </a>
                                                                  </td>
                                                            </tr>
                                                        @endforeach
                                                      </tbody>
                                                </table>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</body>
</html>
@endsection

<!-- Text Form -->
<!-- <div class="form-group">
      <label for="deskripsi">Deskripsi</label>
      <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required></textarea>
</div> -->