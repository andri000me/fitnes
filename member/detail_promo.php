<?php 
include "../function/koneksi.php";

$idpr  = $_GET['id'];

$sql = "SELECT *, id_promo as id FROM promo WHERE id_promo='$idpr'";
$query = mysqli_query($conn,$sql);
if($query == false){
  die ("Terjadi Kesalahan : ". mysqli_error($conn));
}
$dp = mysqli_fetch_assoc($query);
?>

<section class="content-header">
  <h1>
    Detail
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-tag"></i> Promo</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
    <div class="box">
    <div class="box-header">
    
    <div class="date">
      <p><a><i class="fa fa-calendar-o"></i>&nbsp &nbsp<?php echo date('l, d F Y ', strtotime($dp['tgl_promo'])); ?></a></p>
    </div><br>
    <div class="judul" align="center">
      <section class="content">
      <div class="col-md-12" >
      <div class="box">
      <h3 style="font-family: impact;"><?= $dp['judul_promo']; ?></h3> <hr>
      <img src="../upload/promo/<?php echo $dp['gambar']; ?>" width="700" height="900" >
      <br>
      <div class="isi" align="justify" style="padding:0 10px;font-size: 14pt; font-family: 'san serif';">
        <p style="word-break: break-all;"><?= $dp['isi_promo']; ?></p>
        <br><hr>
      </div>
      </div>
      </div>
      </section>
    </div>

    </div>
    </div>
    </div>
  </div>
</section><!-- /.content -->