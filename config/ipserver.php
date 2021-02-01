<?php
include "server.php";

$sql = mysql_query("select * from server_pusat");
$xadm = mysql_fetch_array($sql);
$ipserver= $xadm['XIPSekolah'];
$kodesekolah= $xadm['XServerId'];
$db_userm= $xadm['XUsername'];
$db_pasw= $xadm['XPass'];
$db_nama= $xadm['XDbName'];

$user_name = "kemdikbu_iswah"; // sesuaikan dengan akun privileges
$password = "Aikin88@WNG"; // sesuaikan dengan password privileges
$database = "kemdikbu_cbt";
$host_name = "goeru.id"; // Nama Komputer SERVER atau nama domain kalau hosting