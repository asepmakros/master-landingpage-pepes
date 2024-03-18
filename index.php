<?php
include_once "landingpage2024/dashboard/koneksi/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ciwidey Food - Jagonya Masakan Legendaris Nusantara</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="landingpage2024/assets/as.ico" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="landingpage2024/css/styles.css" rel="stylesheet" />

      <!-- <?php
            $sql_pixel = $koneksi->query("select * from landingpage");
            $data_pixel = $sql_pixel->fetch_assoc();
            echo $data_pixel['pixel'];
      ?> -->


  </head>
  <body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-white shadow sticky-sm-top opacity-75">
      <div class="container px-lg-5">
        <a href="https://wa.me/6285159759006/">
        <img src="landingpage2024/assets/logo.png" width="50px" alt="" />
        </a>
        <!-- <a class="navbar-brand" href="#!">Start Bootstrap</a> -->
        <button
          class="navbar-toggler bg-dark"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link active text-black fw-bold"
                aria-current="page"
                href="#"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-black fw-bold" href="#page_17.jpg">Gabung</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black fw-bold" href="#page_12.jpg">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black fw-bold" href="#page_20.jpg">Hubungi Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- <div class="container"> -->
    <!-- Body -->
      <?php
      $no = 1;
          $sql_data = $koneksi->query("select * from landingpage");
          
          while($data = $sql_data->fetch_assoc()){
      ?>
    <!-- Content -->
    <div id="page_<?= $data['gambar'] ?>">
      <a href="https://wa.me/6285159759006/">
      <img
        src="landingpage2024/assets/gambar/<?= $data['gambar'] ?>"
        class="img-fluid"
        style="width: 100%; height: auto"
        alt="<?= $data['gambar'] ?>"
      />
      </a>
    </div>

    <?php
    if($data['button']==1){
    ?>
    <!-- Tombol -->
     <?php
    if($data['isi_button']==''){
    ?>
    <div class="text-center">
      <a class="btn btn-danger btn-sm btn-lg shadow"  href="https://wa.me/6285159759006/">
      <img src="landingpage2024/assets/1.ico" style="max-width: 25%;" alt="">  
      Beli Sekarang</a>
    </div>

    <?php 
    }else{
      ?>
      <div class="text-center">
      <a class="btn btn-danger btn-sm btn-lg shadow"  href="<?=$data['link_button']?>">
      <img src="landingpage2024/assets/1.ico" style="max-width: 25%;" alt="">  
       <?=$data['isi_button']?></a>
    </div>
      <?php
    } ?>
    <!-- Tombol -->

    <?php } ?>
    <!-- Content -->
    <?php
    }
    ?>

<!-- </div> -->
        <!-- Body -->


    <footer class="py-5 bg-success">
      <div class="container">
        <div class="input-group">
        <p class="col-4 text-white">Kantor Pusat : CV Ciwidey Food Office
Perumahan Puri indah Ciwidey, blok Puri Ayu No 30, Pasirjambu-Ciwidey, Kabupaten Bandung, Jawa Barat</p>
        <p class="col-4 text-white"></p>
        <p class="col-4 text-white text-center" >
          <img style="max-width: 20%;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOoAAADXCAMAAAAjrj0PAAAA81BMVEX///8AQoIAplEAQIEAO34ApEsAoEAApU4APX8AKncALHgAM3sANXwALnluhaoAMXoAOH0AoURNbJrg8uciT4lXcp0AJ3bd4+tuwY1FtHFmv4j09vgAnjvr7/S4w9Tk6e/EzduTpL6V0KvW7d/N1eF7xpd3ja+El7Yiq1zA482isMeJnLmuus19krItV46i1rVifKRAY5UAHXLw+fROt3iu276338Uxr2bZ7uHK59ROt3eFyp8ACm41XJHV2+Ueq1sAFHAAA2z59/8Ami6RnMC8ztW11Mqcz7QnTY9AW5hQaKBpiamHo7eezbqlu8m41M7M3d5SoN10AAAR0klEQVR4nO1de1/iSBZNyBNIIBEF5Q0qKqJig9KOI92z89jZ2ef3/zRbt16pCgkExQ7Jj/PHLg/TU4equvfcW7eqFOWAAw444PMwmKTdgh+EzuOXbtpt+EE48aoXabfhB+HRdpdpt+EH4Vgr9dJuw+fjBf6nrBVbaTfkszFbXKL/bRVVN+2WfDaeTP8B/V/PVbW0m/K5mM3Ngv+MXlxUtbe0G/OpuPGNQsGHudot6ydpt+YzcdouIJg19HLs6KO0m/N5OC8YBUx1ht5ced4g7QZ9Gl7bVoFQhXdTvZxXCVz75hOiBasA79/saj/lJn0ShqxLEdUz+MBT3UbajfocsC5FME4VrCBKORVLhkD1Fb1vlLRq2m3aPXodRepV/wm971e147QbtnN0v8OcNAWqoCCQW82dgpiWStCrAlWsIJBbvUq7abtF39PVIqI6E6i24YsT3Rmn3bidYlTXVBXCUpGqAd8ca+V+yo3bJRrHjopQkqkSt1rMlVsdQJcCVfS6FlDFbhVFq8W027czdN6qKgH4z3OB6lDBvkZNu4W7wqRoU6aqh96+BFRxYD527Jz4mtaJqzGmuPtuAglhnqP3Iz0nvqZf1lUOrIqeBaoQrT7aTi5CuEpRFWA/oo+eAqrY13hqHlL7S9VTJaowKR84VexrOiUVa6iM402XmKr6FH34yiMbA5LAF1VsrLKOuhqiCtmyS04VJ4GRAT5Ku50fR78aourdok+bAVWIa/JhgG+9MFVIDM55ugUb4LdcGOB7LUQVk1pwqj78kavlYMGxVQwxVcuwNi6L/V4pDwq4Ww5TxQ6U60JsgLvlPGRbKnqYKgRrs7ZkgG89vZJ2Qz+OsFFSsVYIYjgTDPCRnYMUxNJdoQpJiHMultpggJ08yMLBaq/C2ngQ2FjoXa+o1rOf7l5xNSSw4WrfmKN33TzE5Z2wKqSBzZCJJZyCyIVVmjgrVLHa5xLYv1FyYpWO7BWqWOzOGVWc7q7mQCu1VsevijuQ60KIyxt5yBauSiWqCw3RKk0cO/u1LScrUimkC7FVykMEtyr1wa32BLGErdKxlv3SgKjxi6flC3OroJXQD1LMfF4pwv4iZ6MECgIXfORhETly/EoKwmgqWEBkvjYrQj9QBXFqCBHcm13OfCH7W9T4xUm0M1abBWsYOZiqvQj9QDNLXCsp+ViDi4jfVOJW2ToyzivlYapqK/EbAOrzv5qCgMjBVO2v5h8AEJizZTjIdiOZnPmpOo0QhTQwZ74GBEQOvGqkU5V9jbVQclGvNI5yqtTX0BAO1xbmQACrkUaJ+Boz0PqdolZKu6kfRIxRUiHdwOIamKqT7G9OiFT6KkkC08wonqqVzNfbRSslZIBh19DQD6aqoxYzvhFuFOlpkAGG0UqXkWEJY+lm3dW0StFGiRjgbxYXwAMPf5JhRMtflebQyCqc9ZMCyf+sp0WjfapKFhxpeSHEqp1i1gtbYuSDSopGabYFkt2TzG8Os2NmqorzvXQRA5bgjrK+jWgSlSgkVulOYbIQCgOQTs74hpMYTahKshBUYbea8RW4cWynilYJXM1Uz/j41WM7FcflxCpZsFjjZnz8DmLNL8kBk2AVdkz1sz5+q/GdioPwgsWimkrGx+9dnFBCqHZZthBHNa5WTru1H0FcSIMB+TISwUGusFvOtn44iglpADi1TWqeQSpN9Uzr33508owAGyEsIGAFrlXMdlY/Xj2oRECQ4kKIyiflTJ8YcBvvaBBKDbaIDMtSR3Y9w6nuxjqbRHZN4alqfYPiLexls4r7mNwZnaqQ7cZTFezv2KlmeKlmEC9+AWU+VcH+HtsZFoUbhi9eg8Ne1bpWlGUJB3QZxfE660u9Kg7L/SGkFIvZ3Zk7WqMI8VQFaYQFMOhfN8MFaN114gEAVggvYcBa+aSc3fXjXlzmlwOWMPCmP4jf3uzsZgqP1/oZlcaqP+HxiyxYMbtK6WjDRKXbw8DVwC76kZeeUup8bJfA3XqPCgBViF0NLNWUsJxICR/aUjkobWSKl+Ag1wKicOwUUwzfph/4mScbtAMevyAYfOpUVT1N+dv98u6MQDcBU9W9oFENcqp91+3vsOnbolV33ynUEjHFWSSQSlAr+qinu6Z6ZLvv6tdETEkCwiBGqVFM+Wi7iaNW35GVHSdiqkIWFA74AKNU8eydt34rwD4RZ2s7fLdJDobGr/+AYvJy2oUeUJPiHW/n2Y82+9Ng/PpkpebKS10T4j0F9jabKxvqmkzoyvi9MXH6rOXuQfUO6aF64jIMdnxSAjgKqWtp15SB43wih4SgSxDOfaJCot5bwsGrUv1gkr1S5dRnqgLhBmmYnaRjr+qbQhkBpSVZazTPlXFZ/3wmm/HIWu+oG+LmsbcxkhGAq7DOLLwm5VT34qiL4AgSzb1fQ3ZsJx+7+JdD8VsNxW/mDayo/zg+6yAsQ2hVdRwZ2C1HJSexOSKA2PTVwPLBcfckzyLVG2lO/WgcslD9K9Vds/4fDXzmjoHPQBtU71MhFoHQkovtlLyT20n/Yrm86I5H98Wqty1PleTPnn1YfWu59b05EyGijkH3yuWq61bLztbdSQHiCBkl/0m5qu5RmfOaQob3AkpDkVFCndqp79Pa25rylPcC6CGljzq14u7V3gt3192Ki51N6NRGPXWdL2Hn3QqZlqEP5vexvieOhmEbGZQAWClZsPjWre/b0nF82ee7ALkV5GnMF0Wt791+hA1rh1sCpue1ZZ2hkG//ivTX1uNszXSAY/J2rVPfE/ErYV2V1ZbAVywtLONUOfmyNzpJwNraue0AMfmLWTCV/vsz6p+Kq505HJAPZ5b/oOgp50NjEb11entATcCLiYK30fd9HL6AXVkm6NSF1X5Zft/fapaoE3W2B2R/b0yjqah7vO+tFT799V2ATr22TOXq+z7X7UxidtpuA28EeUL/afnLHqRD1+DjzhX7VMs4U/Q9P+S49WEp7NxCSNOeVfa+lnBjydUmeLAlwX/o/7L/VeuVj4VzsF7R9M/+9n2/JyrB2uL0TYA49bxtzu5TrNpJjk1Fr2tRRPLouv382z7GMxEYv9/jQEZp2G72v2flgNiTd09XpB5m7UInAyaJ4b3TFRakzto1by9W3ZKhV3wXV7BJT78+/bVXad9NSFaVFEb9Ag3f09/2aNUiCW7fIfxB/J4tJpmrWN/eNGk2WN/f/0y75dtjY/12GPW+Uvv1j4w4VAmtLddUPRSQ+3//MysOVUJjKzMM22nml//IJFNF6W9jhusN5WH+1x6to26HJGXcFNWBcr44yizTRMX5BPqRMltMMzp6Ca6SuVdNbyln2WaKAvVECZj6Umn+M+2mfhjTBFxLY+U1+0wR140rOU5FGf4r7WbuBJu46o/Kv/+TdiN3hJO1XG1V+eP3tJu4M6ybr5rT+u/eFTt8AJV4n1Pq/S/jTiaEUUxmTSteZFghReM2Oum/PxWhO0TUdimtmEemUekmvZqdHOh2uAjtoC+d5MseiehpwuKr5+xZkeRu0bpnuTWtnu0z6xJgShxs+Tif9kgCbIjzqllYO/04+sX6/hYj7RiNPCneAw444IADDjjggANygelxgLe7fvjrnka/k+odR+yB6SAqPGuwh6QodfqztAfs5zrCF6m+pWZdE5ydDs+jGjt7vjy7vl40V76tLc4AD/yDIX6/mIl/dKJrHLbnqiGy4zL9ri5+WvHoA7pXrY5WSu4HDn1IKmeu6EXxqD6cP7Wl0u6aaVEYvolvJ5JwPm/7Bv7WMAtD6asXk3zOPyB/CGfJCVTlyhQttP2On3dRFn+DipBK0fR6eKmU3z1fDT1UF0rsIqkWBPjms/SvNttG8KXlGzfCd/SaFJ99Ri8O9KV/4SRchFMUA+ngGm7pmP+KXLLvOVIusMOTwNIxsPCQsA13I9VCoS10bM0wCqFvL4NvX+k1KXP6nl5nakh9v0JVupBNuAZWPCknRBWNBXHKBudGaHb4oeAPE1AttPnkO29bhTD8OX+yKdyJqJBDQwr03McVqnDQAW2/eCSZsGnIFdiEqarS3ZLCjWjiOfL4IY0fghtP1TJNnzbdpHZlFv4RCFfOhN31Tic47WRynWmIavWi0VjS1X3xRH9hPUK8U5FS9RxelyWcuC3ePS/ejkUe0tzeBqrWvFY7PzXFpivXvE8NH1kc3utsLvr8a/mtv0q1hDuFHKUk3LPXF5YPxePvSau98eROZYtupT77Ury7W7zzjP4+mtdZTxVfAk1OkyV3X/Mr41DTC5dPT8O5achUgk7HhumZU23HUW3g/7xw0Kc0UIXzl8nnuH+69DiMoNHSNaPCTXbsH7O1VgKqtCPJ5GPX68JBupjanF3NSnr9K6eKDdMZ73bzawzVZTU06Kh9ocM18IqUKubeo51YZx6HLGDQ1L5wwhn/3ezjJFTpLS/nvIcLlhEoglfGFb+74d0Ivw0zSgXB+whUcTuJPSlx+3NBlkn1WzywteC4HJEqG7Ds0Hh6HBN9SJjDwRDR75NTBRFAjU5b7KI5vRsQcxkGVNHsfg3ckv8gPEKoOuPJZHyM26IHWu2KtPaEOsrgaBWJKt2yyzqdXF6oT8lswKc4h6mq3uNmquTyP9A75Gh6fONWgJloty4Fn2so4hvxGepsHATcYrscuA2y/QCNQf4ikiolRzUGHbiT4MUqVdU5UarrqT4E18S9mPylAOJKiTv5SXC6RlOkOheeCEkI8TTGBikZRC6Tdi9vl0yVSAZquJe8M+kvcCI/xLhWtDiqyNl8fWlSQwPXbFHVZygS6Kdwjxy90ojRE17DkVwxVKVbcgZ8il6EBmMUVdrqYIrSScvFF6VK/3v0zQYJgXuF+p2FTPWFylx4HSkw+E8V06uOIHXvgzlYxi/5yfCRvUp81HEw1snxPVzyk4ds6TzvDcKQWJ2nSKo3AVX2nNi39LUphHFsrpbLZK463Cp1iOqB07VpM7nHjZ+rPWLBsDudSnOYPlSSzi7fQNXA9KgiEDtI4X39LehgS5iy7LUvhHHMAne7Y7Ly67AxTDqLiKQuHow8/oy3wPQh7Dm7xC070kNoErzpCalaPu4TdmenFHxSnYBHOAvhXgKfw16LYZzoV4m4Zz6FeFn9Tmm1Wh0y79hglP0qXS/Go/uNPHQFD/XIFyxO4FSF3RtrqRoFanPpFJa0O+WPwzTqSM0ZdzrG60z4XqYqqCXqU9jl6noJgZZcMaslUu1QSYVjGzroyUNUHrM4IaDaYrZpDVXLD+JRKhckPcDu3AU1xa4aDnRSu0ZvqhXDOImqK0yublSloC5RxRqYnsxIxuwkopSSxQkBVaXDIqJoC+z7prkYBgblhl37zbnOFjQWv4Z37K53/qPAsPZXhoJIVfKEkmpnoPEnaTWa4Fc8siFjIfJQDBonCFSVnhsOEgKq1k83N6IEDLqwYM5J/uzBZx/gqehz2kxtnPNnrDDVMopXL2jFJ7WzkQf40VCAukgniFc1F38RWW9HJaNIVVkWYyUEFYYibtjANMzCvLkwmfkhDogKRxzU4HgIf0xNsOBtVrMQhE4/svqTxp+rWQgXd2rkoFft+1WqykV9C6rKaWBbrSAyhymp8BAOT0vsmHA8c0oncCAnV3JLKqkEjLlynMSfK1S9o5ifgDzUWaVKKvOSUlUW4SQaZko8CRUTxNgi7UDieWqWhTBuhSrtA9pot85AD3seR1HyaHxHRJVaWvNQEOnADqTEVJXrVa5tGqjTyIDE7egNf4E/Dcx2mKpG+m3JpT6DGH+GqLpU0oelMkvhEEJhqsq4uAVVpWnKOUODS4pLqf98i8QFVGMJmXOZquZ5xFySC/rE+zgIeQ0LDJGqXeZ7xWluSmg+Ia/hDMUKVeXW3YKq8mz5AVmj3eT2Zk41ILHOwzZRDdQYC//akaNzeFV+A8axDQsR0oHwKl6bwKnTSpk+4JTrb0EuVbP5XzCQFQ+coZjWXYSfxZWA0RfpfMZa20DwY6giAXjW9n34C9O4FILXgoFBc8CzX8V/zDCCMG4wGo0qFFdJqzvH9KG7QT955WuvgSF9JhdwzU4vL09Pm/JyjITZy8Pwdfgsu93mKQb7hV6iPz7ggAMygP8DUJtbsa76c1AAAAAASUVORK5CYII=" alt="">
          <img style="max-width: 20%;" src="data:image/png;base64,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" alt="">
        </p>
        </div>
        <p class="m-0 text-center text-white">
          Copyright &copy; Ciwidey Food 2024
        </p>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="landingpage2024/js/scripts.js"></script>
  </body>
</html>
