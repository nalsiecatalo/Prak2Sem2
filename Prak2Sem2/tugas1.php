<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 - Nabila SI09</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-8">
                <!-- form -->
                <form method="POST" action="">
  <div class="form-group row">
    <label for="Nama" class="col-4 col-form-label">Nama Pelanggan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="Nama" name="Nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Barang</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="item" id="item_0" type="radio" class="custom-control-input" value="cc"> 
        <label for="item_0" class="custom-control-label">Crop Cardigan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="item" id="item_1" type="radio" class="custom-control-input" value="ot"> 
        <label for="item_1" class="custom-control-label">Oversized Tee</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="item" id="item_2" type="radio" class="custom-control-input" value="kv"> 
        <label for="item_2" class="custom-control-label">Knit Vest</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Total</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
            </div>

            <div class="col-4">
                <!-- daftar harga -->
                <ul class="list-group">
  <li class="list-group-item active" aria-current="true">Daftar Harga</li>
  <li class="list-group-item">Crop Cardigan : Rp.299,000,00</li>
  <li class="list-group-item">Oversized Tee : Rp.199,000,00</li>
  <li class="list-group-item">Knit Vest : Rp.299,000,00</li>
</ul>
            </div>
        </div>
    </div>


    <hr>

    <?php if(isset($_POST['submit']) && isset($_POST['item'])) : ?>

        Nama Pelanggan : <?= $_POST['Nama'] ?>
        <br>
        Barang : <?= $_POST['item'] ?>
        <br>
        Total : <?= $_POST['jumlah'] ?>


        <?php 
            if( $_POST['item'] == "cc" && $_POST['jumlah'] >= 1){
                $harga = 299000 * $_POST['jumlah'];
                echo 'TOTAL HARGA : ' . $harga;
            }
            elseif ( $_POST['item'] == "ot" && $_POST['jumlah'] >= 1){
                $harga = 199000 * $_POST['jumlah'];
                echo 'TOTAL HARGA : ' . $harga;
            }
            elseif ( $_POST['item'] == "kv" && $_POST['jumlah'] >= 1){
                $harga = 299000 * $_POST['jumlah'];
                echo 'TOTAL HARGA : ' . $harga;
            }
        ?>


    <?php endif ?>

    
</body>
</html>