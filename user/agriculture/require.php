<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ยื่นคำร้อง GAP System</title>

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
            <li class="nav-item">
              <a class="nav-link" href="profile.php">ข้อมูลส่วนตัว</a>
            </li>
            <li class="nav-item  active">
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
    <div class="container">
      <div class="row" id="list-require-form">
        <div class="col-md-4">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-F-1" data-toggle="list" href="#F-1" role="tab" aria-controls="F-1">ฟอร์มคำขอใบรับรองแหล่งผลิต GAP พืช (สำหรับแปลงเดียว)</a>
            <a class="list-group-item list-group-item-action" id="list-F-2" data-toggle="list" href="#F-2" role="tab" aria-controls="F-2">ฟอร์มคำขอใบรับรองแหล่งผลิต GAP พืช (สำหรับกลุ่ม)</a>
            <a class="list-group-item list-group-item-action" id="list-F-3" data-toggle="list" href="#F-3" role="tab" aria-controls="F-3">คำขอใบรับรองแหล่งผลิต (สำหรับแปลงเดียว รายเดียว)</a>
            <a class="list-group-item list-group-item-action" id="list-F-4" data-toggle="list" href="#F-4" role="tab" aria-controls="F-4">คำขอใบรับรองการคัดบรรจุผลิตผลพืชอินทรีย์</a>
            <!-- <a class="list-group-item list-group-item-action" id="list-F-65.2" data-toggle="list" href="#F-65.2" role="tab" aria-controls="home">คำขอใบรับรองการแปรรูปผลิตภัณฑ์พืชอินทรีย์</a> -->
            <!-- <a class="list-group-item list-group-item-action" id="list5" data-toggle="list" href="#F-65.3" role="tab" aria-controls="home">คำขอใบรับรองการรวบรวมผลิตผล ผลิตภัณฑ์พืชอินทรีย์</a>
            <a class="list-group-item list-group-item-action" id="list6" data-toggle="list" href="#F-65.4" role="tab" aria-controls="home">คำขอใบรับรองการจัดจำหน่ายผลิตผล ผลิตภัณฑ์พืชอินทรีย์</a>
            <a class="list-group-item list-group-item-action" id="list7" data-toggle="list" href="#F-65.5" role="tab" aria-controls="home">คำขอใบรับรองผลิตผล และผลิตภัณฑ์อินทรีย์ สำหรับผู้นำเข้า</a>
            <a class="list-group-item list-group-item-action" id="list8" data-toggle="list" href="#list-home" role="tab" aria-controls="home">คำขอใบรับรองแหล่งผลิตพืชอินทรีย์ การคัดบรรจุ และการแปรรูป(สำหรับกลุ่ม โครงการ องค์กร)</a>
            <a class="list-group-item list-group-item-action" id="list9" data-toggle="list" href="#list-home" role="tab" aria-controls="home"></a>
            <a class="list-group-item list-group-item-action" id="list10" data-toggle="list" href="#list-home" role="tab" aria-controls="home">ฟอร์มคำขอต่ออายุใบรับรองแหล่งผลิต GAP พืช (สำหรับแปลงเดียว)</a>
            <a class="list-group-item list-group-item-action" id="list11" data-toggle="list" href="#list-home" role="tab" aria-controls="home">ฟอร์มคำขอต่ออายุใบรับรองแหล่งผลิต GAP พืช (สำหรับกลุ่ม)</a>
            <a class="list-group-item list-group-item-action" id="list12" data-toggle="list" href="#list-home" role="tab" aria-controls="home"></a>
            <a class="list-group-item list-group-item-action" id="list213" data-toggle="list" href="#list-home" role="tab" aria-controls="home">ฟอร์มคำขอหนังสือรับรอง ใบรับรอง หรือขอแก้ไขข้อมูลในใบรับรอง</a>
            <a class="list-group-item list-group-item-action" id="list14" data-toggle="list" href="#list-home" role="tab" aria-controls="home">คำขอยกเลิกการรับรอง</a> -->
          </div>
        </div>
        <div class="col-md-8">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="F-1" role="tabpanel" aria-labelledby="list-F-1">
              <form id="group-f1-form">
              <div class="form-group" >
                <div class="form-group">
                  <label for="usernameRegis" class="col-form-label">ชื่อนิติบุคคล</label>
                  <input type="email" class="form-control" name="usernameRegis" id="usernameRegis" placeholder="ชื่อนิติบุคคล">
                </div>
                <div class="form-group">
                  <label for="usernameRegis" class="col-form-label">ชื่อผู้มีอำนาจลงนาม</label>
                  <input type="email" class="form-control" name="usernameRegis" id="usernameRegis" placeholder="ชื่อ-สกุล">
                </div>
                <div class="form-group">
                  <label for="usernameRegis" class="col-form-label">เลขประจำตัวประชาชนของผู้มีอำนาจลงนาม</label>
                  <input type="email" class="form-control" name="usernameRegis" id="usernameRegis" placeholder="เลขประจำตัวประชาชน13หลัก">
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
                <div class="form-group">
                  <label for="usernameRegis" class="col-form-label">Email</label>
                  <input type="email" class="form-control" name="usernameRegis" id="usernameRegis" placeholder="Email">
                </div>
                <button type="button" class="btn btn-primary" id="cancel_account_btn">ยกเลิก</button>
                <button type="submit" class="btn btn-primary" id="save_account_btn">บันทึก</button>
              </div>
              </form>
            </div>
            <div class="tab-pane fade" id="F-2" role="tabpanel" aria-labelledby="list-F-2">F63</div>
            <div class="tab-pane fade" id="F-3" role="tabpanel" aria-labelledby="list-F-3">F64</div>
            <div class="tab-pane fade" id="F-4" role="tabpanel" aria-labelledby="list-F-4">F651</div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="collapse fixed-bottom py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script>
      $('#list2').click(function(){
          //  $("#list2").removeClass("active");
          //  $("#list1").addClass("active");
          //  $("#F-63").removeClass('active in');
          //  $("#F-64").addClass('active in');
       });
    </script>

  </body>

</html>
