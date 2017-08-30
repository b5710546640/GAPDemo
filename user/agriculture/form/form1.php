<form>
<div class="form-group" id="group-edit-account">
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
  <button type="button" class="btn btn-primary" id="cancel_account_btn">ยกเลิก</button>
  <button type="submit" class="btn btn-primary" id="save_account_btn">บันทึก</button>
</div>
</form>
