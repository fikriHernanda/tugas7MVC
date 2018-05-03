<?php

class formModel{
public function menginput(){
if(isset($_POST['kirim'])){
    $nama=$_POST['nama'];
    $email= $_POST['email'];
    $order = $_POST['order'];
    $alasan = $_POST['check'];
    $pilihan= $_POST['optionsRadios']; 
    $deskripsi =$_POST['deskripsi'];
    $kurir =$_POST['Kurir']; 

}
$coba=array('nama'=>$nama,
            'email'=>$email,
            'order'=>$order,
            'check'=>$alasan,
            'optonsRadios'=>$pilihan,
            'deskripsi'=>$deskripsi,
            'kurir'=>$kurir);
return $coba;
}
public function randomThings(){
        $barang=['gayung','roda','jam tangan','flash disk','sepatu'];
        $randomElement = $barang[array_rand($barang)];
        return $randomElement;
}

}