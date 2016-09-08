<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Purpose</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Purpose</h1>
            <form method = 'get' action = '{{url("purpose")}}'>
                <button class = 'btn btn-danger'>Purpose Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("purpose")}}/{{$purpose->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="purpose">purpose</label>
                    <input id="purpose" name = "purpose" type="text" class="form-control" value="{{$purpose->purpose}}">
                </div>
                
                <div class="form-group">
                    <label for="description">description</label>
                    <input id="description" name = "description" type="text" class="form-control" value="{{$purpose->description}}">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
