<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Document</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Document</h1>
            <form method = 'get' action = '{{url("document")}}'>
                <button class = 'btn btn-danger'>Document Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("document")}}/{{$document->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="din">din</label>
                    <input id="din" name = "din" type="text" class="form-control" value="{{$document->din}}">
                </div>
                
                <div class="form-group">
                    <label for="title">title</label>
                    <input id="title" name = "title" type="text" class="form-control" value="{{$document->title}}">
                </div>
                
                <div class="form-group">
                    <label for="description">description</label>
                    <input id="description" name = "description" type="text" class="form-control" value="{{$document->description}}">
                </div>
                
                <div class="form-group">
                    <label for="priority">priority</label>
                    <input id="priority" name = "priority" type="text" class="form-control" value="{{$document->priority}}">
                </div>
                
                <div class="form-group">
                    <label for="type">type</label>
                    <input id="type" name = "type" type="text" class="form-control" value="{{$document->type}}">
                </div>
                
                <div class="form-group">
                    <label for="due">due</label>
                    <input id="due" name = "due" type="text" class="form-control" value="{{$document->due}}">
                </div>
                
                
                <div class="form-group">
                    <label>purposes Select</label>
                    <select name = 'purpose_id' class = "form-control">
                        @foreach($purposes as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
