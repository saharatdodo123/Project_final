<link rel="stylesheet" href="<?php echo base_url('public'); ?>/contract.css">
<?php foreach ($query as $item) { ?>
    <div class="container">
        <div class="card">
            <center>
                <div class="alert alert-info" role="alert">
                    สัญญาจ้าง
                </div>
            </center>
            <div class="row">
                <div class="col-1"> </div>
                <div class="col-11"><br>
                    <h6>สัญญาฉบับนี้ทำขึ้น ณ เว็บไซต์ Photographer Gallery ระหว่าง <?php if ($item->cus_sex == "ชาย") { ?> นาย <?php } else { ?> นางสาว <?php }; ?>
                        <?php echo $item->cus_firstname ?> <?php echo $item->cus_lastname ?> บ้านเลขที่ <?php echo $item->cus_house_number ?> ตำบล <?php echo $item->cus_canton ?>
                        อำเภอ <?php echo $item->cus_district ?>
                </div>
                <h6>จังหวัด <?php echo $item->cus_province ?> โทรศัพท์ <?php echo $item->cus_phone ?> อีเมล์ <?php echo $item->cus_email ?> ซึ่งต่อไปในสัญญานี้เรียกว่า "ผู้ว่าจ้าง" ฝ่ายหนึ่ง</h6>
            </div>
            <div class="row">
                <div class="col-1"> </div>
                <div class="col-11">
                    <h6>กับ <?php if ($item->sex == "ชาย") { ?> นาย <?php } else { ?> นางสาว <?php }; ?> <?php echo $item->ptg_firstname ?> <?php echo $item->ptg_lastname ?> บ้านเลขที่ <?php echo $item->pg_house_number ?>
                        ตำบล <?php echo $item->pg_canton ?> อำเภอ <?php echo $item->pg_district ?> จังหวัด <?php echo $item->pg_province ?>
                        โทรศัพท์ 092-7312299
                </div>
                <h6>อีเมล์ <?php echo $item->ptg_email ?> ซึ่งต่อไปในสัญญานี้เรียกว่า "ผู้รับจ้าง" อีกฝ่ายหนึ่งคู่สัญญาได้ตกลงกันมีข้อความดังต่อไปนี้</h6>
                <div class="row">
                    <div class="col-1"> </div>
                    <div class="col-11">
                        <br>
                        <h6>ข้อ 1. ข้อตกลงว่าจ้าง</h6><br>
                        <h6>ผู้ว่าจ้างและผู้รับจ้างตกลงรับจ้างตกลงรับจ้างทำงาน ถ่ายภาพ <?php echo $item->type_of_work ?> ณ <?php echo $item->at ?> เลขที่ <?php echo $item->house_number ?>
                            ตำบล <?php echo $item->canton ?></h6>
                    </div>
                    <h6>อำเภอ <?php echo $item->district ?> จังหวัด <?php echo $item->province ?> ในวันที่ <?php echo $item->day_month_year ?> เวลา <?php echo $item->time ?> ตามข้อกำหนดและเงื่อนไข
                        สัญญานี้รวมทั้งเอกสารแนบท้ายสัญญา</h6>
                </div>
                <div class="row">
                    <div class="col-1"> </div>
                    <div class="col-11">
                        <h6>ผู้รับจ้างตกลงที่จะจัดหาช่างภาพและอุปกรณ์การบันทึกภาพ เครื่องมือเครื่องใช้ ตลอดจนอุปกรณ์ต่าง ๆ ชนิดดีเพื่อใช้ในงานจ้างตามสัญญานี้ </h6>
                    </div>
                    <h6>โดยคิดค่าจ้างจำนวนทั้งสิ้น <?php echo number_format($item->service_rates); ?> บาท</h6>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1"> </div>
                <div class="col-11">
                    <h6>ข้อ 2. เอกสารอันเป็นส่วนหนึ่งของสัญญา</h6>
                    <br>
                    <h6>เอกสารแนบท้ายสัญญาดังต่อไปนี้ให้ถือเป็นส่วนหนึ่งของสัญญานี้</h6>
                    <h6>2.1 แนบท้าย 1 รายชื่ออุปกรณ์ที่ใช้ ความละเอียดของไฟล์ภาพ ชนิดของไฟล์ภาพ</h6>
                    <h6>2.2 แนบท้าย 2 รายชื่อผู้เป็นช่างภาพหลัก/รอง ชื่อผู้ถ่ายภาพนิ่ง ภาพเคลื่อนไหว</h6>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1"> </div>
                <div class="col-11">
                    <h6>ข้อ 3. การจ่ายเงิน</h6>
                    <br>
                    <h6>ผู้ว่าจ้าง ตกลงจ่าย และผู้รับจ้างตกลงรับเงินค่าจ้างตามข้อ 1 ซึ่งได้รวม ภาษีอากรต่าง ๆ และค่าใช้จ่ายทั้งปวงด้วยแล้วโดยแบ่งจ่ายเป็นงวดดังนี้</h6>
                    <h6>งวดที่ 1 เป็นจำนวนเงิน <?php echo $item->service_rates / 3 ?> บาท หรือร้อยละ 33.33 ในวันทำสัญญา</h6>
                    <h6>งวดที่ 2 เป็นจำนวนเงิน <?php echo $item->service_rates / 3 ?> บาท หรือร้อยละ 33.33 เมื่อผู้รับจ้างได้ทำการถ่ายภาพนิ่ง/ภาพเคลื่อนไหว ณ วันเวลาตามข้อ 1 ให้แล้วเสร็จ</h6>
                    <h6>งวดสุดท้าย เป็นจำนวนเงิน <?php echo $item->service_rates / 3 ?> บาท หรือร้อยละ 33.33 เมื่อผู้รับจ้างได้ปฏิบัติงานทั้งหมด ให้แล้วเสร็จเรียบร้อย ตามสัญญารวมทั้งส่งมอบ</h6>
                </div>
                <h6>ไฟล์งานทั้งหมดให้แก่ผู้ว่าจ้างเรียบรอยแล้ว การจ่ายเงิน ตามเงื่อนไข แห่งสัญญานี้ ผู้ว่าจ้าง จะโอนเงินเข้า ชื่อบัญชี บริษัท Photographer Gallery จำกัด
                    <br>เลขที่บัญชี 000-1-00000-1 ทั้งนี้ ผู้ว่าจ้าง ตกลงเป็นผู้รับภาระเงินค่าธรรมเนียม หรือค่าบริการอื่นใดเกี่ยวกับการโอนที่ธนาคารเรียกเก็บ.
                </h6>
            </div><br>
            <center>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-1">
                        <form action="success_contract" method="POST">
                            <input type="number" name="cm_id" value="<?php echo $item->cm_id ?>" hidden>
                            <input type="text" name="status" value="รอการชำระเงินงวดที่1" hidden>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                ตกลง
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">คุณต้องการทำสัญญาใช่หรือไม่</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?php echo base_url('img'); ?>/Contract.jpg" width="450" height="400">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="submit" class="btn btn-success">ใช่</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ไม่ใช่</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-1">
                        <form action="delete_contract_ptg" method="POST">
                            <input type="number" name="cm_id" value="<?php echo $item->cm_id ?>" hidden>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                ปฏิเสธ
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">คุณต้องการปฏิเสธสัญญาใช่หรือไม่</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?php echo base_url('img'); ?>/Contract-2.jpg" width="450" height="400">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="submit" class="btn btn-success">ใช่</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ไม่ใช่</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-1">

                    </div>
                    <div class="col-1">
                        <a href="<?php echo site_url('Contract_Controller/history_ptg') ?>" type="button" class="btn btn-primary" style="width: 120px;">ย้อนกลับ</a>
                    </div>
                    <div class="col-4"></div>
                </div>
            </center>
            <br>
        </div>
        <br>
    </div>
    </div>
<?php } ?>
</div>