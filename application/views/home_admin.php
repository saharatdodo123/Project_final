<?php foreach ($query as $item) { ?>
  <div class="container">
    <img src="<?php echo base_url('img'); ?>/home_admin.jpg">
    <div class="card">
      <br>
      <div class="row">
        <div class="col-10"> </div>
        <div class="col-2"> ตำแหน่ง <?php echo $item->rank ?> </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-2"> ชื่อ-นามสกุล </div>
        <div class="col-10"> <?php echo $item->name ?> <?php echo $item->lastname ?> </div>
      </div>
      <br>
      <div class="row">
        <div class="col-2"> อีเมล </div>
        <div class="col-10"> <?php echo $item->email ?> </div>
      </div>
      <br>
      <div class="row">
        <div class="col-2"> เพศ </div>
        <div class="col-10"> <?php echo $item->sex ?> </div>
      </div>
      <br>
      <div class="row">
        <div class="col-2"> เบอร์โทรศัพท์ </div>
        <div class="col-10"> 66+<?php echo $item->phone ?> </div>
      </div>
      <br>
      <div class="row">
        <div class="col-2"> ที่อยุ่ </div>
        <div class="col-10"> <?php echo $item->address ?> </div>
      </div>
      <br>
    </div>
  </div>
<?php } ?>