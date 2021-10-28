<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-5">
                <center>
                    <br>
                    <img src="<?php echo base_url('img'); ?>/login.jpg" width="550" height="500">
                </center>
            </div>
            <div class="col-5">
                <br>
                <center>
                    <div class="alert alert-info" role="alert">
                        สมัครสมาชิก
                    </div>
                </center>
                <form action="register_add" method="post">
                    <div class="row">
                        <div class="col-4 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">ชื่อ</label>
                            <input type="text" name="cus_firstname" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">นามสกุล</label>
                            <input type="text" name="cus_lastname" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">ชาย</label>
                            <select class="form-select" id="inputGroupSelect01" name="cus_sex" required>
                                <option selected>Choose...</option>
                                <option value="ชาย">ชาย</option>
                                <option value="หญิง">หญิง</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">อีเมล์</label>
                            <input type="email" name="cus_email" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">พาสเวิร์ด</label>
                            <input type="password" name="cus_password" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">เบอร์โทรศัพท์</label>
                            <input type="number" name="cus_phone" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                    </div>
                    <div class="row">
                        <p>ที่อยู่ :</p>
                        <div class="col-4 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">บ้านเลขที่</label>
                            <input type="text" name="cus_house_number" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <div class="col-8 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">ตำบล</label>
                            <input type="text" name="cus_canton" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">อำเภอ</label>
                            <input type="text" name="cus_district" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">จังหวัด</label>
                            <input type="text" name="cus_province" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">รหัสไปรษณีย์</label>
                            <input type="number" name="cus_postal_code" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                    </div>
                    <br>
                    <center>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            ยืนยัน
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">คุณต้องการสมัครสมาชิกใช่หรือไม่</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <br>
                                        <i class="fa fa-user-o fa-5x" aria-hidden="true"></i>
                                        <br><br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">ใช่</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ไม่ใช่</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </form>
            </div>
        </div>
        <div class="col-1">
        </div>
    </div>
    </div>
</body>

</html>