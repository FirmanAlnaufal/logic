<?php
/* 
  1. segitiga siku-siku dengan angka
  2. segitiga siku-siku rata kiri dengan "*"
  2. segitiga siku-siku rata kanan dengan "*"
  2. segitiga siku-siku sama sisi dengan "*"
  2. segitiga siku-siku sama sisi lancip "*"
  2. segitiga siku-siku diamond dengan "*"
*/
  ?>
<br>
<?php
for ($i=1; $i<=5; $i++) {
    for ($j=4; $j>=$i; $j--) {
        echo "  ";
    }for ($k=1; $k<=$i; $k++) {
        echo "$k";
    }echo "<br>";
}
?>

<?php
for( $a=10; $a>0; $a--){
    for($a1=10;$a1>$a;$a1--){
        echo"*";
    }
echo"<br>";
}
?>

<?php
for( $a=10;$a>0;$a--) {
	for($b=1; $b<=$a; $b++){
		echo "&nbsp ";
	}
	for($c=10;$c>$a;$c--){
		echo "*";
	}
	echo "<br/> ";
}
?>

<?php
$jumlah=10;

for($a=1; $a<=$jumlah; $a++){
    for($b=$jumlah; $b>=$a; $b-=1){
        print('&nbsp');
    }
    for($c=1; $c<=$a; $c++){
        echo '*';
    }
    echo "<br/>";
}
?>
<br>

<?php
$jumlah=10;
for($a=1; $a<=$jumlah; $a++){
    for($b=1; $b<=$a; $b++){
        echo '&nbsp';
    }
    for($c=$jumlah; $c>=$a; $c-=1){
        echo '*';
    }
    echo "<br/>";
}
?>
<br>
<?php
$jumlah=10;

for($a=1; $a<=$jumlah; $a++){
    for($b=$jumlah; $b>=$a; $b-=1){
        print('&nbsp');
    }
    for($c=1; $c<=$a; $c++){
        echo '*';
    }
    echo "<br/>";
}
for($a=1; $a<=$jumlah; $a++){
    for($b=1; $b<=$a; $b++){
        echo '&nbsp';
    }
    for($c=$jumlah; $c>=$a; $c-=1){
        echo '*';
    }
    echo "<br/>";
}
?>