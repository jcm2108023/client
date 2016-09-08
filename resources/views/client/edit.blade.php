<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Client</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Client</h1>
            <form method = 'get' action = '{{url("client")}}'>
                <button class = 'btn btn-danger'>Client Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("client")}}/{{$client->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="eid">eid</label>
                    <input id="eid" name = "eid" type="text" class="form-control" value="{{$client->eid}}">
                </div>
                
                <div class="form-group">
                    <label for="name">name</label>
                    <input id="name" name = "name" type="text" class="form-control" value="{{$client->name}}">
                </div>
                
                <div class="form-group">
                    <label for="mobile">mobile</label>
                    <input id="mobile" name = "mobile" type="text" class="form-control" value="{{$client->mobile}}">
                </div>
                
                <div class="form-group">
                    <label for="email">email</label>
                    <input id="email" name = "email" type="text" class="form-control" value="{{$client->email}}">
                </div>
                
                <div class="form-group">
                    <label for="department_id">department_id</label>
                    <input id="department_id" name = "department_id" type="text" class="form-control" value="{{$client->department_id}}">
                </div>
                
                <div class="form-group">
                    <label for="position_id">position_id</label>
                    <input id="position_id" name = "position_id" type="text" class="form-control" value="{{$client->position_id}}">
                </div>
                
                <div class="form-group">
                    <label for="user_id">user_id</label>
                    <input id="user_id" name = "user_id" type="text" class="form-control" value="{{$client->user_id}}">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
