<?php
include_once "koneksi/koneksi.php";

$id = $_GET['id'];
//   for($z=1;$z<21;$z++){
                   
$sql = $koneksi->query("select * from landingpage where id = '$id'");
$tampil = $sql->fetch_assoc();
?>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ubah</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/as.ico" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.13.4/b-2.3.6/sl-1.6.2/datatables.min.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="Editor-2.1.2/css/editor.dataTables.css"> -->
    
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.13.4/b-2.3.6/sl-1.6.2/datatables.min.js"></script>
    <!-- <script type="text/javascript" src="Editor-2.1.2/js/dataTables.editor.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script> -->

  </head>
<body>
    <div class="container pt-5">
        <a href="index.php" class="btn btn-sm btn-warning">Back</a>
        <div class="card bg-success text-white">
            <h3 class="text-center mt-3">Ubah Konten Landing Page <?= $tampil['judul'] ?></h3>
            <form action="" method="post" class="mx-3 my-3" enctype="multipart/form-data">
                <div>
                <label for="">Judul</label>
                <input type="text" class="form-control mb-2" name="judul" value="<?= $tampil['judul'] ?>">
                </div>
                <div>
                <label for="">Rincian</label>
                <input type="text" class="form-control mb-2" name="rincian" value="<?= $tampil['rincian'] ?>">
                </div>
                <div>
                <label for="">Tampilan Tombol</label>
                    <select class="form-select mb-3" name="button" id="">
                        <option value="1" <?php if($tampil['button']=="1") echo 'selected="selected"'; ?>>Tampil</option>
                        <option value="0" <?php if($tampil['button']=="0") echo 'selected="selected"'; ?>>Sembunyi</option>
                    </select>
                </div>
                <div>
                <label for="">Tulisan Tombol</label>
                <input type="text" class="form-control mb-2" name="isi_button" value="<?= $tampil['isi_button'] ?>">
                </div>
                <div>
                <label for="">Link Tombol</label>
                <input type="text" class="form-control mb-2" name="link_button" value="<?= $tampil['link_button'] ?>">
                </div>
                <div>
                <label for="">Gambar</label>
                <input type="file" name="gambar" value="<?= $tampil['gambar'] ?>">
            </div>
            <div class="text-center">
            <img src="../assets/gambar/<?= $tampil['gambar']?>  " class="img img-thumbnail text-center" width="50%" alt="">
            </div>
            <input type="submit" class="btn btn-sm btn-danger" name="ubah" value="Ubah">
            </form> 
        </div>

        <div class="card bg-primary text-white mt-5">
         <form action="" method="post" class="mx-3 my-3 " >
             <label class="h3" for="">Pixel Meta</label>
                <div>
                <textarea class="rounded" name="pixel" id="" cols="100%" rows="17"><?= $tampil['pixel']?></textarea>
                </div>
               
            <input type="submit" class="btn btn-sm btn-danger mt-3" name="update" value="Update Pixel">
            </form> 
            </div>

        <?php
            if(isset($_POST['ubah'])){
            $judul = $_POST['judul'];
            $rincian = $_POST['rincian'];
            $button = $_POST['button'];
            $isi_button = $_POST['isi_button'];
            $link_button = $_POST['link_button'];
            $sumber = $_FILES['gambar']['tmp_name'];
            $target = '../assets/gambar/';

            $nama_gambar = $_FILES['gambar']['name'];

            $pindah = move_uploaded_file($sumber, $target.$nama_gambar);

            if($pindah){

            $query = "update landingpage set
            judul = '$judul',
            rincian = '$rincian',
            button = '$button',
            isi_button = '$isi_button',
            link_button = '$link_button',
            gambar = '$nama_gambar'

            where id = '$id'
            ";

            $hasil = $koneksi->query($query);

            }else{
                $query = "update landingpage set
                judul = '$judul',
                rincian = '$rincian',
                 isi_button = '$isi_button',
            link_button = '$link_button',
                button = '$button'

                where id = '$id'
            ";

            $hasil = $koneksi->query($query);
            }

            if($hasil)

            {
                ?>
           <script type="text/javascript">
            window.location.href="/landingpage2024/dashboard";
            </script>
            <?php
            }

            else{
                ?>
                <div class="alert alert-danger" role="alert"></div>
                <?php
            } 
            }
        ?>
    
            <?php
             if(isset($_POST['update'])){
            $pixel = htmlspecialchars($_POST['pixel']);

            // $sql = $koneksi->query("");

            $hasil_update = $koneksi->query("update landingpage set 
            pixel = '$pixel'
            where id = '$id'");

            // echo $pixel;

           

             }
                ?>


        <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
</body>
</html>