<link rel="stylesheet" href="<?php echo base_url('public'); ?>/style_form_admin.css">
<div class="container">
    <br>
    <div class="wrapper">
        <div class="title">
            เพิ่มผู้ดูแลระบบ
        </div>
        <form class="form" action="register_admin_add" method="post">
            <div class="inputfield">
                <label for="text-name">ชื่อ</label>
                <input id="text-name" type="text" class="input" name="text-name">
            </div>
            <div class="inputfield">
                <label for="text-lastname">นามสกุล</label>
                <input id="text-lastname" type="text" class="input" name="text-lastname">
            </div>
            <div class="inputfield">
                <label for="text-email">อีเมล</label>
                <input id="text-email" type="email" class="input" name="text-email">
            </div>
            <div class="inputfield">
                <label for="text-password">พาสเวิร์ด</label>
                <input id="text-password" type="password" class="input" name="text-password">
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
                <input id="text-phone" type="number" class="input" name="text-phone">
            </div>
            <div class="inputfield">
                <label for="text-ad">ที่อยู่</label>
                <textarea id="text-ad" class="textarea" name="text-ad"></textarea>
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
            <div class="inputfield">
                <input type="submit" value="Register" class="btn">
            </div>
        </form>
    </div>

</div>