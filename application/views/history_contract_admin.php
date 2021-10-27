<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<div class="container">
    <br><br>
    <div class="card">
        <center>
            <div class="alert alert-dark" role="alert">
                รายการทั้งหมด
            </div>
        </center>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ชื่อผู้รับจ้าง</th>
                    <th scope="col">ประเภทงาน</th>
                    <th scope="col">รูปแบบการจ้าง</th>
                    <th scope="col">วัน-เดือน-ปี</th>
                    <th scope="col">เวลา</th>
                    <th scope="col">ค่าบริการ</th>
                    <th scope="col">สถานะ</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($query as $item) { ?>
                    <tr>
                        <td id="center"><?php echo $item->ptg_firstname ?> <?php echo $item->ptg_lastname ?></td>
                        <td id="center"><?php echo $item->type_of_work ?></td>
                        <td id="center"><?php echo $item->form_of_employment ?></td>
                        <td id="center"><?php echo $item->day_month_year ?></td>
                        <td id="center"><?php echo $item->time ?></td>
                        <td id="right"><?php echo number_format($item->service_rates) ?> บาท</td>
                        <td id="center"><?php echo $item->status ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br><br><br><br><br><br><br><br><br><br>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.table').DataTable();
    });
</script>