<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 - Nabila SI09</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12">
            <form method="POST" action="">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="basdat">Basis Data</option>
        <option value="statis">Statistika</option>
        <option value="uiux">UI/UX</option>
        <option value="jarkom">Jaringan Komputer</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="akhir" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="akhir" name="akhir" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">SAVE</button>
    </div>
  </div>
</form>
            </div>
        </div>
    </div>

    <br>

    <?php if(isset($_POST['submit'])) : ?>
      
        Nama Mahasiswa : <?= $_POST['nama'] ?>
        <br>
        Mata Kuliah : <?= $_POST['matkul'] ?>
        <br>
        UTS : <?= $_POST['uts'] ?>
        <br>
        UAS : <?= $_POST['uas'] ?>
        <br>
        Nilai Tugas/Praktikum : <?= $_POST['akhir'] ?>
       

        <?php 
          $nilaiakhir = ($_POST['uts'] + $_POST['uas'] + $_POST['akhir']) /3;
          if( $nilaiakhir >= 0 && $nilaiakhir <= 35){
            echo '<br> Grade = E';
            echo '<br> Predikat = Sangat Kurang';
          }
          elseif ( $nilaiakhir >= 36 && $nilaiakhir <= 55){
            echo '<br> Grade = D';
            echo '<br> Predikat = Kurang';
          }
          elseif ( $nilaiakhir >= 56 && $nilaiakhir <= 69){
            echo '<br> Grade = C';
            echo '<br> Predikat = Cukup';
          }
          elseif ( $nilaiakhir >= 70 && $nilaiakhir <= 84){
            echo '<br> Grade = B';
            echo '<br> Predikat = Bagus';
          }
          elseif ( $nilaiakhir >= 85 && $nilaiakhir <= 100){
            echo '<br> Grade = A';
            echo '<br> Predikat = Sangat Bagus';
          } 
          else { echo '<br> Grade = I';
                 echo '<br> Predikat = Empty';}

        ?>

    <?php endif ?>

</body>
</html>