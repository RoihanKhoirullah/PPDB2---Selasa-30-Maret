@extends('layouts.admin')
@section('content')
  <!-- Table -->
  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tentang</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
 <!-- CREATE -->
 <div class="card-body">
                        <form action="{{ route('update', $siswa->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                              <div class="form-group">

                                            <div class="form-group">
                                                    <label for="nama">NIS</label>
                                                    <input type="text" name="nis" class="form-control" id="nis" value="{{ $siswa->nis}}">
                                            </div>
                                        
                                            <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $siswa->nama}}">
                                            </div>
                                            
                                            <div class="form-group">
                                            <select name="jk" class="form-control form-control-sm"  required >{{ $siswa->jk }}
                                                    <option>-- Jenis Kelamin --</option>
                                                    <option value="laki-laki">Laki-Laki</option>
                                                    <option value="perempuan">Perempuan</option>
                                                </select>
                                            </div>

                                            <br>
                                            
                                            <div class="form-group">
                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="{{ $siswa->tempat_lahir}}">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                    <label for="nama">Tanggal Lahir</label>
                                                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ $siswa->tanggal_lahir}}">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea class="form-control" name="alamat" id="alamat" rows="3" required>{{ $siswa->alamat }}</textarea>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                    <label for="asal_sekolah">Asal Sekolah</label>
                                                    <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" value="{{ $siswa->asal_sekolah}}">
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <select name="kelas" class="form-control form-control-sm" required>{{ $siswa->kelas }}
                                                    <option>-- Kelas --</option>
                                                    <option value="x">X</option>
                                                </select>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                <select name="jurusan" class="form-control form-control-sm" required>{{ $siswa->jurusan }}
                                                    <option>-- Jurusan --</option>
                                                    <option value="rpl">RPL</option>
                                                    <option value="multimedia">Multimedia</option>
                                                </select>
                                            </div>

                              <div class="form-group">
                                    <button type="submit" class="btn btn-success">Update Data</button>
                              </div>
                        </form>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </div>
  </div>
  @endsection