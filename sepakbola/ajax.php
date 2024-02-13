<?php
include "koneksi.php";
$tampilhasil = mysqli_fetch_array(mysqli_query($koneksi, "select * from matakuliah where id='$_GET[id]'"));
$datatampil = array('matakuliah'      =>  $tampilhasil['matakuliah'],
                    'bobot'     =>  $tampilhasil['bobot'],
                    'jenismk'           =>  $tampilhasil['jenismk'],);
 echo json_encode($datatampil);