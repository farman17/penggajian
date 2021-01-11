<?php
mysql_connect("dbsosmedia.cjorhe5jzkni.us-east-2.rds.amazonaws.com","admin","farman17");
mysql_select_db("db_gaji");

//fungsi format rupiah 
function format_rupiah($rp) {
	$hasil = "Rp." . number_format($rp, 0, "", ".") . ",00";
	return $hasil;
}
?>
