<!DOCTYPE html>
<html>
<head>
	<title>E-Health Care | Edit Patient</title>
	<link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">
		
		
	
	
        <form method="post" enctype="multipart/form-data">
        @csrf
			<fieldset>
            @if($patient->dob=='')
            <legend>ADD Info</legend>
            @else
            <legend>Edit Info</legend>
            @endif
				
				<table>
					<tr>
						<td>Conatact No</td>
						<td><input type="text" name="contactno" value="{{$patient->contactno}}"></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text" name="address" value="{{$patient->address}}"></td>
					</tr>
					<tr>
						<td>BMI</td>
						<td><input type="text" name="bmi" value="{{$patient->bmi}}"></td>
					</tr>
					<tr>
						<td>Weight</td>
						<td><input type="text" name="weight" value="{{$patient->weight}}"></td>
					</tr>
					<tr>
						<td>Blood Presure</td>
						<td><input type="text" name="bloodpressure" value="{{$patient->bloodpressure}}"></td>
					</tr>
					<tr>
						<td>Calorie Intake</td>
						<td><input type="text" name="cal" value="{{$patient->cal}}"></td>
					</tr>
					
					
					
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<script>
		document.getElementById('upload_image').addEventListener("click", function()
		{ 
  			document.querySelector('.up_image').style.display = "grid";
		});

		document.getElementById('no_upload_image').addEventListener("click", function()
		{ 
  			document.querySelector('.up_image').style.display = "none";
  		});
	</script>
</body>
</html>