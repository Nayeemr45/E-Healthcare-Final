<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="/abc/css/bootstrap.min.css">
    <style>
        tr,td{
            padding-bottom: 28px !important;
    padding-left: 14px;
        }
        .submit{
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <form  method="post" enctype="multipart/form-data">
    @csrf
        <fieldset>
            <legend>Payment</legend>
            <table>
            <td>Your Id : {{$user_id}}</td><br><br>
                <tr>
                
                    <td>Payment gateway</td><br>
                    

                    <td>
                        <select " id="sel1" name="gateway">
                            <option value="bkash">bkash</option>
                            <option value="Card">Card</option>
                            <option value="Internet Banking">Internet Banking</option>
                          </select>
                    </td>
                </tr><br>
                <tr>
                    <td>Date</td>
                    <td><input type="date" name="date" id=""></td>
                </tr>
               
                <tr>
                    <td><input type="hidden" name="status" value="Successfull" id=""> </td>
                    <td><input type="hidden"name="user_id"  value="{{$user_id}}" id=""> </td>
                    <td><input type="hidden" name="list_id"  value="{{$id}}" id=""> </td>
                    <td><input type="submit" class="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>