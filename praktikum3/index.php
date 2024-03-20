<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <form action="hasil_nilai.php" method="post">
                <div class="form-group row">
                    <label for="nama asdos" class="col-4 col-form-label">Nama Asdos</label>
                    <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai kehadiran" class="col-4 col-form-label">   Nilai Kehadiran</label>
                    <div class="col-8">
                        <select id="matakuliah" name="matakuliah" class="custom-select">
                            <option value="">Pilih Mata Kuliah</option>
                            <option value="Pemrograman PHP">Pemrograman</option>
                            <option value="Strategi Digital Marketing">Digital Marketing</option>
                            <option value="Manajemen Proyek">Manajemen proyek</option>
                            <option value="Bahasa Inggris 1">Bahasa Inggris</option>
                            <option value="Basis Data 1">Basis Data</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="studi" class="col-4 col-form-label">Hasil Studi</label>
                    <div class="col-8">
                        <input id="studi" name="uts" placeholder="Hasil Studi" type="text" class="form-control" required>>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ips" class="col-4 col-form-label">nilai Ips</label>
                    <div class="col-8">
                        <input id="ips" name="ips" placeholder="Nilai Ips" type="text" class="form-control" required>>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ipk" class="col-4 col-form-label">Nilai Ipk</label>
                    <div class="col-8">
                        <input id="ipk" name="ipk" placeholder="Nilai Ipk" type="text" class="form-control" required>>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button id="submit" name="submit" type="submit"  class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
            <hr>
        </div>
    </div>
</div>
</body>
</html>