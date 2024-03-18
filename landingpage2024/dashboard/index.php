<?php
include_once "koneksi/koneksi.php";
//   for($z=1;$z<21;$z++){
                   
// $sql = $koneksi->query("insert into landingpage (judul, gambar, rincian) 
// values 
// ('$z', '$z', '$z')");
//   }
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
    <title>Landing Page</title>
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
    <div class="container">
        <h3>Dashboard Landing Page CV Ciwidey Food</h3>
        <!-- <img src="../assets/gambar/1.jpg" alt=""> -->
       <table class="table table-sm table-striped table-hover display table-responsive" border="0" id="myTable">
            <thead class="">
                <th>#</th>
                <th>Gambar</th>
                <th>Judul Gambar</th>
                <th style="width: 10%;">Rincian Gambar</th>
                <th>Aksi</th>
            </thead>
            <tbody>
            <?php
            $no = 1;
                $sql_data = $koneksi->query("select * from landingpage");
                
                while($data = $sql_data->fetch_assoc()){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td>
                    <img src="../assets/gambar/<?= $data['gambar'] ?>"
                    style="width: 100%;" alt="">
                <?php
                        if($data['button']==0){
                        ?>
                   <div class="bg-danger text-white text-center ">Tombol Disembunyikan</div>
                        <?php } ?>
                </td>
                <td><?= $data['judul'] ?></td>
                <td><b>Deskripsi : </b><?= $data['rincian'] ?><br>
                <b>Tulisan Tombol : </b><?php if($data['isi_button']==''){echo 'Beli Sekarang';}else{echo $data['isi_button'];} ?><br>
                <b>Link Tombol : </b><?php if($data['link_button']==''){echo 'https://wa.me/6285159759006/';}else{echo "";} ?>
            </td>
                <td>
                    <a href="ubah.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-success">Ubah</a>
                   
                </td>
            </tr>
            <?php } ?>
            </tbody>
       </table>
    </div>



    <script>
      $(document).ready( function () {
     $('#myTable').DataTable();
     } );
    </script>

  

        <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
</body>
</html>