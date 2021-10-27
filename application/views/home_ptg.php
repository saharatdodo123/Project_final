<link rel="stylesheet" href="<?php echo base_url('public'); ?>/profile_photographer.css">
<div class="container">
  <?php foreach ($query as $item) { ?>
    <center>
      <img class="img-profile" src="<?= base_url('img/' . $item->ptg_img) ?>" alt="Admin">
    </center>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <div class="alert alert-info" role="alert">
            ช่องทางการติดต่อ
          </div>
          <br>
          <p><span class="fa fa-search mr-4"></span> <?php echo $item->website ?></p>
          <p><span class="fa fa-youtube mr-4"></span> <?php echo $item->youtube ?></p>
          <p><span class="fa fa-twitter mr-4"></span> <?php echo $item->twitter ?></p>
          <p><span class="fa fa-instagram mr-4"></span> <?php echo $item->instagram ?></p>
          <p><span class="fa fa-facebook mr-4"></span> <?php echo $item->facebook ?></p>
          <br>
          <div class="alert alert-info" role="alert">
            ทักษะ
          </div>
          <br>
          <p> - <?php echo $item->favorite_job1 ?> </p>
          <p> - <?php echo $item->favorite_job2 ?> </p>
          <p> - <?php echo $item->favorite_job3 ?> </p>
          <p> - <?php echo $item->favorite_job4 ?> </p>
          <p> - <?php echo $item->favorite_job5 ?> </p>
        </div>
      </div>
      <div class="col-8">
        <div class="card">
          <div class="alert alert-info" role="alert">
            ข้อมูลส่วนตัว
          </div>
          <br>
          <div class="row">
            <div class="col-4">
              ชื่อ-นามสกุล
            </div>
            <div class="col-8">
              <?php echo $item->ptg_firstname ?> <?php echo $item->ptg_lastname ?>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-4">
              ชื่อเล่น
            </div>
            <div class="col-8">
              <?php echo $item->ptg_nickname ?>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-4">
              เพศ
            </div>
            <div class="col-8">
              <?php echo $item->sex ?>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-4">
              อีเมล
            </div>
            <div class="col-8">
              <?php echo $item->ptg_email ?>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-4">
              เบอร์โทรศัพท์
            </div>
            <div class="col-8">
              <?php echo $item->ptg_phone ?>
            </div>
          </div>
          <br>
          <div class="alert alert-info" role="alert">
            อุปกรณ์
          </div>
          <br>
          <div class="row">
            <div class="col-4">
              ยี่ห้อ
            </div>
            <div class="col-8">
              <?php echo $item->brand ?>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-4">
              เลนส์กล้อง
            </div>
            <div class="col-8">
              <?php echo $item->camera_lens ?>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-4">
              ไฟสนาม
            </div>
            <div class="col-8">
              <?php echo $item->studio_light ?>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-4">
              ขาตั้งกล้อง
            </div>
            <div class="col-8">
              <?php echo $item->camera_tripod ?>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-4">
              เมมโมรี่การ์ด
            </div>
            <div class="col-8">
              <?php echo $item->memory_card ?>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-4">
              แบตเตอร์รี่สำรอง
            </div>
            <div class="col-8">
              <?php echo $item->battery ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>
  <?php } ?>
  <div class="alert alert-info" role="alert">
    ผลงาน
  </div>
  <div class="row">
    <?php foreach ($query2 as $item2) { ?>
      <div class="card" id="card" style="width: 17rem;">
        <img id="img" src="<?= base_url('img/' . $item2->img) ?>" width="300" height="340" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $item2->name_img ?></h5>
          <p class="card-text"><?php echo $item2->detail_img ?></p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>