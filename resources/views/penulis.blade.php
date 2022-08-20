<!DOCTYPE html>
<html>
<head>
	<title>Relasi</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<table border="1" class="table table-bordered table-striped">
					<thead>

						<tr>
							<th>Id</th>
							<th>Id Penulis</th>
							<th>Nama Penulis</th>
							<th>Judul Buku</th>
							<th>id Buku</th>
							<th>Nama Penulis</th>
						</tr>
					</thead>
					<tbody>
						@foreach($buku as $data)
						<tr>
							<td>{{ $data->id }}</td>
							<td>{{ $data->penulis->id }}</td>
							<td>{{ $data->penulis->nama }}</td>
							<td>{{ $data->judul }}</td>
							<td>{{ $data->buku->id}}</td>
							<td>{{ $data->nama }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
 
</body>
</html>