<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 px-4 h1">BMI.ID</span>
    </div>
  </nav>

  <form method="POST" action="class_pasien.php" class="px-5 pt-3">
  <div class="form-group row p-1">
    <label for="tanggal" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" placeholder="DD/MM/YYYY" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row p-1">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukan nama pasien" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row p-1">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" placeholder="Masukan kode pasien" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row p-1">
    <label class="col-4">Gender</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="P"> 
        <label for="gender_0" class="custom-control-label">Perempuan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="L"> 
        <label for="gender_1" class="custom-control-label">Laki-laki</label>
      </div>
    </div>
  </div>
  <div class="form-group row p-1">
    <label for="berat" class="col-4 col-form-label">Berat</label> 
    <div class="col-8">
      <input id="berat" name="berat" placeholder="Berat (Kg)" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row p-1">
    <label for="tinggi" class="col-4 col-form-label">Tinggi</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi" placeholder="Tinggi (Cm)" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row p-1">
    <div class="offset-4 col-8">
      <input type="submit" class="btn btn-primary" value = "Daftar" name ="proses">
    </div>
  </div>
  </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
