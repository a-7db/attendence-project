<?php
include '../parts/sidebar.php';
?>
<!-- Main content -->
<div id="main" class="w-100 d-flex flex-column bg-color text-white">
    <div class="row align-items-center m-5 m-md-auto h-100 w-75">
        <!-- HEADER -->
        <div class="col-12  text-center">
            <h3 class="fw-bold">جدول الحضور</h3>
        </div>
        <!-- TABLE -->
        <div class="col-12 h-75 overflow-auto">
            <table class="table table-dark table-striped table-borderless text-center">
                <thead class="sticky-top">
                    <tr class="bg-secondary">
                        <th scope="col">#</th>
                        <th scope="col">الاسم الأول</th>
                        <th scope="col">الاسم الأخير</th>
                        <th scope="col">التبصيم</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>يوسف</td>
                        <td>الصالح</td>
                        <td>نعم</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>مهدي</td>
                        <td>الفايز</td>
                        <td>نعم</td>
                    </tr>
                    <?php for ($i = 3; $i <= 12; $i++) : ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td>علي</td>
                            <td>الذهبي</td>
                            <td>لا</td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include '../parts/footer.php';
?>