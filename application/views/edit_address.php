<link rel="stylesheet" href="<?php echo base_url('public'); ?>/style_form_admin.css">
<?php
$id = $this->session->userdata["ptg_id"];
?>
<?php foreach ($query as $item) { ?>
    <div class="container">
        <br><br><br>
        <div class="wrapper">
            <div class="title">
                แก้ไขที่อยู่
            </div>
            <form class="form" action="editing_address" method="post" enctype="multipart/form-data">
                <div class="inputfield">
                    <input id="text-name" type="text" class="input" name="pg_id" value="<?php echo $id ?>" hidden>
                </div>
                <div class="inputfield">
                    <label for="pg_house_number">บ้านเลขที่</label>
                    <input id="pg_house_number" type="text" class="input" name="pg_house_number" value="<?php echo $item->pg_house_number ?>" required>
                </div>
                <div class="inputfield">
                    <label for="pg_canton">ตำบล</label>
                    <input id="pg_canton" type="text" class="input" name="pg_canton" value="<?php echo $item->pg_canton ?>" required>
                </div>
                <div class="inputfield">
                    <label for="pg_district">อำเภอ</label>
                    <input id="pg_district" type="text" class="input" name="pg_district" value="<?php echo $item->pg_district ?>" required>
                </div>
                <div class="inputfield">
                    <label for="pg_province">จังหวัด</label>
                    <input id="pg_province" type="text" class="input" name="pg_province" value="<?php echo $item->pg_province ?>" required>
                </div>
                <div class="inputfield">
                    <label for="pg_postal_code">รหัสไปรษณีย์</label>
                    <input id="pg_postal_code" type="text" class="input" name="pg_postal_code" value="<?php echo $item->pg_postal_code ?>" required>
                </div>
                <!-- Button trigger modal -->
                <div class="inputfield">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        ยืนยัน
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ต้องการแก้ไขที่อยู่ใช่หรือไม่</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <center>
                                    <br>
                                    <i class="fa fa-map-marker fa-5x" aria-hidden="true"></i>
                                    <br>
                                    <br>
                                </center>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">ใช่</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ไม่ใช่</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php } ?>