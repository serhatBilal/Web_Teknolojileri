<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serhat BİLAL</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-----------------Header--------------------->

    <section id="header">
        <nav class="navbar navbar-light">
            <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="hakkimda.html">Hakkımda </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ozgecmisim.html">Özgeçmişim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sehrim.html">Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.html">İletişim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Giriş yap</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <center>
<div class="container" >
<?php
echo "Ad: "; echo $_POST['Ad']; echo('<br>');
echo "Soyad: "; echo $_POST['Soyad']; echo('<br>');
echo "E-mail: "; echo $_POST['E-mail']; echo('<br>');
echo "Adres: "; echo $_POST['Adres']; echo('<br>');
echo "İl: "; echo $_POST['Il']; echo('<br>');
echo "Cinsiyet: "; echo $_POST['Cinsiyet']; echo('<br>');
echo "Öğrenim Durumu: "; echo $_POST['Ogrenim']; echo('<br>');
echo "Seçimler: "; echo $_POST['Kosul']; echo('<br>');
?>
</div>
</center>

  <!------------------footer-------------------->
  <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="images/logo.png" class="footer-logo">
                    <p>Bu web sitesi Web Teknolojileri dersi projesi olarak verilmiştir...</p>

                </div>
          
            </div>

        </div>


    </section>
</body>

</html>