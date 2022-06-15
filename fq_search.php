<?php include('comtop.php'); ?>
<?php include('header.php'); ?>
<?php include('menu.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
            <div class="alert alert-primary" role="alert">
               <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                 <h4>กรอกคำค้น</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <input name="word" class="form-control" type="text" placeholder="กรอกคำค้นที่นี่" value="แร่">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="row">
                            <div class="col-lg-12">
                                 <h4>กลุ่มข้อมูล</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <select name="stype" id="type" class="form-control">
                                        <option value="">เลือกหมวด</option>
                                        <option value="ALL">ทั้งหมด</option>
                                        <option value="NEWS">ข่าว/บทความ (Article)</option>
                                        <option value="WB">กระดานถามตอบ (Webboard)</option>
                                        <option value="FAQ" selected="">คำถามที่ถามบ่อย (Faqs)</option>
                                        <option value="G">ค้นหาภายนอก (Google)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-xl-12 text-center">
                       <button type="button" class="btn btn-warning bg_btn_event text-white mt-3 w-25"><i class="fa fa-search" aria-hidden="true"></i> ค้นหา</button>
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>



<?php include('footer.php'); ?>
<?php include('combootom.php'); ?>  