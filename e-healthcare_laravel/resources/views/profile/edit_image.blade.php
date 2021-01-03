<!DOCTYPE html>
<html>
<head>
	<title>E-Health Care | Change Image</title>
	<link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">
		
    @if($errors)
            @foreach($errors->all() as $err)
            <!-- <h2 style="color:red">{{$err}}</h2> -->
            <h2 style="color:red">Please Upload a Image</h2>
                    @endforeach
                    @endif
	
	
        <form method="post" enctype="multipart/form-data">
        @csrf
			<fieldset>
				@if($patient->photo=='')
				<legend>Add New Image</legend>
				<table>
					<tr>						
				@else
				<legend>Upload New Image</legend>
				<table>
					<tr>
					
 							<td><img style="width: 200px; height: 200px;" src="{{asset('asset/upload/'.$patient->photo)}}"></td>
						@endif
					<tr>
					<tr>
						<td >Upload Image</td>
						<td><input type="file" name="myimg" style="margin-top: 50px;margin-left: -205px;"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit" style="margin-top: 5px;margin-left: -205px;"></td>
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