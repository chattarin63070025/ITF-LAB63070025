<!DOCTYPE html>
<html>
<head>
	<title>Add | 19 ITF LAB</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style type="text/css">
		.card {
			border-top: solid 5px #00C0FF;
		}
	</style>
</head>
<body class="bg-light py-5">
	<div class="container text-dark">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<div class="row">
							<div class="col-6"><h1 class="text-monospace">แบบฟอร์ม</h1></div>
						</div>
						<form action="insert.php" method="post">
							<div class="form-group">
								<label>ชื่อและนามสกุล ของท่าน</label>
								<input type="text" name="name" class="form-control" required>
							</div>
							<div class="form-group">
								<label>ความคิดเห็นและอื่นๆ</label>
								<textarea name="comment" class="form-control" rows="5" required></textarea>
							</div>
							<div class="form-group">
								<label>ลิ้งของท่าน</label>
								<input type="text" name="link" class="form-control">
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-sm btn-primary my-3 font-weight-bold">SUBMIT</button>
								<a class="btn btn-sm btn-warning my-3" href="index.php">CANCLE</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
