<div class="header">
	
	<div class="header-top">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			
			<p class="info-header"><img src="assets/images/vitri-head.png" alt=""><?=$optsetting['diachi']?></p>

			<p class="info-header"><i class="fas fa-phone-square-alt"></i><span>Hotline:</span> <span><?=$optsetting['hotline']?></span>&nbsp;<i class="icon-search fas fa-search"></i></p>

			
              
			<a class="sanpham_dayeu none" title="Sản phẩm đã yêu thích" href="san-pham-yeu-thich"><i class="far fa-heart"></i> (<span><?=count($_SESSION['sanphamyeuthich'])?></span>)</a>
			<div class="lang-header none">
	            <a href="ngon-ngu/vi/"><img src="assets/images/vi.jpg" alt="Tiếng Việt"></a>
	            <a href="ngon-ngu/en/"><img src="assets/images/en.jpg" alt="Tiếng Anh"></a>
	        </div>
	        <?php if(array_key_exists($login_member, $_SESSION) && $_SESSION[$login_member]['active'] == true) { ?>
	        	<div class="user-header none">
		        	<a href="account/thong-tin">
		        		<span>Hi, <?=$_SESSION[$login_member]['username']?></span>
		        	</a>
		        	<a href="account/dang-xuat">
		        		<i class="fas fa-sign-out-alt"></i>
		        		<span><?=dangxuat?></span>
		        	</a>
		        </div>
	        <?php } else { ?>
	        	<div class="user-header none">
		        	<a href="account/dang-nhap">
		        		<i class="fas fa-sign-in-alt"></i>
		        		<span><?=dangnhap?></span>
		        	</a>
		        	<a href="account/dang-ky">
		        		<i class="fas fa-user-plus"></i>
		        		<span><?=dangky?></span>
		        	</a>
		        </div>
	        <?php } ?>
		</div>
	</div>
	<div class="search w-clear search-grid">
            <input type="text" id="keyword" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword');"/>
            <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
    </div>

	<div class="header-bottom">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<a class="logo-header" href=""><img class="logo-header1" onerror="this.src='<?=THUMBS?>/120x138x2/assets/images/noimage.png';" src="<?=THUMBS?>/195x209x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>"/></a>
		</div>
	</div>

</div>