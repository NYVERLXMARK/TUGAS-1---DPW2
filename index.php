<?php

class Hewan {
    public $Jumlah_Kaki,$Bisa_Terbang;
}

class Kucing extends Hewan 
{
    function bersuara()
    {
        return "Meoowwwngg";
    }
}

class Anjing extends Hewan 
{
    function bersuara()
    {
        return "Guk Guk Guk";
    }
}
class Elang extends Hewan 
{
    function bersuara()
    {
        return "Miiiip";
    }
}
class Angsa extends Hewan 
{
    function bersuara()
    {
        return "Kwaaaaak";
    }
}

//Kucing
$Dog = new Kucing;
$Dog->Jumlah_Kaki = 4;
$Dog->Bisa_Terbang = "Tidak Bisa Terbang";

echo "Dog adalah Kucing <br>";
echo "Punya Kaki Sebanyak : ".$Dog->Jumlah_Kaki."<br>";
echo $Dog->Bisa_Terbang."<br>";
echo "Suaranya : ".$Dog->bersuara()."<br>";

echo "<hr>";

//Anjing
$Cat = new Anjing;
$Cat->Jumlah_Kaki = 4;
$Cat->Bisa_Terbang = "Tidak Bisa Terbang";

echo "Cat adalah Anjing <br>";
echo "Punya Kaki Sebanyak : ".$Cat->Jumlah_Kaki."<br>";
echo $Cat->Bisa_Terbang."<br>";
echo "Suaranya : ".$Cat->bersuara()."<br>";

echo "<hr>";

//Elang
$Goose = new Elang;
$Goose->Jumlah_Kaki = 2;
$Goose->Bisa_Terbang = "Bisa Terbang";

echo "Goose adalah Elang <br>";
echo "Punya Kaki Sebanyak : ".$Goose->Jumlah_Kaki."<br>";
echo $Goose->Bisa_Terbang."<br>";
echo "Suaranya : ".$Goose->bersuara()."<br>";

echo "<hr>";

//Angsa
$Eagle = new Angsa;
$Eagle->Jumlah_Kaki = 2;
$Eagle->Bisa_Terbang = "Bisa Terbang";

echo "Eagle adalah Angsa <br>";
echo "Punya Kaki Sebanyak : ".$Eagle->Jumlah_Kaki."<br>";
echo $Eagle->Bisa_Terbang."<br>";
echo "Suaranya : ".$Eagle->bersuara()."<br>";

echo "<hr>";

?>