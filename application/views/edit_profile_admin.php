<style>
  input[type=text],
  input[type=email],
  input[type=password],
  select,
  textarea {
    width: 225px;
    height: 40px;
    padding: 3px 8px;
    box-sizing: border-box;
    border: 1px solid rgba(4, 47, 89, 0.8);
    border-radius: 8px;
    outline: none;
  }

  textarea {
    width: 225px;
    height: 80px;
    padding: 3px 8px;
    box-sizing: border-box;
    border: 1px solid rgba(4, 47, 89, 0.8);
    border-radius: 8px;
    outline: none;
  }

  input[type=text]:focus,
  input[type=email]:focus,
  select:focus,
  textarea:focus {
    border: 3px solid rgba(4, 47, 89, 1);
  }
</style>
<link rel="stylesheet" href="<?php echo base_url('public'); ?>/style_form_admin.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php foreach ($query as $item) { ?>
  <div class="container">
    <img src="<?php echo base_url('img'); ?>/home_admin.jpg">
    <div class="card">
      <form action="editing_profile_admin" method="post">
        <br>
        <center>
          <div class="alert alert-secondary" role="alert">
            แก้ไขข้อมูลส่วนตัว
          </div>
        </center>
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
            <div class="row">
              <div class="col-11"> </div>
              <div class="col-1">
                <select name="rank">
                  <option value="<?php echo $item->rank ?>"><?php echo $item->rank ?></option>
                  <option value="manager">manager</option>
                  <option value="staff">staff</option>
                </select>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-4"> ชื่อ </div>
              <div class="col-8"> <input type="text" name="name" value="<?php echo $item->name ?>" require></div>
            </div>
            <br>
            <div class="row">
              <div class="col-4"> นามสกุล </div>
              <div class="col-8"> <input type="text" name="lastname" value="<?php echo $item->lastname ?>" require></div>
            </div>
            <br>
            <div class="row">
              <div class="col-4"> อีเมล </div>
              <div class="col-8"> <input type="email" name="email" value="<?php echo $item->email ?>" require> </div>
            </div>
            <br>
            <div class="row">
              <div class="col-4"> พาสเวิร์ด </div>
              <div class="col-8"> <input type="password" name="password" value="<?php echo $item->password ?>" require> </div>
            </div>
            <br>
            <div class="row">
              <div class="col-4"> เพศ </div>
              <div class="col-8">
                <select name="sex">
                  <option value="<?php echo $item->sex ?>"><?php echo $item->sex ?></option>
                  <option value="ชาย">ชาย</option>
                  <option value="หญิง">หญิง</option>
                </select>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-4"> เบอร์โทรศัพท์ </div>
              <div class="col-8"> <input type="text" name="phone" value="<?php echo $item->phone ?>" require> </div>
            </div>
            <br>
            <div class="row">
              <div class="col-4"> ที่อยุ่ </div>
              <div class="col-8"> <textarea type="text" name="address" value="<?php echo $item->address ?>" require><?php echo $item->address ?></textarea> </div>
            </div>
            <br>
            <div class="col-3"></div>
          </div>
        </div>
        <center>
          <button type="submit" class="btn btn-primary">ยืนยัน</button>
        </center>
      </form>
    </div>
    <br>
  </div>
<?php } ?>