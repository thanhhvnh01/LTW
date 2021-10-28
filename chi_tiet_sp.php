<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/tablogo.png">
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>DETAILS</title>
	<link rel="stylesheet" type="text/css" href="/btl/css/BaiTapLon.css">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<?php include 'includes/header.php'; ?>

	<?php 
		$id_sp = $_GET["id_sp"];
		$sql = "SELECT * FROM tbl_menu WHERE id_sp = $id_sp";
		$sql_query = mysqli_query($ket_noi, $sql);
		$san_pham = mysqli_fetch_array($sql_query);

	?>

	<!-- product-details-section-start -->
	<div class="product-details pages section-padding">
		<div class="container">
			<div class="row">
				<div class="single-list-view">
					<div class="col-xs-12 col-sm-5 col-md-6">
						<div class="quick-image">
							<div class="single-quick-image text-center">
								<div class="list-img">
									<div class="product-img tab-content">
										<div class="simpleLens-container tab-pane active fade in" id="sin-2">
	
											<a class="simpleLens-image" data-lens-image="/btl/img/<?php echo $san_pham['anh_minh_hoa'] ?>" href="#"><img src="/btl/img/<?php echo $san_pham['anh_minh_hoa'] ?>" alt="" class="simpleLens-big-image"></a>
										</div>
										
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-7 col-md-5">
						<form method="get">
							<input type="hidden" name="id_sp" value="<?php echo $_GET['id_sp'] ?>"/>
							<input type="hidden" name="them_gio_hang" value="<?php echo $_GET['id_sp'] ?>"/>
							<div class="quick-right">
							
								<div class="list-text">
								<h5><?php echo $san_pham['ten_sp'] ?></h5>
								<p class="mo_ta"><?php echo $san_pham['mo_ta'] ?></p>
								<h5><?php echo $san_pham['gia_ban'] ?> vnđ</h5>
									<div class="all-choose">
										
										<div class="s-shoose">
										<div class="selectsize">
											<div style="display: inline">
											SỐ LƯỢNG
										</div>
										<div style="display: inline">
											<form action="#" method="POST">
												<div class="plus-minus">
													<a class="dec qtybutton">-</a>
													<input type="text" value="1" name="so_luong_sp" class="plus-minus-box" readonly>
													<a class="inc qtybutton">+</a>
												</div>
											</form>
											<div>
										</div>
											
										</div>
									</div>
									<div class="list-btn">
										<button id="them" class="btn btn-dark">THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- single-product item end -->
		</div>
	</div>
	<!-- product-details section end -->

	<div class="phuter">
	<br>
	<?php include 'includes/footer.php'; ?>
	<div>
</body>
</html>