<?php 
require_once "baglan.php"; 
?>


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
	if ($_GET['durum']=="ok") {
		
		echo "İşlem başarılı";

	} elseif ($_GET['durum']=="no") {

		echo "İşlem başarısız";


	}

	?>
        <form action="islem.php" method= "POST">

        <input type="text" required ="" name="bilgilerim_ad" >
        <input type="text" required ="" name="bilgilerim_soyad" >
        <input type="email" required ="" name="bilgilerim_mail" >
        <input type="text" required ="" name="bilgilerim_yas" >

        <button type= "submit" name="insertislemi">Formu Kaydet</button>
        </form>
        <br>

	    <h4>Kayıtların Listelenmesi</h4>
	    <hr>
       
    <table style= "width: 60%" border="1">
        <tr>
            <th>Sıra No</th>
            <th>ID</th>
            <th>Ad</th>
            <th>Soyad</th>
            <th>Mail</th>
            <th>Yaş</th>
            <th width = "50">İşlemler</th>
            <th width = "50">İşlemler</th>
        </tr>
        <?php 

            //Select İşlemi

            $bilgilerimsor=$db->prepare("SELECT * from bilgilerim");
            $bilgilerimsor->execute();
            $say =0;
            while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) { $say++;?>
            
        <tr>
            <td><?php echo $say?></td>
            <td><?php echo $bilgilerimcek["bilgilerim_id"]?></td>
            <td><?php echo $bilgilerimcek["bilgilerim_ad"]?></td>
            <td><?php echo $bilgilerimcek["bilgilerim_soyad"]?></td>
            <td><?php echo $bilgilerimcek["bilgilerim_mail"]?></td>
            <td><?php echo $bilgilerimcek["bilgilerim_yas"]?></td>
            <td align="center"><a href="duzenle.php?bilgilerim_id=<?php echo $bilgilerimcek["bilgilerim_id"]?>"><button>Düzenle</button></a></td>
            <td align="center"><a href="islem.php?bilgilerim_id=<?php echo $bilgilerimcek["bilgilerim_id"]?>&bilgilerimsil=ok"><button>Sil</button></a></td>
        </tr>
        <?php } ?>
    </table>


     




</body>
</html>