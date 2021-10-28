<?php 
	session_start();
	if(!$_SESSION['email']) {
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn không có quyền truy cập!');
			</script>
		";

		// Chuyển người dùng vào trang quản trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.location.href = './btl/admin/dang_nhap.php'
			</script>
		";
	}
;?>
<?php 
	// 1. Chuỗi kết nối đến CSDL
	include('../includes/ket_noi.php');

	// 2. Lẫy dữ liệu để cập nhật tin tức
	$id_phan_loai = $_POST["txtID"];
	$ten_phan_loai = $_POST["txtten_phan_loai"];
	$mo_ta = $_POST["txtMoTa"];

		$sql = "
				UPDATE `tbl_phan_loai` 
				SET `ten_phan_loai` = '".$ten_phan_loai."', 
				`mo_ta` = '".$mo_ta."' 
				WHERE `tbl_phan_loai`.`id_phan_loai` = '".$id_phan_loai."';
		";
	mysqli_query($ket_noi, $sql);

		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã cập nhật loại sản phẩm thành công.');
			</script>
		";

		// Chuyển người dùng vào trang quản trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.location.href = './danh_sach.php'
			</script>
		";
;?>