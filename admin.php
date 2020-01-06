<html>
    <hr>
<head>
</head>
<body>
<form method="POST" action="haberekle.php">
    <table border="1" align="center" width="80%">
<tr>
<td colspan="2" align="center">Haber Ekleme</td>
</tr>
<tr>
<td>Haber Başlığı</td>
<td><input type="text"  style="width: 1310px; height: 50px;" name="baslik"></td>
</tr>
<tr>
<td>Haber Detayı</td>
<td><input type="text"  style="width: 1310px;  height: 100px;" name="detay"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Kaydet"></td>
</tr>
</table>
</form>
 
</body>
 
</html>
<hr>

<html>
<head>
<table border="1" align="center" width="90%">
<tr>
<td colspan="2" align="center"> Haberler</td>
<body>
    <table border="1" align="center" width="90%" >
<tr>
<td>HaberId</td>
<td>Haber Başlığı</td>
<td>Haber Detay</td>
<td>Haber Hit</td>
<td>Sil</td>
<td>Güncelle</td>
</tr>
<?php
$baglan=mysqli_connect("localhost","id12115800_motorsports","666666","id12115800_66");
$sonuc=mysqli_query($baglan,"select * from haberler"); 
 
while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr>';
echo '<td>'.$satir['id'].'</td>';
echo '<td>'.$satir['baslik'].'</td>';
echo '<td>'.substr($satir['detay'],0,150).'</td>';
echo '<td>'.$satir['hit'].'</td>';
echo '<td> <a href="silme.php?id='.$satir['id'].'" onclick="return uyari();">Sil</a> </td>';
echo '<td> <a href="guncelle.php?id='.$satir['id'].'" >Güncelle</a> </td>';
echo '</tr>';
}
?>
 </table>
 
</body>
</html>
 
<script language="JavaScript">
function uyari() {
 
if (confirm("Bu kaydı silmek istediğinize emin misiniz?"))
   return true;
else 
   return false;
}
</script>
 
