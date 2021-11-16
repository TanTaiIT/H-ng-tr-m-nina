<div class="menu">

    <div class="flex-menu">
        <ul class="d-flex align-items-center justify-content-between wrap-content menu_desktop">
            <li><a class="transition <?php if($com=='' || $com=='index') echo 'active'; ?>" href="" title="<?=trangchu?>"><h2><?=trangchu?></h2></a></li>
            <li class="line"></li>
            <li><a class="transition <?php if($com=='gioi-thieu') echo 'active'; ?>" href="gioi-thieu" title="<?=gioithieu?>"><h2><?=gioithieu?></h2></a></li>
            <li class="line"></li>
             <li>
                <a class="transition <?php if($com=='dich-vu') echo 'active'; ?>" href="dich-vu" title="dich-vu"><h2>dịch vụ</h2></a>
                <?=$func->formenu1('news','dich-vu');?>
            </li>
            <li>
                <a class="transition <?php if($com=='san-pham') echo 'active'; ?>" href="san-pham" title="<?=sanpham?>"><h2><?=sanpham?></h2></a>
                <?=$func->formenu('product','san-pham');?>
            </li> 
            <li class="line"></li>
          <!--   <li>
                <a class="transition <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="<?=tintuc?>"><h2><?=tintuc?></h2></a>
                <?=$func->formenu('news','tin-tuc');?>
            </li> -->
            <li class="line"></li>
            <li class="logo-head"><img src="<?=THUMBS?>/195x209x1/<?=UPLOAD_PHOTO_L.$logo['photo']?>" alt=""></li>
            <!-- <li><a class="logo-header" href=""><img onerror="this.src='<?=THUMBS?>/120x138x2/assets/images/noimage.png';" src="<?=THUMBS?>/120x138x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>"/></a></li> -->
            <li><a class="transition <?php if($com=='goi-dich-vu') echo 'active'; ?>" href="goi-dich-vu" title="goidichvu"><h2>Gói dịch vụ</h2></a></li>
            <li class="line"></li>
            <li><a class="transition <?php if($com=='Feedback') echo 'active'; ?>" href="Feedback" title="Feedback"><h2>Feedback</h2></a></li>
            <li class="line"></li>
            <li><a class="transition <?php if($com=='kien-thuc') echo 'active'; ?>" href="kien-thuc" title="kiến thức"><h2>kiến thức</h2></a></li>
            <li class="line"></li>
            <li><a class="transition <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="<?=lienhe?>"><h2><?=lienhe?></h2></a></li>       
        </ul>
       
    </div>
</div>