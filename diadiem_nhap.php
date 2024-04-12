<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<title>Nhập địa điểm từ Excel - Bản đồ siêu thị</title>
	</head>
	<body>
		<div class="container">
			<!--sử dụng navbar -->
			<?php include 'navbar.php'; ?>
			
			<!--sử dụng card -->
			<div class="card mt-3">
				<div class="card-header"><b>Nhập địa điểm từ Excel</b></div>
				<div class="card-body">
					<form action="diadiem_nhap_xuly.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
						<div class="mb-3">
							<label for="TapTin" class="form-label">Tập tin Excel</label>
							<input type="file" class="form-control" id="TapTin" name="TapTin" required />
						</div>
						
						<button type="submit" class="btn btn-primary">Nhập dữ liệu</button>
					</form>
				</div>
			</div>
			
			<?php include 'footer.php'; ?>
		</div>
		
		<?php include 'javascript.php'; ?>
		<script>
			(function() {
				'use strict';
				var forms = document.querySelectorAll('.needs-validation');
				Array.prototype.slice.call(forms).forEach(function(form) {
					form.addEventListener('submit', function(event) {
						if (!form.checkValidity()) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			})();
		</script>
	</body>
</html>