<?php include('comtop.php'); ?>
<?php include('header.php'); ?>
<?php include('menu.php'); ?>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <fieldset class="form-group">
        <div class="row">
            <div class="col-xl-7">
             <legend class="col-form-label col-sm-12 pt-0">ท่านมีความพึงพอใจต่อระบบการสืบค้นห้องสมุดอย่างไร</legend>
            </div>
            <div class="col-xl-5">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                        ดีมาก
                        </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        ดี
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                        <label class="form-check-label" for="gridRadios3">
                        พอใช้
                        </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-2">
            <legend for="exampleFormControlSelect1" class="col-form-label col-sm-12 pt-0">ผู้ตอบ</legend>
            </div>
            <div class="col-xl-3">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>หน่วยงานราชการ</option>
                    <option>หน่วยงานเอกชน</option>
                    <option>ประชาชนทั่วไป</option>
                    <option>อื่นๆ</option>
                </select>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-xl-2">
                <legend for="exampleFormControlTextarea1" class="col-form-label col-sm-12 pt-0">แสดงความคิดเห็น :</legend>
            </div>
            <div class="col-xl-10">
              <textarea placeholder="กรอกรายละเอียดเพิ่มเติม" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-xl-12">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">
                <i class="fas fa-vote-yea"></i>    
                โหวต</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2">
                <i class="fas fa-poll"></i>    
                ดูผลโหวต</button>
            </div>
        </div>
    </div>
    </fieldset>
      </div>
    </div>
  </div>
</div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">โหวต</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
           <div class="modal-body">
           ขอบคุณสำหรับการโหวต
คุณได้ทำการโหวตไปเรียบร้อยแล้ว <br> ขอบคุณสำหรับการโหวต
           </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิกงานโหวต</button>
                <button type="button" class="btn btn-success">ยืนยันการโหวต</button>
            </div>
            </div>
        </div>
        </div>

 <!-- Modal -->
 <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ผลโหวตให้คะแนนแบบสำรวจออนไลน์ จาก 18788 คน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
           <div class="modal-body">
                    <p>ดีมาก 12614 คน</p> 
                    <div class="progress m-1">
                    <div class="progress-bar color_bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p>ดี 3666 คน</p> 
                    <div class="progress m-1">
                    <div class="progress-bar color_bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p>พอใช้ 2508 คน</p> 
                    <div class="progress m-1">
                    <div class="progress-bar color_bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>   
            </div>
            </div>
        </div>
</div>



<?php include('footer.php'); ?>
<?php include('combootom.php'); ?>