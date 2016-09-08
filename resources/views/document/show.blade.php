<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Document</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Document</h1>
            <br>
            <form method = 'get' action = '{{url("document")}}'>
                <button class = 'btn btn-primary'>Document Index</button>
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
                            <b><i>din : </i></b>
                        </td>
                        <td>{{$document->din}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>title : </i></b>
                        </td>
                        <td>{{$document->title}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>description : </i></b>
                        </td>
                        <td>{{$document->description}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>priority : </i></b>
                        </td>
                        <td>{{$document->priority}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>type : </i></b>
                        </td>
                        <td>{{$document->type}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>due : </i></b>
                        </td>
                        <td>{{$document->due}}</td>
                    </tr>
                    

                                                
                        
                        <tr>
                        <td>
                            <b><i>purpose : </i><b>
                        </td>
                        <td>{{$document->purpose->purpose}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>description : </i><b>
                        </td>
                        <td>{{$document->purpose->description}}</td>
                        </tr>
                        
                        
                        
                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
