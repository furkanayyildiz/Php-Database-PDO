<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Veritabanı PDO kayıt işlemleri</h1>
        <hr>
        <?php 
        
        if($_GET['durum']== "ok"){
            echo "işlem başarılı";

        }elseif ($_GET["durum"] == "no"){
            echo "işlem başarısız";
        }
        
        ?>
        <form action="islem.php" method= "POST">

        <input type="text" required ="" name="bilgilerim_ad" >
        <input type="text" required ="" name="bilgilerim_soyad" >
        <input type="email" required ="" name="bilgilerim_mail" >
        <input type="text" required ="" name="bilgilerim_yas" >

        <button type= "submit" name="insertislemi">Formu Kaydet</button>
        </form>

</body>
</html>