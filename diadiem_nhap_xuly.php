<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Xử lý nhập địa điểm từ Excel</title>
</head>
<body>
<div class="container">
    <!--sử dụng navbar -->
    <?php include 'navbar.php'; ?>

    <!--sử dụng card -->
    <div class="card mt-3">
        <div class="card-header">DANH SÁCH CỬA HÀNG ĐƯỢC CẬP NHẬT</div>
        <div class="card-body">
            <!-- Thêm form để xử lý sự kiện submit -->
            <form id="searchForm">
                <div class="mb-3 row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="searchInput" name="searchInput" placeholder="Nhập mã siêu thị hoặc tên siêu thị hoặc địa chỉ">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                    </div>
                </div>
            </form>

            <?php
            // Xử lý Excel
            require 'vendor/autoload.php';
            $file = $_FILES['TapTin']['tmp_name'];
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            $reader->setReadDataOnly(true);
            $spreadsheet = $reader->load($file);
            $sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
            $data = $sheet->toArray();

            // Hiển thị danh sách cửa hàng
            echo '<table class="table table-bordered table-hover">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Mã siêu thị</th>';
            echo '<th>Kênh</th>';
            echo '<th>Tên siêu thị</th>';
            echo '<th>Địa chỉ</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            foreach ($data as $key => $value) {
                echo '<tr>';
                echo '<td>' . $value[0] . '</td>';
                echo '<td>' . $value[2] . '</td>';
                echo '<td>' . $value[1] . '</td>';
                echo '<td><a href="https://www.google.com/maps?q=' . urlencode($value[6]) . '" target="_blank">' . $value[6] . '</a></td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';

            ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</div>

<?php include 'javascript.php'; ?>
<script type="module">
    // JavaScript xử lý tìm kiếm
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Ngăn chặn gửi form đi

        var searchValue = document.getElementById('searchInput').value.toLowerCase();
        var tableRows = document.querySelectorAll('table tbody tr');

        tableRows.forEach(function(row) {
            var cells = row.querySelectorAll('td');
            var found = false;
            cells.forEach(function(cell) {
                if (cell.textContent.toLowerCase().includes(searchValue)) {
                    found = true;
                }
            });
            if (found) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
</body>
</html>
