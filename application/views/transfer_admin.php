<div class="container">
    <br>
    <center>
        <div class="alert alert-dark" role="alert">
            รายละเอียดการชำระเงิน
        </div>
    </center>
    <div class="row">
        <div class="col-5">
            <br>
            <center>
                <div class="alert alert-success" role="alert">
                    ตัวอย่างใบเสร็จรับเงิน
                </div>
                <img src="<?php echo base_url('img'); ?>/k-bank.jpg" width="410">
            </center>
            <br>
        </div>
        <div class="col-1">

        </div>
        <div class="col-6">
            <br>
            <center>
                <div class="alert alert-success" role="alert">
                    รายละเอียดบัญชีธนาคาร
                </div>
            </center>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ชื่อธนาคาร</th>
                        <th scope="col">สาขา</th>
                        <th scope="col">ชื่อบัญชี</th>
                        <th scope="col">เลขที่บัญชี</th>
                    </tr>
                </thead>
                <?php foreach ($query as $item) { ?>
                    <tbody>
                        <tr>
                            <td id="center"><?php echo $item->bank_name ?></td>
                            <td id="center"><?php echo $item->bank_branch ?></td>
                            <td id="center"><?php echo $item->account_name ?></td>
                            <td id="center"><?php echo $item->account_number ?></td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
            <br>
            <div class="alert alert-warning d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <div>
                    <?php foreach ($query2 as $item2) { ?>
                    ยอดชำระเงินของคุณ <?php echo $item2->service_rates ?> บาท
                    <?php } ?>
                </div>
            </div>
            <h5 id="center"></h5>
            <br>
            <div class="alert alert-info d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                </svg>
                <div>
                    โปรดอัพโหลดรูปภาพ
                </div>
            </div>
            <form action="upload_file4" method="post" enctype="multipart/form-data">
                <input type="number" name="ptg_id" value="<?php echo $item->pg_id ?>" hidden>
                <input type="text" name="status" value="สำเร็จ" hidden>
                <br>
                <input type="file" class="form-control" name="img4" id="img4">
                <br>
                <center>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        ยืนยัน
                    </button>
                    <a href="<?php echo site_url('Contract_Controller/history_transfer_admin') ?>" type="button" class="btn btn-primary">ย้อนกลับ</a>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">คุณต้องการอัพโหลดใบเสร็จใช่หรือไม่</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo base_url('img'); ?>/upload.png" width="400" height="380">
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="submit" class="btn btn-success">ใช่</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ไม่ใช่</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
            </form>
        </div>
    </div>
</div>