<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>pku cloud</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style type="text/css">


	</style>
</head>

<body>

	<div class="container my-4">
		<h3> PKU Cloud </h3>
		<hr>
		<table class="table mt-4">
			<form action="<?= site_url("/main/upload") ?>" method="POST" enctype="multipart/form-data">
				<input type="file" name="file">
				<input type="submit" class="btn btn-primary" value="upload">
		</table>
		</form>

		<tr>
			<td colspan="2">

				<input class="w-50" type="text" name="keyword" placeholder="search" class="form-control col-md-5">
				<input type="submit" value="seacrh" class="btn btn-warning col-mt-4">

			</td>
		</tr>

		<table class="table mt-4">
			<tr>
				<th class="w-75">Nama File</th>
				<th>Pilih Tindakan</th>
			<tr>

				<?php foreach ($files as $file) : ?>
			<tr>
				<td><?= $file ?></td>
				<td>
					<a href="<?= base_url("/upload/$file") ?>" class="btn btn-primary">Dwonload</a>


				</td>
			</tr>
		<?php endforeach; ?>

		</table>
	</div>

	<div class="modal" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Modal body text goes here.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="tutup">Close</button>
				
			</div>
			</div>
		</div>
		</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(window).on('load', function() {
        $('#myModal').show();
    });

	$("#tutup").click(function(){
		$('#myModal').hide();
	});
</script>

</html>