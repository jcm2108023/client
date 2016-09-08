<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Client</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Client</h1>
            <br>
            <form method = 'get' action = '{{url("client")}}'>
                <button class = 'btn btn-primary'>Client Index</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>eid : </i></b>
                        </td>
                        <td>{{$client->eid}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>name : </i></b>
                        </td>
                        <td>{{$client->name}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>mobile : </i></b>
                        </td>
                        <td>{{$client->mobile}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>email : </i></b>
                        </td>
                        <td>{{$client->email}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>department_id : </i></b>
                        </td>
                        <td>{{$client->department_id}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>position_id : </i></b>
                        </td>
                        <td>{{$client->position_id}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>user_id : </i></b>
                        </td>
                        <td>{{$client->user_id}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
