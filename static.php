<?php 
class Contoh {
    public static $angka = 1;

    public function Halo() {
        return "Halo " . self::$angka++ . ". <br>";
    }

}

$obj = new Contoh();
echo $obj->Halo();
echo $obj->Halo();
echo $obj->Halo();
echo "<hr>";
echo $obj->Halo();
echo $obj->Halo();
echo $obj->Halo();


?>