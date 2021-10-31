<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);


$ten = $_POST['ten_kh'];
$dien_thoai = $_POST['sdt'];
$email = $_POST['email'];
$dia_chi = $_POST['dia_chi'];

$_SESSION['ten']=$ten;
$_SESSION['dien_thoai']=$dien_thoai;
$_SESSION['email']=$email;
$_SESSION['dia_chi']=$dia_chi;

// <?php
// 		if(!isset($_SESSION['dang_nhap'])) {
// 			echo 
// 			"
// 				<script type='text/javascript'>
// 					window.location.href = '/btl/dang_nhap.php'
// 				</script>
// 			";
// 		}

		// xử lý đặt hàng
		if(isset($_POST['dat_hang']) && $_POST['phuong_thuc'] == "tm") {
			$id_khach_hang = $_SESSION['dang_nhap']["id_khach_hang"];
			$phuong_thuc_tt = $_POST["phuong_thuc"];
			$ngay_dat_hang = date('YmdHis');
			$tong_tien = $_SESSION['tong_tien_gio_hang'];
			$ten_kh = $_POST["ten_kh"];
			$email = $_POST["email"];
			$sdt = $_POST["sdt"];
			$dia_chi = $_POST["dia_chi"];
			$trang_thai = 'Đặt hàng';
			$ket_noi = mysqli_connect("localhost", "root", "", "btl07_db");

			$sql_hdb = "INSERT INTO `tbl_hdb` (`id_khach_hang`, `phuong_thuc_tt`, `ngay_dat_hang`,`tong_tien`, `ten_kh`, `email`, `sdt`, `dia_chi`, `trang_thai`) 
				VALUES ('".$id_khach_hang."', '".$phuong_thuc_tt."', '".$ngay_dat_hang."', '".$tong_tien."', '".$ten_kh."', '".$email."', '".$sdt."', '".$dia_chi."', '".$trang_thai."');";
			mysqli_query($ket_noi, $sql_hdb);

			 //if ($ket_noi->query($sql_hdb) == TRUE) {
				// insert chi tiết đơn hàng
				$id_hdb = $ket_noi->insert_id;
				foreach($_SESSION['gio_hang'] as $gh) {
					$id_sp = $gh['id_sp'];
					$so_luong = $gh['so_luong_sp'];
					$gia_ban=$gh['gia_ban'];								
					$sql_chi_tiet = "INSERT INTO `tbl_chi_tiet_hdb` (`id_hdb`, `id_sp`, `so_luong`, `gia_ban`,`tong_tien`) 
						VALUES ('".$id_hdb."', '".$id_sp."', '".$so_luong."', '".$gia_ban."', '".$tong_tien."')";
					
					
					$ket_noi->query($sql_chi_tiet);
				 }

				// Sau khi đặt hàng xong xóa giỏ hàng
				unset($_SESSION['gio_hang']);
				unset($_SESSION['tong_tien_gio_hang']);

				echo 
				"
					<script type='text/javascript'>
						window.alert('Đặt hàng thành công.');
					</script>
				";

				echo 
				"
					<script type='text/javascript'>
						window.location.href = '/btl'
					</script>
				";
			//} else {
			//	echo "<script type='text/javascript'>
			//		window.alert(Đặt hàng thất bại.');
			//	</script>";
			//	// echo "Error: " . $sql . "<br>" . $ket_noi->error;
			//}
		}
	?>