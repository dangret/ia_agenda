

<html>
<head>
	<meta charset="utf-8">
	
</head>
<body>
	
	<table>
		<thead>
			<tr>
				<th>Loan Officer</th>
			</tr>
		</thead>
		<tbody>
	@foreach($tasks as $task)
			@if($task->departament_id==1)
			<tr><td>{[$task->name]}</td></tr>
			@endif
	@endforeach	
		</tbody>
	</table>

	<table>
		<thead>
			<tr>
				<th>Loan Set Up</th>
			</tr>
		</thead>
		<tbody>
	@foreach($tasks as $task)
			@if($task->departament_id==2)
			<tr><td>{[$task->name]}</td></tr>
			@endif
	@endforeach	
		</tbody>
	</table>

	<table>
		<thead>
			<tr>
				<th>Loan Processor</th>
			</tr>
		</thead>
		<tbody>
	@foreach($tasks as $task)
			@if($task->departament_id==3)
			<tr><td>{[$task->name]}</td></tr>
			@endif
	@endforeach	
		</tbody>
	</table>

</body>
</html>