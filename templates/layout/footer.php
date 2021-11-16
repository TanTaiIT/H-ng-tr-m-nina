<div class="footer">
    <div class="footer-article">
        <div class="wrap-content wap_footer">
            <div class="footer-news" id="main_footer">
                <h2 class="title-footer"><?=$setting['ten'.$lang]?></h2>
                <p class="suckhoe">Sức khỏe của con -Hạnh phúc của mẹ</p>
              <!--   <div class="info-footer"><?=htmlspecialchars_decode($footer['noidung'.$lang])?></div> -->
               
                <ul>
                    <li><img src="assets/images/vitri-foot.png" alt=""></i><?=$optsetting['diachi']?></li>
                    <li><img src="assets/images/phone-foot.png" alt=""><?=$optsetting['dienthoai']?></li>
                    <li><img src="assets/images/mail-foot.png" alt=""><?=$optsetting['email']?></li>
                    <li><img src="assets/images/web-foot.png" alt=""><?=$optsetting['website']?></li>
                </ul>
               
            </div>
            <div class="footer-news">
                <h2 class="title-footer">Chính sách</h2>
                <ul class="footer-ul">
                    <?php foreach($cs as $v) { ?>
                        <li><a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>">- <?=$v['ten'.$lang]?></a></li>
                    <?php } ?>
                </ul>
                 <ul class="social social-footer">
                    <?php for($i=0;$i<count($social2);$i++) { ?>
                        <li><a href="<?=$social2[$i]['link']?>" target="_blank"><img src="<?=UPLOAD_PHOTO_L.$social2[$i]['photo']?>" alt="<?=$social2[$i]['ten'.$lang]?>"></a></li>
                    <?php } ?>
                </ul>
            </div>
          
            <div class="footer-news">
                 <p class="statistic">
                <span><?=dangonline?>: <?=$online?></span><br>
                <span><?=homnay?>: <?=$counter['today']?></span><br>
                <span><?=homqua?>: <?=$counter['yesterday']?></span><br>
                <span><?=trongtuan?>: <?=$counter['week']?></span><br>
                <span><?=trongthang?>: <?=$counter['month']?></span><br>
                <span><?=tongtruycap?>: <?=$counter['total']?></span><br>
            </p>
            </div>
        </div>
    </div>
    <div class="footer-tags none">
        <div class="wrap-content pb-0">
            <p class="label-tags">Tags từ khóa sản phẩm:</p>
            <ul class="list-tags w-clear">
                <?php foreach($tagsProduct as $v) { ?>
                    <li><a class="transition text-decoration-none" href="<?=$v[$sluglang]?>" target="_blank" title="<?=$v['ten'.$lang]?>"><?=$v['ten'.$lang]?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="footer-tags none">
        <div class="wrap-content">
            <p class="label-tags">Tags từ khóa tin tức:</p>
            <ul class="list-tags w-clear">
                <?php foreach($tagsNews as $v) { ?>
                    <li><a class="transition text-decoration-none" href="<?=$v[$sluglang]?>" target="_blank" title="<?=$v['ten'.$lang]?>"><?=$v['ten'.$lang]?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="footer-powered">
        <div class="wrap-content d-flex align-items-center justify-content-between">
            <p class="copyright">2021 Copyright <?=$setting['ten'.$lang]?>. Design by Nina.vn</p>
          
        </div>
    </div>
    <?php echo $addons->setAddons('footer-map', 'footer-map', 10);?>
    <?php echo $addons->setAddons('messages-facebook', 'messages-facebook', 10);?>
</div>
<?php if($com!='gio-hang') { ?>
    <a class="cart-fixed text-decoration-none none" href="gio-hang" title="Giỏ hàng">
        <i class="fas fa-shopping-bag"></i>
        <span class="count-cart"><?=(isset($_SESSION['cart'])) ? count($_SESSION['cart']) : 0?></span>
    </a>
<?php } ?>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['zalo']);?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img src="assets/images/zl.png" alt="Zalo"></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img src="assets/images/hl.png" alt="Hotline"></i>
</a>