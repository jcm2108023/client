<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Create Track</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Create Track</h1>
            <form method = 'get' action = '{{url("track")}}'>
                <button class = 'btn btn-danger'>Track Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("track")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="document_id">document_id</label>
                    <input id="document_id" name = "document_id" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="fromdepartment">fromdepartment</label>
                    <input id="fromdepartment" name = "fromdepartment" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="fromemployee">fromemployee</label>
                    <input id="fromemployee" name = "fromemployee" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="todepartment">todepartment</label>
                    <input id="todepartment" name = "todepartment" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="toemployee">toemployee</label>
                    <input id="toemployee" name = "toemployee" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="state">state</label>
                    <input id="state" name = "state" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="remarks">remarks</label>
                    <input id="remarks" name = "remarks" type="text" class="form-control">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
