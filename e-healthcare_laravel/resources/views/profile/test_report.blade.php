<!DOCTYPE html>
<html>
<head>
	<title>E-Health Care | Add Test Report</title>
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">
    @if($errors)
            @foreach($errors->all() as $err)
            <h2 style="color:red">{{$err}}</h2>
                    @endforeach
                    @endif
        <form method="post" enctype="multipart/form-data">
        @csrf
			<fieldset>
				<legend>Add Test Report</legend>
				<table>
					<tr>
						<td>Report Name</td>
						<td><input type="text" name="name" "></td>
					</tr>
					<tr>
						<td>Photo</td>
						<td><input type="file" name="myimg" ></td>
					</tr>														
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</body>
</html>