<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Jobtitle</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Jobtitle</h1>
            <form method = 'get' action = '{{url("jobtitle")}}'>
                <button class = 'btn btn-danger'>Jobtitle Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("jobtitle")}}/{{$jobtitle->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="jobtitle">jobtitle</label>
                    <input id="jobtitle" name = "jobtitle" type="text" class="form-control" value="{{$jobtitle->jobtitle}}">
                </div>
                
                <div class="form-group">
                    <label for="description">description</label>
                    <input id="description" name = "description" type="text" class="form-control" value="{{$jobtitle->description}}">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
