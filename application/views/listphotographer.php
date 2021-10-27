<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('public'); ?>/history.css">
<div class="container">
  <div class="card">
    <br>
    <center>
      <div class="alert alert-secondary" role="alert">
        ช่างภาพในระบบ
      </div>
    </center>
    <table class="table">
      <thead>
        <tr>
          <th scope="col"> </th>
          <th scope="col"> ชื่อ-นามสกุล</th>
          <th scope="col"> คะแนน </th>
          <th scope="col"> </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($query as $item) { ?>
          <tr>
            <td id="center"> <img src="<?= base_url('img/' . $item->ptg_img) ?>" height="80" width="80" alt="Photographer Img"> </td>
            <td id="center"> <?= $item->ptg_firstname ?> <?= $item->ptg_lastname ?> </td>
            <td id="center">
              <?php
              if ($item->ptg_score >= 30) { ?>
                <br><img src="<?php echo base_url('img'); ?>/icon.png" alt="">
              <?php
              } else { ?>
                <br><img src="<?php echo base_url('img'); ?>/icon1.png" alt="">
              <?php }; ?>

              <?php
              if ($item->ptg_score >= 60) { ?>
                <img src="<?php echo base_url('img'); ?>/icon.png" alt="">
              <?php
              } else { ?>
                <img src="<?php echo base_url('img'); ?>/icon1.png" alt="">
              <?php }; ?>

              <?php
              if ($item->ptg_score >= 90) { ?>
                <img src="<?php echo base_url('img'); ?>/icon.png" alt="">
              <?php
              } else { ?>
                <img src="<?php echo base_url('img'); ?>/icon1.png" alt="">
              <?php }; ?>

              <?php
              if ($item->ptg_score >= 120) { ?>
                <img src="<?php echo base_url('img'); ?>/icon.png" alt="">
              <?php
              } else { ?>
                <img src="<?php echo base_url('img'); ?>/icon1.png" alt="">
              <?php }; ?>

              <?php
              if ($item->ptg_score >= 150) { ?>
                <img src="<?php echo base_url('img'); ?>/icon.png" alt="">
              <?php

              } else { ?>
                <img src="<?php echo base_url('img'); ?>/icon1.png" alt="">
              <?php }; ?>
            </td>
            <td id="center">
              <form action="./showphotographer" method="POST">
                <input class="btn btn-info" type="text" name="ptg_id" value="<?php echo $item->ptg_id ?>" hidden><br>
                <input class="btn btn-info" type="submit" value="ดูรายละเอียด">
              </form>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <br><br><br>
  
</div>

<script>
  $(document).ready(function() {
    $('.table').DataTable();
  });
</script>