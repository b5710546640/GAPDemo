<div class="container" style="margin-top:30px">
          <ul class="nav nav-tabs nav-justified">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#panel_login" role="tab">เข้าสู่ระบบ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel_register" role="tab">ลงทะเบียน</a>
            </li>
          </ul>
    <!-- Tab panels -->
    <div class="tab-content card">
      <!--Panel 1-->
      <?php
        include_once('login/loginTab.php');
        include_once('regis/registerTab.php');
      ?>
      <!--/.Panel 1-->
      <!--Panel 2-->

      <!--/.Panel 2-->
    </div>

</div>
