<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title></title>
        <script src="<?php echo base_url(); ?>assets/sbm/js/jquery-3.2.1.min.js"></script>		
        <script src="<?php echo base_url(); ?>assets/sbm/js/mycustom.js"></script>		
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sbm/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sbm/vendors/linericon/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sbm/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sbm/vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sbm/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sbm/css/responsive.css">
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?php echo base_url(); ?>">SBM <span style="color:#EA7300">2019</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="#tentang">Read me</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                            <li class="nav-item active"><a class="nav-link" target="_blank" href="https://yudiprasetya.com">Yudi Prasetya</a></li> 							
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h6>Jauh dari kata sempurna</h6>
						<h2>STANDAR BIAYA MASUKAN <br>TA 2019</h2>
						<p>Berdasarkan pada Peraturan Menteri Keuangan Republik Indonesia Nomor 32 / PMK.02/2018 <br>
							tentang Standar Biaya Masukan Tahun Anggaran 2019</p>
							<h3>Mulai Pencarian</h3>
					</div>
				</div>
            </div>
            <div class="hotel_booking_area position">
                <div class="container">
                    <div class="row hotel_booking_table" style="padding-left: 80px">
						<div class="col-md-12">
                            <div class="boking_table">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="book_tabel_item">
											<div class="input-group">
                                                <select class="wide perihal">
													<option value="0">-- Pilih Perihal --</option>
													<?php foreach($result as $value): ?>
                                                    <option value="<?php echo $value->ID; ?>"><?php echo $value->KETERANGAN; ?></option>
													<?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="book_tabel_item">										
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="boking_table">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="book_tabel_item">
											<div class="input-group provinsi">
                                                <select class="wide">
													<option value="0">-- Pilih Provinsi --</option>
													<?php foreach($result_provinsi as $value): ?>
                                                    <option value="<?php echo $value->ID; ?>"><?php echo $value->NAMA; ?></option>
													<?php endforeach; ?>
                                                </select>												
                                            </div>
											<div class="input-group kota-asal">
                                                <select class="wide">
													<option value="0">-- Pilih Kota Asal --</option>
													<?php foreach($result_kota as $value): ?>
                                                    <option value="<?php echo $value->ID; ?>"><?php echo $value->NAMA; ?></option>
													<?php endforeach; ?>
                                                </select>												
                                            </div>											
                                        </div>
                                    </div>								
                                    <div class="col-md-5">
                                        <div class="book_tabel_item kota-tujuan">
											<div class="input-group">
                                                <select class="wide">
													<option value="0">-- Pilih Kota Tujuan --</option>
													<?php foreach($result_kota as $value): ?>
                                                    <option value="<?php echo $value->ID; ?>"><?php echo $value->NAMA; ?></option>
													<?php endforeach; ?>
                                                </select>	
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="book_tabel_item">										
                                            <a class="book_now_btn button_hover" href="#">Submit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>																					
                    </div>
                </div>
            </div>
        </section>
        <!--================Banner Area =================-->
        
        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Hasil Pencarian</h2>
                    <p>Berikut ini adalah hasil dari pencarian yang dapat kami tampilkan. </p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-12 col-sm-12">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room1.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">dd</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Double Deluxe Room</h4></a>
                            <h5>$250<small>/night</small></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Accomodation Area  =================-->
        
        <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap" id="tentang">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Tentang Aplikasi SBM 2019</h2>
                    <p>Mohon dibaca terlebih dahulu sebelum menggunakan aplikasi ini.</p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-6 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-book"></i>PMK 32 /PMK.02/2018</h4>
                            <p>Aplikasi ini dibuat berdasarkan dari Peraturan Menteri Keuangan Republik Indonesia Nomor 32 / PMK.02/2018 <br>
							tentang Standar Biaya Masukan Tahun Anggaran 2019<br><br></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-highlight"></i>SBM TA 2019</h4>
                            <p>adalah satuan biaya berupa harga satuan, tarif, dan indeks yang ditetapkan untuk menghasilkan biaya komponen keluaran dalam penyusunan rencana kerja dan anggaran kementerian negara/lembaga Tahun Anggaran 2019.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-bold"></i>Batas Tertinggi</h4>
                            <p>Standar Biaya Masukan Tahun Anggaran 2019 berfungsi sebagai batas tertinggi atau estimasi.<br><br><br></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-warning"></i>Disclaimer</h4>
                            <p>Aplikasi ini tidak dapat dijadikan acuan terkait penentuan SBM TA 2019. Karena kami tidak memberikan jaminan kebenaran data yang dimunculkan pada aplikasi ini. Penentuan SBM TA 2019 tetap harus mengacu pada PMK 32 /PMK.02/2018. <a href="http://www.jdih.kemenkeu.go.id/fullText/2018/32~PMK.02~2018Per.pdf" target="_blank">Download Disini</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Tentang Kami</h6>
                            <p>Halo salam kenal. Saya Yudi Prasetya founder dari aplikasi ini. Saya berharap semoga aplikasi ini dapat bermanfaat bagi teman-teman semua. Terkait kritik, saran, maupun masukan teman-teman dapat menghubungi saya di email prasetyaningyudi@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title"></h6>
                            <div class="row">
                                <div class="col-4">

                                </div>
                                <div class="col-4">

                                </div>										
                            </div>							
                        </div>
                    </div>												
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-sm-12 footer-social">
					
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo base_url(); ?>assets/sbm/js/popper.js"></script>
        <script src="<?php echo base_url(); ?>assets/sbm/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/sbm/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/sbm/vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="<?php echo base_url(); ?>assets/sbm/js/stellar.js"></script>
        <script src="<?php echo base_url(); ?>assets/sbm/js/custom.js"></script>
    </body>
</html>