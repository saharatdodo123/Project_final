<link rel="stylesheet" href="<?php echo base_url('public'); ?>/style_form_admin.css">
<?php
$id = $this->session->userdata["ptg_id"];
?>
<?php foreach ($query as $item) { ?>
    <div class="container">
        <br>
        <div class="wrapper">
            <div class="title">
                แก้ไขช่องทางการติดต่อ
            </div>
            <form class="form" action="editing_social" method="post" enctype="multipart/form-data">
                <div class="inputfield">
                    <input id="text-name" type="text" class="input" name="pg_id" value="<?php echo $id ?>" hidden>
                </div>
                <div class="inputfield">
                    <label for="website">Website</label>
                    <input id="website" type="text" class="input" name="website" value="<?php echo $item->website ?>" required>
                </div>
                <div class="inputfield">
                    <label for="youtube">Youtube</label>
                    <input id="youtube" type="text" class="input" name="youtube" value="<?php echo $item->youtube ?>" required>
                </div>
                <div class="inputfield">
                    <label for="twitter">Twitter</label>
                    <input id="twitter" type="text" class="input" name="twitter" value="<?php echo $item->twitter ?>" required>
                </div>
                <div class="inputfield">
                    <label for="instagram">Instagram</label>
                    <input id="instagram" type="text" class="input" name="instagram" value="<?php echo $item->instagram ?>" required>
                </div>
                <div class="inputfield">
                    <label for="facebook">Facebook</label>
                    <input id="facebook" type="text" class="input" name="facebook" value="<?php echo $item->facebook ?>" required>
                </div>
                <div class="inputfield">
                    <label for="message">Message</label>
                    <input id="message" type="text" class="input" name="message" value="<?php echo $item->message ?>" required>
                </div>
                <div class="inputfield">
                    <label for="favorite_job1">ความถนัด 1</label>
                    <input id="favorite_job1" type="text" class="input" name="favorite_job1" value="<?php echo $item->favorite_job1 ?>" required>
                </div>
                <div class="inputfield">
                    <label for="favorite_job2">ความถนัด 2</label>
                    <input id="favorite_job2" type="text" class="input" name="favorite_job2" value="<?php echo $item->favorite_job2 ?>" required>
                </div>
                <div class="inputfield">
                    <label for="favorite_job3">ความถนัด 3</label>
                    <input id="favorite_job3" type="text" class="input" name="favorite_job3" value="<?php echo $item->favorite_job3 ?>" required>
                </div>
                <div class="inputfield">
                    <label for="favorite_job4">ความถนัด 4</label>
                    <input id="favorite_job4" type="text" class="input" name="favorite_job4" value="<?php echo $item->favorite_job4 ?>" required>
                </div>
                <div class="inputfield">
                    <label for="favorite_job5">ความถนัด 5</label>
                    <input id="favorite_job5" type="text" class="input" name="favorite_job5" value="<?php echo $item->favorite_job5 ?>" required>
                </div>
                <div class="inputfield">
                    <label for="favorite_job6">ความถนัด 6</label>
                    <input id="favorite_job6" type="text" class="input" name="favorite_job6" value="<?php echo $item->favorite_job6 ?>" required>
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
                                <h5 class="modal-title" id="exampleModalLabel">ต้องการแก้ไขช่องทางการติดต่อใช่หรือไม่</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <center>
                                    <br>
                                    <i class="fa fa-rss-square fa-5x" aria-hidden="true"></i>
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