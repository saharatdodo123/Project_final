<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($query as $item) { ?>
        <div class="container">
            <br><br>
            <center>
                <div class="alert alert-dark" role="alert">
                    รายละเอียดการตรวจสอบการชำระเงินงวดที่1
                </div>
            </center>
            <br>
            <div class="row">
                <div class="col-1">

                </div>
                <div class="col-5">
                    <center>
                        <div class="alert alert-success" role="alert">
                            ใบเสร็จรับเงิน
                        </div>
                        <img src="<?php echo base_url('img'); ?>/<?php echo $item->img5 ?>" width="400">
                    </center>
                </div>
                <div class="col-5">
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <div>
                            โปรดตรวจสอบการรับเงินจำนวน <?php echo $item->service_rates; ?> บาท
                        </div>
                    </div>
                    <center>
                        <a href="<?php echo site_url('Contract_Controller/history_transfercheck_ptg') ?>" type="button" class="btn btn-primary">ย้อนกลับ</a>
                    </center>
                </div>
                <div class="col-1">

                </div>
            </div>
        </div>

    <?php } ?>
    <br><br>
</body>

</html>