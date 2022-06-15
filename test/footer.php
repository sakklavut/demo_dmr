<section class="footer">
<div class="container">
  <div class="owl-carousel owl-theme" id="owl-carousel2">
 
 <?php $sql_Slide_bottom = $db->query("SELECT * FROM banner WHERE banner_gid = '".$Slide_bottom_id."'ORDER BY banner_position ASC");
while($Slide_bottom_fetch = $db->db_fetch_array($sql_Slide_bottom)){ ?>
  
    <div class="item">
        <a href="<?php echo $Slide_bottom_fetch["banner_link"]; ?>" title="<?php echo textEncode($Slide_bottom_fetch["banner_name"]); ?>" target="<?php echo $Slide_bottom_fetch["banner_traget"];?>">
		<img src="<?php echo $Slide_bottom_fetch["banner_pic"]; ?>" class="img-responsive" alt="<?php echo textEncode($Slide_bottom_fetch["banner_name"]); ?>" title="<?php echo textEncode($Slide_bottom_fetch["banner_name"]); ?>"></a>
    </div>
    
<?php } ?>
	
</div>
<br>
<div class="row copyright center" >
    <p class="t_size"><a title="นโยบายเว็บไซต์" target="_self">นโยบายเว็บไซต์</a> | <a href="http://www.dmr.go.th/ewtadmin/ewt/dmr_web/download/policy/DMR_websitepolicy_person.pdf" title="นโยบายการคุ้มครองข้อมูลส่วนบุคคล" target="_self">นโยบายการคุ้มครองข้อมูลส่วนบุคคล</a> | <a href="http://www.dmr.go.th/ewtadmin/ewt/dmr_web/download/policy/DMR_websecurity.pdf" title="นโยบายการรักษาความมั่นคงปลอดภัยเว็บไซต์" target="_self">นโยบายการรักษาความมั่นคงปลอดภัยเว็บไซต์</a> | <a href="http://www.dmr.go.th/ewtadmin/ewt/dmr_web/n_more_news.php?nid=133291" title="แผนผังเว็บไซค์" target="_self">แผนผังเว็บไซต์</a> | <a href="http://www.dmr.go.th" title="หน้าหลัก" target="_self">หน้าหลัก</a></p>
  <p  class="t_size">© 2561 สงวนลิขสิทธิ์ตามพระราชบัญญัติลิขสิทธิ์โดย กรมทรัพยากรธรณี</p>
<p class="t_size">ที่อยู่ กรมทรัพยากรธรณี 75/10 ถ.พระรามที่6 แขวงทุ่งพญาไท เขตราชเทวี กทม. 10400 ติดต่อผู้ดูแลเว็บไซต์ : webmaster@dmr.mail.go.th
</p>    <p class="t_size">เว็บไซต์นี้เหมาะสำหรับ IE 9 ขึ้นไป, FireFox 22 ขึ้นไป Google Chrome 28 ขึ้นไป, หน้าจอขนาด 1366x768 pixel</p>
</div>
<!--<div class="row center"> 
    <a href='http://ipv6-test.com/validate.php?url=referer' target = 'blank'>
<img src='http://ipv6-test.com/button-ipv6-big.png' alt='ipv6 ready' title='ipv6 ready' border='0' weight="60" height="30"/></a>
    <a href='https://achecker.ca/' target = 'blank'><img src="images_new/stand_06.png" title="W3C WAI-AAA WCAG 2.0" alt="W3C WAI-AAA WCAG 2.0"></a>
</div>-->
<div class="row center">
    <a href='images/Image-ipv6.png' target = 'blank'>
<img src='images/ipv6.png' alt='ipv6 ready' title='ipv6 ready' border='0' weight="60" height="30"/></a>
    <a href='https://achecker.ca/' target = 'blank'><img src="images_new/stand_06.png" title="W3C WAI-AAA WCAG 2.0" alt="W3C WAI-AAA WCAG 2.0"></a>
</div>
</div>
</section>
