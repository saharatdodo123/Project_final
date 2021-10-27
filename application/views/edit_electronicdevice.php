<link rel="stylesheet" href="<?php echo base_url('public'); ?>/style_form_admin.css">
<?php
$id = $this->session->userdata["ptg_id"];
?>
<?php foreach ($query as $item) { ?>
    <div class="container">
        <br><br><br>
        <div class="wrapper">
            <div class="title">
                แก้ไขรายชื่ออุปกรณ์
            </div>
            <form class="form" action="editing_electronicdevice" method="post" enctype="multipart/form-data">
                <div class="inputfield">
                    <input id="text-name" type="text" class="input" name="pg_id" value="<?php echo $id ?>" hidden>
                </div>
                <div class="inputfield">
                    <label for="brand">ยี่ห้อ</label>
                    <input id="brand" type="text" class="input" name="brand" value="<?php echo $item->brand ?>" required>
                </div>
                <div class="inputfield">
                    <label for="camera_lens">เลนส์กล้อง</label>
                    <input id="camera_lens" type="text" class="input" name="camera_lens" value="<?php echo $item->camera_lens ?>" required>
                </div>
                <div class="inputfield">
                    <label for="studio_light">ไฟสนาม</label>
                    <input id="studio_light" type="text" class="input" name="studio_light" value="<?php echo $item->studio_light ?>" required>
                </div>
                <div class="inputfield">
                    <label for="camera_tripod">ขาตั้งกล้อง</label>
                    <input id="camera_tripod" type="text" class="input" name="camera_tripod" value="<?php echo $item->camera_tripod ?>" required>
                </div>
                <div class="inputfield">
                    <label for="memory_card">เมมโมรี่การ์ด</label>
                    <input id="memory_card" type="text" class="input" name="memory_card" value="<?php echo $item->memory_card ?>" required>
                </div>
                <div class="inputfield">
                    <label for="battery">แบตเตอร์รี่สำรอง</label>
                    <input id="battery" type="text" class="input" name="battery" value="<?php echo $item->battery ?>" required>
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
                                <h5 class="modal-title" id="exampleModalLabel">ต้องการแก้ไขรายชื่ออุปกรณ์ใช่หรือไม่</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <center>
                                    <br>
                                    <i class="fa fa-camera-retro fa-5x" aria-hidden="true"></i>
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