<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ประเมิน GAP System</title>

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
            <li class="nav-item">
              <a class="nav-link" href="D:/Save/Internship/YiiWeb/index.php">หน้าหลัก
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">ข้อมูลส่วนตัว</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="request.php">คำร้องทั้งหมด</a>
            </li>
            <li class="nav-item   active">
              <a class="nav-link" href="evaluate.php">ประเมิน</a>
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
      <table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>ข้อกำหนด</th>
      <th>ระดับข้อกำหนด</th>
      <th>ผลการตรวจการประเมิน</th>
      <th>วิธีการตวจการประเมิน</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>ฟอร์มคำขอใบรับรองแหล่งผลิต GAP พืช (สำหรับแปลงเดียว)</td>
      <td>11 ม.ค. 2560</td>
      <td>
        <div class="row">
          <select class="custom-select d-block my-3" required>
            <option value=""></option>
            <option value="1">ใช่</option>
            <option value="2">ไม่ใช่</option>
            <option value="3">N/A</option>
          </select>
        </div>
        </td>
        <td>
          <div class="row">
            <select class="custom-select d-block my-3" required>
              <option value=""></option>
              <option value="1">พินิจ</option>
              <option value="2">สัมภาษณ์</option>
            </select>
          </div>
        </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>ฟอร์มคำขอใบรับรองแหล่งผลิต GAP พืช (สำหรับกลุ่ม)</td>
      <td>3 มี.ค. 2560</td>
      <td>
        <div class="row">
          <select class="custom-select d-block my-3" required>
            <option value=""></option>
            <option value="1">ใช่</option>
            <option value="2">ไม่ใช่</option>
            <option value="3">N/A</option>
          </select>
        </div>
        </td>
        <td>
          <div class="row">
            <select class="custom-select d-block my-3" required>
              <option value=""></option>
              <option value="1">พินิจ</option>
              <option value="2">สัมภาษณ์</option>
            </select>
          </div>
        </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>คำขอใบรับรองแหล่งผลิต (สำหรับแปลงเดียว รายเดียว)</td>
      <td>11 ส.ค. 2560</td>
      <td>
        <div class="row">
          <select class="custom-select d-block my-3" required>
            <option value=""></option>
            <option value="1">ใช่</option>
            <option value="2">ไม่ใช่</option>
            <option value="3">N/A</option>
          </select>
        </div>
        </td>
        <td>
          <div class="row">
            <select class="custom-select d-block my-3" required>
              <option value=""></option>
              <option value="1">พินิจ</option>
              <option value="2">สัมภาษณ์</option>
            </select>
          </div>
        </td>
    </tr>
  </tbody>
</table>
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
        $('#container').find('.input').each(function() {
          console.log('input');
          $(this).replaceWith("<span>" + this.value + "</span>");
        });

    </script>

  </body>

</html>
