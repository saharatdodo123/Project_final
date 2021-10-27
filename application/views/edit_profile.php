<link rel="stylesheet" href="<?php echo base_url('public'); ?>/style_form_admin.css">
<?php
$id = $this->session->userdata["ptg_id"];
?>
<?php foreach ($query as $item) { ?>

    <div class="container">
        <br><br>
        <div class="wrapper">
            <div class="title">
                แก้ไขข้อมูลส่วนตัว
            </div>
            <form class="form" action="editing_profile" method="post" enctype="multipart/form-data">
                <div class="inputfield">
                    <input id="text-name" type="text" class="input" name="ptg_id" value="<?php echo $id ?>" hidden>
                </div>
                <div class="inputfield">
                    <label for="img">กรุณาเพิ่มรูปภาพ</label>
                    <input id="img" type="file" class="input" name="ptg_img" required>
                </div>
                <div class="inputfield">
                    <label for="text-firstname">ชื่อ</label>
                    <input id="text-firstname" type="text" class="input" name="ptg_firstname" value="<?php echo $item->ptg_firstname ?>" required>
                </div>
                <div class="inputfield">
                    <label for="text-lastname">นามสกุล</label>
                    <input id="text-lastname" type="text" class="input" name="ptg_lastname" value="<?php echo $item->ptg_lastname ?>" required>
                </div>
                <div class="inputfield">
                    <label for="text-nickname">ชื่อเล่น</label>
                    <input id="text-nickname" type="text" class="input" name="ptg_nickname" value="<?php echo $item->ptg_nickname ?>" required>
                </div>
                <div class="inputfield">
                    <label for="text-email">อีเมล์</label>
                    <input id="text-email" type="text" class="input" name="ptg_email" value="<?php echo $item->ptg_email ?>" required>
                </div>
                <div class="inputfield">
                    <label for="text-password">พาสเวิร์ด</label>
                    <input id="text-password" type="text" class="input" name="ptg_password" value="<?php echo $item->ptg_password ?>" required>
                </div>
                <div class="inputfield">
                    <label for="text-phone">เบอร์โทรศัพท์</label>
                    <input id="text-phone" type="text" class="input" name="ptg_phone" value="<?php echo $item->ptg_phone ?>" required>
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
                                <h5 class="modal-title" id="exampleModalLabel">ต้องการแก้ไขโปรไฟล์ใช่หรือไม่</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <center>
                                    <br>
                                    <i class="fa fa-user fa-5x" aria-hidden="true"></i>
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