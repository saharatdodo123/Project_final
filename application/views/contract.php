<br><br>
<?php
$id = $this->session->userdata["cus_id"];
?>
<?php foreach ($query as $item) { ?>
    <div class="container">
        <div class="row">
            <center>
                <div class="alert alert-info" role="alert">
                    สัญญาจ้าง
                </div>
            </center>
        </div>
        <form action="./contracting" method="post">
            <div class="mb-3">
                <input type="text" name="ptg_id" class="form-control" id="exampleFormControlInput1" value="<?php echo $item->ptg_id ?>" hidden>
            </div>
            <div class="mb-3">
                <input type="text" name="cus_id" class="form-control" id="exampleFormControlInput1" value="<?php echo $id ?>" hidden>
            </div>
            <div class="row">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ประเภทงาน</label>
                        <select name="type_of_work" class="form-select" aria-label="Default select example">
                            <option selected> - </option>
                            <option value="สถาปัตยกรรม">สถาปัตยกรรม</option>
                            <option value="อีเวนต์">อีเวนต์</option>
                            <option value="รับปริญญา">รับปริญญา</option>
                            <option value="บุคคล/แฟชั่น">บุคคล/แฟชั่น</option>
                            <option value="สินค้า/อาหาร">สินค้า/อาหาร</option>
                            <option value="งานแต่ง/พรีเวดดิ้ง">งานแต่ง/พรีเวดดิ้ง</option>
                        </select>
                    </div>
                </div>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">รูปแบบการจ้างงาน</label>
                        <select name="form_of_employment" class="form-select" aria-label="Default select example">
                            <option selected> - </option>
                            <option value="5 ชั่วโมง">5 ชั่วโมง</option>
                            <option value="1 วัน">1 วัน</option>
                            <option value="2 วัน">2 วัน</option>
                            <option value="3 วัน">3 วัน</option>
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ค่าบริการ</label>
                        <input type="number" name="service_rates" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                </div>
            </div>
            <h5>ที่อยู่/ที่นัดหมาย</h5>
            <div class="row">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ณ</label>
                        <input type="text" name="at" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">บ้านเลขที่</label>
                        <input type="text" name="house_number" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                </div>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ตำบล</label>
                        <input type="text" name="canton" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">อำเภอ</label>
                        <input type="text" name="district" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">จังหวัด</label>
                        <input type="text" name="province" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">วัน เดือน ปี</label>
                        <input type="date" name="day_month_year" class="form-control" id="exampleFormControlInput1" placeholder="17 มกราคม 2564 หรือ 16 มกราคม 2564 - 18 มกราคม 2564" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">เวลานัดหมาย</label>
                        <input type="text" name="time" class="form-control" id="exampleFormControlInput1" placeholder="09.00 น." required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <input type="text" name="status" class="form-control" value="รอการอนุมัติ" hidden>
                    </div>
                </div>
            </div>
    </div>
    <br>
    <!-- Button trigger modal -->
    <center>
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            ต้องการทำสัญญา
        </button>
    </center>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">คุณต้องการทำสัญญาใช่หรือไม่</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <center>
                    <div class="modal-body">
                        <br>
                        <img src="<?php echo base_url('img'); ?>/Contract.jpg" width="450" height="400">
                        <br><br>
                    </div>
                </center>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-success">ใช่</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ไม่ใช่</button>
                </div>
            </div>
        </div>
    </div>
    </from>
    </div>
<?php } ?>