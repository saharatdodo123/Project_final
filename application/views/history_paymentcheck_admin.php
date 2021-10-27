<div class="container">
  <br><br><br><br>
  <center>
    <div class="alert alert-dark" role="alert">
      รอดำเนินการ
    </div>
  </center>
  <div class="row">
    <div class="col-3">
    <br><br>
      <center>
        <div class="alert alert-info" role="alert">
          Status
        </div>
        <a href="<?php echo site_url('Contract_Controller/history_paymentcheck_admin') ?>" type="button" class="btn btn-secondary">รอตรวจสอบการชำระเงิน งวดที่1</a>
        <br><br>
        <a href="<?php echo site_url('Contract_Controller/history_paymentcheck2_admin') ?>" type="button" class="btn btn-secondary">รอตรวจสอบการชำระเงิน งวดที่2</a>
        <br><br>
        <a href="<?php echo site_url('Contract_Controller/history_paymentcheck3_admin') ?>" type="button" class="btn btn-secondary">รอตรวจสอบการชำระเงิน งวดที่3</a>
      </center>
    </div>
    <div class="col-9">
      <div class="card">
        <center>
          <div class="alert alert-info" role="alert">
            รอตรวจสอบการชำระเงิน งวดที่ 1
          </div>
        </center>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ชื่อผู้จ้าง</th>
              <th scope="col">ชื่อรับจ้าง</th>
              <th scope="col">ค่าบริการ</th>
              <th scope="col">สถานะ</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <?php foreach ($query as $item) { ?>
            <?php if ($item->status == 'รอตรวจสอบการชำระเงินงวดที่1') { ?>
              <tbody>
                <tr>
                  <td id="center"><?php echo $item->cus_firstname ?> <?php echo $item->cus_lastname ?></td>
                  <td id="center"><?php echo $item->ptg_firstname ?> <?php echo $item->ptg_lastname ?></td>
                  <td id="center"><?php echo number_format($item->service_rates) ?> บาท</td>
                  <td id="center"><?php echo $item->status ?></td>
                  <td id="center">
                    <form action="<?php echo site_url('Payment_Controller/showpayment_admin') ?>" method="POST">
                      <input type="text" name="cm_id" value="<?php echo $item->cm_id ?>" hidden>
                      <input class="btn btn-info" type="submit" value="ดูการชำระเงิน">
                    </form>
                  </td>
                </tr>
              </tbody>
            <?php
            } else { ?>
            <?php }; ?>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
</div>