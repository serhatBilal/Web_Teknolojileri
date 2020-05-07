<!DOCTYPE html>
<?php
if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user =="b191210309" && $pass =="12345"){
        header("Location: merhaba.php");
    }
    
}

?>
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
    

<form action ="" method="post" class="loginbox">
            <h1>GİRİŞ</h1>
            <input type="text" name="username" placeholder="Kullanıcı Adı">
            <input type="password" name="password" placeholder="Parola"><br><br>
            <input type="submit" name="submit" value="Giriş">

</form>

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