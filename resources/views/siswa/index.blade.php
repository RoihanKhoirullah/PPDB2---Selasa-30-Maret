<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-9 offset">
                                    <form action="{{ route('simpan') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                            <br>

                                            <div class="form-group">
                                                    <label for="nama">NIS</label>
                                                    <input type="text" name="nis" class="form-control" id="nis" required>
                                            </div>

                                            <br>

                                            <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" name="nama" class="form-control" id="nama" required>
                                            </div>

                                            <br>
                                            
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

                                            <br>
                                            
                                            </div>
                                            <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
</body>
</html>