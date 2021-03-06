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
          <th scope="col"> อีเมล </th>
          <th scope="col"> เบอร์โทร </th>
          <th scope="col"> เพศ </th>
          <th scope="col"> </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($query as $item) { ?>
          <tr>
            <td id="center"> <img src="<?= base_url('img/' . $item->ptg_img) ?>" height="80" width="80" alt="Photographer Img"> </td>
            <td id="center"> <br> <?= $item->ptg_firstname ?> <?= $item->ptg_lastname ?> </td>
            <td id="center"> <br> <?= $item->ptg_email ?> </td>
            <td id="center"> <br> <?= $item->ptg_phone ?> </td>
            <td id="center"> <br> <?= $item->sex ?> </td>
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