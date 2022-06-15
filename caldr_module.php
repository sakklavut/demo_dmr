<?php include('comtop.php'); ?>
<?php include('header.php'); ?>
<?php include('menu.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-xl-12 mt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">
                <i class="fas fa-calendar-alt"></i> 
                </a></li>
                <li class="breadcrumb-item active" aria-current="page">ปฏิทินกิจกรรม</li>
            </ol>
        </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
           <div id='calendar'></div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 text-center mt-2 mb-2">
            <button type="button" class="btn btn-success">ดูทั้งหมด</button>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>
<?php include('combootom.php'); ?>