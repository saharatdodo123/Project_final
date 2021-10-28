<link rel="stylesheet" href="<?php echo base_url('public'); ?>/style_form_admin.css">
<div class="container">
    <div class="wrapper">
        <div class="title">
            เพิ่มผู้ดูแลระบบ
        </div>
        <form class="form" action="register_admin_add" method="post">
            <div class="inputfield">
                <label for="text-name">ชื่อ</label>
                <input id="text-name" type="text" class="input" name="text-name" required>
            </div>
            <div class="inputfield">
                <label for="text-lastname">นามสกุล</label>
                <input id="text-lastname" type="text" class="input" name="text-lastname" required>
            </div>
            <div class="inputfield">
                <label for="text-email">อีเมล</label>
                <input id="text-email" type="email" class="input" name="text-email" required>
            </div>
            <div class="inputfield">
                <label for="text-password">พาสเวิร์ด</label>
                <input id="text-password" type="password" class="input" name="text-password" required>
            </div>
            <div class="inputfield">
                <label>เพศ</label>
                <div class="custom_select">
                    <select name="text-sex">
                        <option value="ไม่ระบุ"> </option>
                        <option value="ชาย">ชาย</option>
                        <option value="หญิง">หญิง</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label for="text-phone">เบอร์โทรศัพท์</label>
                <input id="text-phone" type="number" class="input" name="text-phone" required>
            </div>
            <div class="inputfield">
                <label for="text-ad">ที่อยู่</label>
                <textarea id="text-ad" class="textarea" name="text-ad" required></textarea>
            </div>
            <div class="inputfield">
                <label>ตำแหน่ง</label>
                <div class="custom_select">
                    <select name="text-rank">
                        <option value="ไม่ระบุ"> </option>
                        <option value="manager">manager</option>
                        <option value="staff">staff</option>
                    </select>
                </div>
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
                            <h5 class="modal-title" id="exampleModalLabel">ต้องการเพิ่มผู้ดูแลระบบใช่หรือไม่</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <center>
                                <br>
                                <i class="fa fa-paper-plane fa-5x" aria-hidden="true"></i>
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