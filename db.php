<?php
	function query($sql){
		//ket noi server
		$conn=mysqli_connect("localhost","root","") or die("lỗi kết nối");
		mysqli_select_db($conn,"shop_hoa") or die("lỗi csdl");
		//thuc hiện truy vấn
		$result=mysqli_query($conn,$sql) or die("lỗi truy vấn");
		//đóng kết nối
		mysqli_close($conn);
		return $result;
	}
?>