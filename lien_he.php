<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/tablogo.png">
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Liên hệ</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/btl/css/BaiTapLon.css">
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<?php include 'includes/header.php'; ?>
    
    <!-- contact content section start -->
    <div class="pages contact-page section-padding">
        <div class="content-for-layout">
        <section id="content" class="container-body body-content--contact body-height-calc">
            <div class="page-wrap contact-wrap">
            <p class="lienhe"> Cho chúng mình biết ý kiến của các bạn về dịch vụ và đồ ăn của chúng mình nha !! </p>
                <div id="lienhe" class="col-sm-12 col-md-3"> 
                    
                        
                    </div>
                    <form action="./lien_he_thuc_hien.php" enctype="multipart/form-data" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="__session_id" value="b09774f4-f010-458b-810f-c02063c9bbb1">
                        <input type="hidden" name="_csrf_token" value="ZQMcAD8GDxMaZhAhUBkfAiQ5fScNPws6T5LsxuYvc_tNivMQVu8EysDx">
                        <input type="hidden" name="utf8" value="✓">
          
            
                        <div class="row contact-form">
                        <div id="lienhe" class="col-sm-12 col-md-6"> 
                            <div class="is-vertical-flex form-group">
                            <p class="lienhe2">HỌ VÀ TÊN</p>
                                <input type="text" class="form-control" name="first_name" id="customerName" autocomplete="off">
                            </div>
                            <div class="is-vertical-flex form-group">
                            <p class="lienhe2">EMAIL ADDRESS</p>
                                <input type="email" class="form-control" name="email" id="customerEmail" autocomplete="off">
                            </div>
                            <div class="is-vertical-flex form-group">
                            <p class="lienhe2">SỐ ĐIỆN THOẠI</p>
                                <input type="number" class="form-control" name="phone_number" id="customerPhone" autocomplete="off">
                            </div>
                            <div class="is-vertical-flex form-group">
                            <p class="lienhe2">NỘI DUNG</p>
                                <textarea class="form-control" name="description" id="customerFeedbackContent" rows="6"></textarea>
                            </div>
                            
                                <input type="submit" class="btn default-btn btn-send" value="GỬI" id="btn-submit">
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
        <div class="container text-center">
            
            <div class="row">
                <div class="col-sm-10 col-text-center">
                    <div class="contact-details">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single-contact">
                                    <i class="mdi mdi-map-marker"></i>
                                    <p>Ngõ 62, Nguyễn Chí Thanh, Hà Nội</p>
                                    
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-contact">
                                    <i class="mdi mdi-phone"></i>
                                    <p>(+84) 356737790</p>
                                    
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-contact">
                                    <i class="mdi mdi-email"></i>
                                    <p>GODIETVN@GMAIL.COM</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact content section end -->

    <?php include 'includes/footer.php'; ?>
    
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
        
            var mapOptions = {
            zoom: 17,
            hue: '#E9E5DC',
            scrollwheel: false,
            mapTypeId:google.maps.MapTypeId.TERRAIN,
            center: new google.maps.LatLng(21.00188399883439, 105.83682182836361)
            };

            var map = new google.maps.Map(document.getElementById('googleMap'),
                mapOptions);


            var marker = new google.maps.Marker({
            position: map.getCenter(),
            icon: 'accets/img/map-marker.png',
            map: map
            });

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script> 
</body>
</html>