<?php include("lib/function_noF.php");
	  include("lib/user_config_utf8.php");
	  include("lib/connect_utf8.php");

      include 'comtop.php'; 
	  include 'header.php'; 
    
	  
	  ?>
<style>
	#calendar{
		min-width: 580px;
		margin: 0 auto;
	}
	.caldr_module{
		min-width: 610px;
	}

</style>


<section class="caldr_module">
	<div class="container">

        <h2 class="m-y0"><i class="fa fa-calendar"></i> ปฏิทินกิจกรรม</h2>
        <br>

        <div id='calendar'></div>
        <br>
        <div align="center">
             	<a href="caldr_more.php" title="ดูทั้งหมด" target="_self">
             		<button type="button" class="btn btn-primary">ดูทั้งหมด</button>
             	</a>
             </div>
    </div>
<? include 'footer.php';?>
</section>
<? include 'combottom.php';?>
<? include 'caldr.php';?>
