<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<title>Danh sách cửa hàng</title>
	</head>
	<body>
		<div class="container">
			<!-- sử dụng navbar -->
			<?php include 'navbar.php'; ?>
			
			<!-- sử dụng card -->
			<div class="card mt-3">
				<div class="card-header"><b>DANH SÁCH CỬA HÀNG</b></div>
				<div class="card-body">
					<a href="diadiem_nhap.php" class="btn btn-warning mb-2">Nhập dữ liệu từ Excel</a>
				</div>
			</div>
			
		
			<?php include 'footer.php'; ?>
		</div>
		
		<?php include 'javascript.php'; ?>
		<script type="module">
			import { getFirestore, collection, getDocs, getDoc } from 'https://www.gstatic.com/firebasejs/9.6.8/firebase-firestore.js';
			const db = getFirestore();
			
			async function getDanhSachDiaDiem() {
				const querySnapshot = await getDocs(collection(db, 'diadiem'));
				const promises = querySnapshot.docs.map(doc => getRefData(doc));
				return Promise.all(promises)
			}
			
			async function getRefData(doc) {
				var diaDiem = doc.data();
				diaDiem.id = doc.id;
				var loaiDiaDiem = await getDoc(diaDiem.MaLoai);
				diaDiem.Loai = { ...loaiDiaDiem.data() };
				return diaDiem;
			}
			
			await getDanhSachDiaDiem().then(results => {
				var output = '';
				results.forEach((d) => {
					output += '<tr>';
						output += '<td class="align-middle">' + d.MaDiaDiem + '</td>';
						output += '<td class="align-middle">' + d.Loai.TenLoai + '</td>';
						output += '<td class="align-middle"><b>' + d.TenDiaDiem + '</b><br>Địa chỉ: ' + d.DiaChi + '</td>';
						output += '<td class="align-middle font-monospace">[' + d.ToaDo.latitude + ']<br>[' + d.ToaDo.longitude + ']</td>';
						output += '<td class="align-middle text-center"><a href="diadiem_sua.php?id=' + d.id + '">Sửa</a></td>';
						output += '<td class="align-middle text-center"><a onclick="return confirm(\'Bạn có muốn xóa địa điểm ' + d.TenDiaDiem + ' không?\')" href="diadiem_xoa.php?id=' + d.id + '">Xóa</a></td>';
					output += '</tr>';
				});
				$('#HienThi').html(output);
			});
		</script>
	</body>
</html>