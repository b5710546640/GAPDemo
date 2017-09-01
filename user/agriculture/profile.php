<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>โปรไฟล์ GAP System</title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
      <div class="container">
        <a class="navbar-brand" href="#">GAP System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item">
              <a class="nav-link" href="D:/Save/Internship/YiiWeb/index.php">หน้าหลัก
                <span class="sr-only">(current)</span>
              </a>
            </li> -->
            <li class="nav-item  active">
              <a class="nav-link" href="profile.php">ข้อมูลส่วนตัว</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="require.php">ยื่นคำร้อง</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="status.php">สถานะคำร้อง</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="D:/Save/Internship/YiiWeb/index.php">ออกจากระบบ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container" style="margin-top:30px">
              <ul class="nav nav-tabs nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#panel_account" role="tab">เกี่ยวกับบัญชีผู้ใช้</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel_profile" role="tab">ข้อมูลส่วนตัว</a>
                </li>
              </ul>
        <!-- Tab panels -->
        <div class="tab-content card">
          <!--Panel 1-->
          <div class="tab-pane fade in show active" id="panel_account" role="tabpanel">
            <form>
            <div class="form-group" id="group-edit-account" style="display: none">
              <div class="form-group">
                <label for="usernameRegis" class="col-form-label">ชื่อผู้ใช้</label>
                <input type="email" class="form-control" name="usernameRegis" id="usernameRegis" placeholder="ชื่อผู้ใช้">
              </div>
              <div class="form-group">
                <label for="passwordRegis" class="col-form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" name="passwordRegis" id="passwordRegis" placeholder="ตัวเลขหรือตัวอักษร6-8ตัว">
              </div>
              <div class="form-group">
                <label for="confirmPasswordRegis" class="col-form-label"></label>
                <input type="password" class="form-control" name="confirmPasswordRegis" id="confirmPasswordRegis" placeholder="ยืนยันรหัสผ่าน">
              </div>
              <div class="form-group">
                <label for="emailRegis" class="col-form-label">Email</label>
                <input type="email" class="form-control" name="emailRegis" id="emailRegis" placeholder="Email">
              </div>
              <button type="button" class="btn btn-primary" id="cancel_account_btn">ยกเลิก</button>
              <button type="submit" class="btn btn-primary" id="save_account_btn">บันทึก</button>
            </div>
            <div class="form-group" id="group-view-account">
              <div class="form-group">
                <label for="usernameRegis" class="col-form-label">ชื่อผู้ใช้</label>
                <label type="email" class="form-control" name="usernameRegis" id="usernameRegis">somchai-m</label>
              </div>
              <div class="form-group">
                <label for="passwordRegis" class="col-form-label">รหัสผ่าน</label>
                <label type="password" class="form-control" name="passwordRegis" id="passwordRegis">somchai-m</label>
              </div>
              <div class="form-group">
                <label for="confirmPasswordRegis" class="col-form-label"></label>
                <label type="password" class="form-control" name="confirmPasswordRegis" id="confirmPasswordRegis">somchai-m</label>
              </div>
              <div class="form-group">
                <label for="emailRegis" class="col-form-label">Email</label>
                <label type="email" class="form-control" name="emailRegis" id="emailRegis">somchai-m</label>
              </div>
              <button type="button" class="btn btn-primary" id="edit_account_btn">แก้ไข</button>
            </div>
          </form>
          </div>
          <!--/.Panel 1-->
          <!--Panel 2-->
          <div class="tab-pane fade" id="panel_profile" role="tabpanel">
            <form>
              <div class="form-group" id="group-edit-profile" style="display: none">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="nameRegis" class="col-form-label">ชื่อ</label>
                    <input type="text" class="form-control" name="nameRegis" id="nameRegis" placeholder="ชื่อ">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="fnameRegis" class="col-form-label">นามสกุล</label>
                    <input type="text" class="form-control" name="fnameRegis" id="fnameRegis" placeholder="นามสกุล">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="nationalIDRegis" class="col-form-label">เลขประจำตัวประชาชน</label>
                    <input type="text" class="form-control" name="nationalIDRegis" id="nationalIDRegis" placeholder="เลขประจำตัวประชนชน13หลัก">
                  </div>
                  <div class="form-group col-md-6">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="addressNoRegis" class="col-form-label">บ้านเลขที่</label>
                    <input type="text" class="form-control" name="addressNoRegis" id="addressNoRegis">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="villageRegis" class="col-form-label">หมู่บ้าน</label>
                    <input type="text" class="form-control" name="villageRegis" id="villageRegis">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="mooRegis" class="col-form-label">หมู่ที่</label>
                    <input type="text" class="form-control" name="mooRegis" id="mooRegis">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="roadRegis" class="col-form-label">ถนน</label>
                    <input type="text" class="form-control" name="roadRegis" id="roadRegis">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="subDistrictRegis" class="col-form-label">ตำบล</label>
                    <select name="subDistrictRegis" id="subDistrictRegis" class="form-control">Choose</select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="districtRegis" class="col-form-label">อำเภอ</label>
                    <select name="districtRegis" id="districtRegis" class="form-control">Choose</select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="provinceRegis" class="col-form-label">จังหวัด</label>
                    <select name="provinceRegis" id="provinceRegis" class="form-control">Choose</select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="postalCodeRegis" class="col-form-label">รหัสไปรษณีย์</label>
                    <input type="text" class="form-control" name="postalRegis" id="postalRegis">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="phoneRegis" class="col-form-label">โทรศัพท์บ้าน</label>
                    <input type="text" class="form-control" name="phoneRegis" id="phoneRegis" placeholder="XXX-XXXXXX">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mobileRegis" class="col-form-label">โทรศัพท์มือถือ</label>
                    <input type="text" class="form-control" name="mobileRegis" id="mobileRegis" placeholder="XXX-XXXXXXX">
                  </div>
                </div>
                <button type="button" class="btn btn-primary" id="cancel_profile_btn">ยกเลิก</button>
                <button type="submit" class="btn btn-primary" id="save_profile_btn">บันทึก</button>
              </div>

              <div class="form-group" id="group-view-profile">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="nameRegis" class="col-form-label">ชื่อ</label>
                    <label type="text" class="form-control" name="nameRegis" id="nameRegis">สมชาย</label>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="fnameRegis" class="col-form-label">นามสกุล</label>
                    <label type="text" class="form-control" name="fnameRegis" id="fnameRegis">มั่นคงดี</label>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="nationalIDRegis" class="col-form-label">เลขประจำตัวประชาชน</label>
                    <label type="text" class="form-control" name="nationalIDRegis" id="nationalIDRegis">1111111111111</label>
                  </div>
                  <div class="form-group col-md-6">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="addressNoRegis" class="col-form-label">บ้านเลขที่</label>
                    <label type="text" class="form-control" name="addressNoRegis" id="addressNoRegis">1</label>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="villageRegis" class="col-form-label">หมู่บ้าน</label>
                    <label type="text" class="form-control" name="villageRegis" id="villageRegis">1</label>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="mooRegis" class="col-form-label">หมู่ที่</label>
                    <label type="text" class="form-control" name="mooRegis" id="mooRegis">1</label>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="roadRegis" class="col-form-label">ถนน</label>
                    <label type="text" class="form-control" name="roadRegis" id="roadRegis">สวัสดี</label>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="subDistrictRegis" class="col-form-label">ตำบล</label>
                    <label name="subDistrictRegis" id="subDistrictRegis" class="form-control">Choose</label>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="districtRegis" class="col-form-label">อำเภอ</label>
                    <label name="districtRegis" id="districtRegis" class="form-control">Choose</label>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="provinceRegis" class="col-form-label">จังหวัด</label>
                    <label name="provinceRegis" id="provinceRegis" class="form-control">Choose</label>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="postalCodeRegis" class="col-form-label">รหัสไปรษณีย์</label>
                    <label type="text" class="form-control" name="postalRegis" id="postalRegis">10000</label>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="phoneRegis" class="col-form-label">โทรศัพท์บ้าน</label>
                    <label type="text" class="form-control" name="phoneRegis" id="phoneRegis">XXX-XXXXXX</label>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mobileRegis" class="col-form-label">โทรศัพท์มือถือ</label>
                    <label type="text" class="form-control" name="mobileRegis" id="mobileRegis">XXX-XXXXXXX</label>
                  </div>
                </div>
                <button type="button" class="btn btn-primary" id="edit_profile_btn">แก้ไข</button>
              </div>

              </form>
          </div>
          <!--/.Panel 2-->
        </div>

    </div>

    <!-- /.container -->

    <!-- Footer -->
    <footer class="collapse navbar-collapse fixed-bottom py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <script>
        $('#edit_account_btn').click(function(){
              var x = document.getElementById('group-edit-account');
              var y = document.getElementById('group-view-account');
               if (x.style.display === 'none') {
                   x.style.display = 'block';
               } else {
                   x.style.display = 'none';
               }
               if (y.style.display === 'none') {
                   y.style.display = 'block';
               } else {
                   y.style.display = 'none';
               }
           });

           $('#edit_profile_btn').click(function(){
                 var x = document.getElementById('group-edit-profile');
                 var y = document.getElementById('group-view-profile');
                  if (x.style.display === 'none') {
                      x.style.display = 'block';
                  } else {
                      x.style.display = 'none';
                  }
                  if (y.style.display === 'none') {
                      y.style.display = 'block';
                  } else {
                      y.style.display = 'none';
                  }
              });

              $('#cancel_account_btn').click(function(){
                    var x = document.getElementById('group-edit-account');
                    var y = document.getElementById('group-view-account');
                     if (x.style.display === 'none') {
                         x.style.display = 'block';
                     } else {
                         x.style.display = 'none';
                     }
                     if (y.style.display === 'none') {
                         y.style.display = 'block';
                     } else {
                         y.style.display = 'none';
                     }
                 });

                 $('#cancel_profile_btn').click(function(){
                       var x = document.getElementById('group-edit-profile');
                       var y = document.getElementById('group-view-profile');
                        if (x.style.display === 'none') {
                            x.style.display = 'block';
                        } else {
                            x.style.display = 'none';
                        }
                        if (y.style.display === 'none') {
                            y.style.display = 'block';
                        } else {
                            y.style.display = 'none';
                        }
                    });

    </script>

  </body>

</html>
