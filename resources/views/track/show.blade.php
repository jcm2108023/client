<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Track</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Track</h1>
            <br>
            <form method = 'get' action = '{{url("track")}}'>
                <button class = 'btn btn-primary'>Track Index</button>
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
                            <b><i>document_id : </i></b>
                        </td>
                        <td>{{$track->document_id}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>fromdepartment : </i></b>
                        </td>
                        <td>{{$track->fromdepartment}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>fromemployee : </i></b>
                        </td>
                        <td>{{$track->fromemployee}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>todepartment : </i></b>
                        </td>
                        <td>{{$track->todepartment}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>toemployee : </i></b>
                        </td>
                        <td>{{$track->toemployee}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>state : </i></b>
                        </td>
                        <td>{{$track->state}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>remarks : </i></b>
                        </td>
                        <td>{{$track->remarks}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
