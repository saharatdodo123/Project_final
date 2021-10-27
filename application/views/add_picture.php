<link rel="stylesheet" href="<?php echo base_url('public'); ?>/style_form_admin.css">
<?php
$id = $this->session->userdata["ptg_id"];
?>
<div class="container">
    <br><br><br>
    <div class="wrapper">
        <div class="title">
            เพิ่มรูปภาพ
        </div>
        <form class="form" action="adding_picture" method="post" enctype="multipart/form-data">
            <div class="inputfield">
                <input id="text-name" type="text" class="input" name="pg_id" value="<?php echo $id ?>" hidden>
            </div>
            <div class="inputfield">
                <label for="text-lastname">กรุณาเพิ่มรูปภาพ</label>
                <input id="text-lastname" type="file" class="input" name="img" required>
            </div>
            <div class="inputfield">
                <label for="text-email">ชื่อรูปภาพ</label>
                <input id="text-email" type="text" class="input" name="name_img" required>
            </div>
            <div class="inputfield">
                <label for="text-password">รายละเอียดรูปภาพ</label>
                <input id="text-password" type="text" class="input" name="detail_img" required>
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
                            <h5 class="modal-title" id="exampleModalLabel">ต้องการเพิ่มรูปภาพใช่หรือไม่</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <center>
                                <br>
                                <i class="fa fa-picture-o fa-5x" aria-hidden="true"></i>
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