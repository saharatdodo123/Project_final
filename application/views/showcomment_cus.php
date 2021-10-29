<div class="container">
    <br>
    <div class="row">
        <div class="col-5">
            <?php foreach ($query as $item) { ?>
                <center>
                    <img src="<?= base_url('img/' . $item->ptg_img) ?>" height="180" width="180" alt="Admin" class="rounded-circle" width="150">
                    <br><br>
                    <h4><?php echo $item->ptg_nickname ?></h4>
                    <br>
                    <div class="row" style="text-align: right;">
                        <div class="col-3">

                        </div>
                        <div class="col-3" style="text-align: left;">
                            <i class="fa fa-address-card-o fa-1x" aria-hidden="true"></i> ชื่อ-นามสกุล<br><br>
                            <i class="fa fa-envelope-o fa-1x" aria-hidden="true"></i> อีเมล<br><br>
                            <i class="fa fa-phone-square fa-1x" aria-hidden="true"></i> เบอร์โทร<br><br>
                            <i class="fa fa-tags fa-1x" aria-hidden="true"></i> เพศ
                        </div>
                        <div class="col-4" style="text-align: left;">
                            <?php echo $item->ptg_firstname ?> <?php echo $item->ptg_lastname ?><br><br>
                            <?php echo $item->ptg_email ?><br><br>
                            <?php echo $item->ptg_phone ?><br><br>
                            <?php echo $item->sex ?>
                        </div>
                        <div class="col-2">

                        </div>
                    </div>
                </center>
            <?php } ?>
        </div>
        <div class="col-7">
            <div class="card">
                <div class="container">
                        <br>
                        <?php foreach ($query2 as $item2) { ?>
                        <p style="color: #000; text-align: right;"><i class="fa fa-star-half-o" aria-hidden="true"> </i> <?php echo ($item2->score) ?> คะแนน</p>
                        <p style="color: #000; "><?php echo $item2->comment ?></p>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>