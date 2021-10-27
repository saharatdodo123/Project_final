<div class="container">
    <div class="row">
        <div class="col-6">
            <center>
                <div class="alert alert-info" role="alert">
                    Status
                </div>
                <div class="alert alert-light" role="alert" style="color:#000;">
                    <div class="row">
                        <div class="col-4">
                            <b>ชื่อผู้รับจ้าง</b>
                        </div>
                        <div class="col-4">
                            ประเภทงาน
                        </div>
                        <div class="col-4">
                            สถานะ
                        </div>
                    </div>
                    <hr>
                    <?php foreach ($query as $item) { ?>
                        <?php if ($item->status != 'สำเร็จ') { ?>
                            <div class="row">
                                <div class="col-4">
                                    <?php echo $item->ptg_firstname ?> <?php echo $item->ptg_lastname ?>
                                </div>
                                <div class="col-4">
                                    <?php echo $item->type_of_work ?>
                                </div>
                                <div class="col-4">
                                    <?php echo $item->status ?>
                                </div>
                            </div>
                            <hr>
                        <?php } else { ?>
                        <?php }; ?>
                    <?php } ?>
                </div>
            </center>
        </div>
        <div class="col-6">
            <center>
                <div class="alert alert-info" role="alert">
                    ขั้นตอน
                </div>
            </center>
            <div class="row">
                <div class="col-4">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </symbol>
                    </svg>
                    <div class="alert alert-info d-flex align-items-center" role="alert" style="width:200px;height:40px;">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                        </svg>
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Step 1
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <a href="<?php echo site_url('Contract_Controller/history') ?>" style="width:200px;height:40px;" type="button" class="btn btn-secondary">รอการอนุมัติ</a>
                    <a href="<?php echo site_url('Contract_Controller/history_success_cus') ?>" style="width:200px;height:40px;" type="button" class="btn btn-secondary">รอการชำระเงิน งวดที่ 1</a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </symbol>
                    </svg>
                    <div class="alert alert-info d-flex align-items-center" role="alert" style="width:200px;height:40px;">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                        </svg>
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Step 2
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <a href="<?php echo site_url('Contract_Controller/history_paymentsuccess_cus') ?>" style="width:200px;height:40px;" type="button" class="btn btn-secondary">รอช่างภาพทำงาน</a>
                    <a href="<?php echo site_url('Contract_Controller/history_success2_cus') ?>" style="width:200px;height:40px;" type="button" class="btn btn-secondary">รอการชำระเงิน งวดที่ 2</a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </symbol>
                    </svg>
                    <div class="alert alert-info d-flex align-items-center" role="alert" style="width:200px;height:40px;">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                        </svg>
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Step 3
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <a href="<?php echo site_url('Contract_Controller/history_checkpicture_cus') ?>" style="width:200px;height:40px;" type="button" class="btn btn-secondary">รอตรวจสอบหลักฐาน</a>
                    <a href="<?php echo site_url('Contract_Controller/history_success3_cus') ?>" style="width:200px;height:40px;" type="button" class="btn btn-secondary">รอการชำระเงิน งวดที่ 3</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="container">
            <br>
            <center>
                <div class="alert alert-info" role="alert">
                    รอตรวจสอบหลักฐาน
                </div>
            </center>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ชื่อผู้รับจ้าง</th>
                        <th scope="col">ประเภทงาน</th>
                        <th scope="col">รูปแบบการจ้าง</th>
                        <th scope="col">วัน-เดือน-ปี</th>
                        <th scope="col">เวลา</th>
                        <th scope="col">ค่าบริการ</th>
                        <th scope="col">สถานะ</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query as $item) { ?>
                        <?php if ($item->status == 'ส่งมอบหลักฐานแล้ว') { ?>
                            <tr>
                                <td id="center"><?php echo $item->ptg_firstname ?> <?php echo $item->ptg_lastname ?></td>
                                <td id="center"><?php echo $item->type_of_work ?></td>
                                <td id="center"><?php echo $item->form_of_employment ?></td>
                                <td id="center"><?php echo $item->day_month_year ?></td>
                                <td id="center"><?php echo $item->time ?></td>
                                <td id="right"><?php echo number_format($item->service_rates) ?> บาท</td>
                                <td id="center"><?php echo $item->status ?></td>
                                <td>
                                    <center>
                                        <form action="checkpicture_cus" method="POST">
                                            <input type="text" name="cm_id" value="<?php echo $item->cm_id ?>" hidden>
                                            <input class="btn btn-info" type="submit" value="รายละเอียด">
                                        </form>
                                    </center>
                                </td>
                            </tr>
                        <?php } else { ?>
                        <?php }; ?>
                    <?php } ?>
                </tbody>
            </table>
            <br><br><br><br><br>
        </div>
    </div>