

<div class="dichvu-hana">
	<div class="dichvu-contain wap_1200">
		 <div class="title-main">
		 	<span>Dịch vụ hana care</span>
		 	<p>Chúng tôi luôn cập nhật dịch vụ liên tục,sản phẩm luôn đảm bảo chất lượng</p>
		 	<img src="assets/images/under.png" alt="">
		 </div>
		 <div class="dichvu-content">
		 	<div class="rundt">
		 	<?php foreach($dichvu as $dich){ ?> 
		    <div class="single-service">
		    	<div class="img-service scale-img">
		    		<a href="<?php echo $dich['tenkhongdau'.$lang]?>"><img src="<?=THUMBS?>/280x322x1/<?=UPLOAD_NEWS_L.$dich['photo']?>" alt=""></a>
		    	</div>
		    	<div class="ser-con">
		    		<a href="<?php echo $dich['tenkhongdau'.$lang]?>"><p><?php echo $dich['ten'.$lang]?></p></a>
		    	</div>
		    </div>
		    <?php } ?>
		  </div>
		 </div>
	</div>
</div>


<div class="box-sanpham-tc">
    <div class="wap_1200">
        <div class="title-main">
		 	<span>sản phẩm nổi bật</span>
		 	<p>Chúng tôi luôn cập nhật dịch vụ liên tục,sản phẩm luôn đảm bảo chất lượng</p>
		 	<img src="assets/images/under.png" alt="">
		 </div>
        <div class="page_noibat css_flex_ajax"></div>
    </div>
</div>


<!-- ////////////////////////////////////////	GÓI DỊCH VỤ //////////////// -->
<div class="goidichvu">
	<div class="goidichvu-contain wap_1200">
			<div class="title-main">
				 	<span>Gói dịch vụ</span>
				 	<p>Chúng tôi luôn cập nhật dịch vụ liên tục,sản phẩm luôn đảm bảo chất lượng</p>
				 	<img src="assets/images/under.png" alt="">
			</div>
			<div class="goi-content">
				<?php foreach($goidichvu as $goi){ ?> 
				<div class="goi-item">
					<div class="goi-img">
						<!-- <img src="assets/images/images/hoa.png" alt=""> -->
						<a href="<?php echo $goi['tenkhongdau'.$lang]?>"><p class="scale-img"><img src="<?=THUMBS?>/333x221x1/<?=UPLOAD_NEWS_L.$goi['photo']?>" alt=""></p></a>
						
					</div>
					<div class="goi-con">
						<p class="tim">Hana care</p>
						<a href="<?php echo $goi['tenkhongdau'.$lang]?>"><p class="ten"><?php echo $goi['ten'.$lang]?></p></a>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="xemthem-dv">
				<a href="dich-vu">Xem thêm <img src="assets/images/muiten.png" alt=""></a>
			</div>
	</div>	
</div>


<div class="felling">
	<div class="felling-contain wap_1200">
		<div class="left-felling">
			<!-- <div class=""> -->
			<div class="left-img ">
				<div class="slider-nav">
				<?php foreach($felling as $f){ ?> 
					<div class="baophu">
						<img data-zoom-id="Zoom-1" src="<?=THUMBS?>/133x133x1/<?=UPLOAD_NEWS_L.$f['photo']?>" alt="">
					</div>
				<?php } ?>
			    </div>
			</div>
		</div>
		<div class="right-felling">
		<div class="slider-for">
		<?php foreach($felling as $f){ 
			$chucvu=json_decode($f['options2'],true);
			// $diachi=json_decode($f['options2'],true);
			// var_dump($chucvu); die();


			?>
		  <div class="left-r clearfix">
		   	<div class="bao-hinh">
		   		<img id="Zoom-1" onerror="this.src='<?=$thumbsp?>assets/images/noimage.png';" src="<?=THUMBS?>/473x473x1/<?=UPLOAD_NEWS_L.$f['photo']?>">
		   	</div>
		   	<div class="fell-title">
		   		<p>Cảm nhận của khách hàng về</p>
		   		<p>Hana Care</p>
		   		<p class="catchuoi4"><?php echo $f['mota'.$lang]?></p>
		   		<p><?php echo $chucvu['chucvu']?></p>
		   		<p>- <?php echo $chucvu['diachi']?> -</p>
		   	</div>

		  	
		 </div>	
		  <?php } ?>
		</div>
		</div>
	</div>
</div>


<div class="why-choose">
	<div class="why-contain wap_1200">
		<div class="title-main">
			<span>Vì sao chọn Hana Care</span>
			<p>Chúng tôi luôn cập nhật dịch vụ liên tục,sản phẩm luôn đảm bảo chất lượng</p>
			<img src="assets/images/under.png" alt="">		 	
	    </div>
	    <div class="why-content">
	    	<?php foreach($why as $w){ ?> 
	    	<div class="single-why">
	    		
	    		
	    		<div class="why-con">
	    			<div class="img-con">
	    			 <img src="<?=THUMBS?>/71x71x1/<?=UPLOAD_NEWS_L.$w['photo']?>" alt="">
	    		</div>
	    			<div class="why1">
	    		    <p><?php echo $w['ten'.$lang]?></p>
	    		    <p><?php echo  $w['mota'.$lang]?></p>
	    		    </div>
	    		</div>
	    	</div>
	    	<?php } ?>
	    </div>
	</div>
</div>
<?php if(count($newsnb) || count($videonb)) { ?>
<div class="wap_1200">
	<div class="wrap-intro wap-tin-video">
		<div class="left-intro">
			<p class="title-intro"><span>Kiến thức</span></p>
			<div class="newshome-intro w-clear">				
				
				<div class="newshome-scroll">
					<ul>
						<?php foreach($kienthuc as $v) {?>
							<li>
								<a class="newshome-normal text-decoration-none w-clear" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>">
									<div class="pic">
									<div class="pic-newshome-normal scale-img"><img onerror="this.src='<?=THUMBS?>/150x120x2/assets/images/noimage.png';" src="<?=THUMBS?>/272x185x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
									<div class="time">
								      	<p class="ngay"><?=date("j ",$v['ngaytao'])?></p> 
								      	<p class="thang"><?=date("F ",$v['ngaytao'])?></p>
								      </div>
									</div>
									</div>
									<div class="info-newshome-normal">
										
										<h3 class="name-newshome text-split"><?=$v['ten'.$lang]?></h3>
										<p class="desc-newshome text-split"><?=$v['mota'.$lang]?></p>
									</div>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="right-intro">
			<p class="title-intro"><span>Fanpage FB</span></p>
			<div class="videohome-intro">
				 <?=$addons->setAddons('fanpage-facebook', 'fanpage-facebook', 10);?>
	            <?php /* $addons->setAddons('video-select', 'video-select', 10); */ ?>
			</div>
		</div>
	</div>
</div>
<?php } ?>
