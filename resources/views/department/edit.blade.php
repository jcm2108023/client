<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Department</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Department</h1>
            <form method = 'get' action = '{{url("department")}}'>
                <button class = 'btn btn-danger'>Department Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("department")}}/{{$department->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="department">department</label>
                    <input id="department" name = "department" type="text" class="form-control" value="{{$department->department}}">
                </div>
                
                <div class="form-group">
                    <label for="hotline">hotline</label>
                    <input id="hotline" name = "hotline" type="text" class="form-control" value="{{$department->hotline}}">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
