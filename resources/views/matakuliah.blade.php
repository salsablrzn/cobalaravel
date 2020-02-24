<!DOCTYPE html>
<head>
	<title>
		Belajar Laravel
	</title>
</head>
<body>
	<p>
		Nama: {{ $nama }}
	</p>
	<br>
	<ol>
		@foreach($matkul as $mk)
		<li>
			{{ $mk }} 
		</li>
		@endforeach
	</ol>
	<?php
		for($i=0; $i<count($matkul); $i++)
		{
			echo ($i+1).".$matkul[$i]<br>";
		}
		?>
</body>
</html>