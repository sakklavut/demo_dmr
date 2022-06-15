<?php include('comtop.php'); ?>
<?php include('header.php'); ?>
<?php include('menu.php'); ?>
<style>
    .bg{
        background: #89CC9C;
        height: 100%;
    }
</style>
<section class="bg"> 
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="shadow p-3 text-center">
                        
                </div>
            </div>
        </div>
    </div>
</section>

<div class="row">
    <div class="col-xl-12 mt-2">
        <form name="form1" method="post" action="function_login.php">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label text-right">
                    <img src="../images/users.png">
                </label>
                <div class="col-sm-7">
                    <input type="text" name="user" id="user" class="form-control" placeholder="username">
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <h4>ข้อมูลผู้เรียน</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-12">
                     <a class="btn--add btn-primary" href="#" onclick="return chkValid1(this.form,1,'')" role="button"> <img src="../images/add.png" width="24" height="24" align="absmiddle"> &nbsp;   เพิ่มผู้เรียน  </a>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                <a class="btn--add btn-primary" href="#" onclick="return chkValid1(this.form,1,'')" role="button"> <img src="../images/add.png" width="24" height="24" align="absmiddle"> &nbsp;   เพิ่มผู้เรียน  </a>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                <a class="btn--add btn-primary" href="#" onclick="return chkValid1(this.form,1,'')" role="button"> <img src="../images/add.png" width="24" height="24" align="absmiddle"> &nbsp;   เพิ่มผู้เรียน  </a>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                <a class="btn--add btn-primary" href="#" onclick="return chkValid1(this.form,1,'')" role="button"> <img src="../images/add.png" width="24" height="24" align="absmiddle"> &nbsp;   เพิ่มผู้เรียน  </a>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
                <div class="row">
                    <div class="col-xl-8">
                         <input name="#" class="form-control col-12" type="text" placeholder="กรอกคำค้นที่นี่">
                    </div>
                    <div class="col-xl-4">
                    <button type="button" class="btn btn-success  m-2 mt-3"> ดูทั้งหมด </button>
                    </div>
                </div>
        </div>
    </div>
</div>


<!-- <div class="form-group row">
                 <label for="inputPassword" class="col-sm-4 col-form-label text-right">
                    <img src="../images/technology.png">
                </label>
                <div class="col-sm-5">
                    <div class="text-center">
                        <input type="password" name="pass" id="pass" class="form-control" placeholder="password">
                    </div>
                 </div>
            </div> -->
<?php include('footer.php'); ?>
<?php include('combootom.php'); ?>