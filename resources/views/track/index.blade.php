<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Index Track</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Track Index</h1>
            <form class = 'col s3' method = 'get' action = '{{url("track")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Track</button>
            </form>
            <br>
            
            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    
                    <th>document_id</th>
                    
                    <th>fromdepartment</th>
                    
                    <th>fromemployee</th>
                    
                    <th>todepartment</th>
                    
                    <th>toemployee</th>
                    
                    <th>state</th>
                    
                    <th>remarks</th>
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($tracks as $Track)
                    <tr>
                        
                        <td>{{$Track->document_id}}</td>
                        
                        <td>{{$Track->fromdepartment}}</td>
                        
                        <td>{{$Track->fromemployee}}</td>
                        
                        <td>{{$Track->todepartment}}</td>
                        
                        <td>{{$Track->toemployee}}</td>
                        
                        <td>{{$Track->state}}</td>
                        
                        <td>{{$Track->remarks}}</td>
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/track/{{$Track->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/track/{{$Track->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/track/{{$Track->id}}'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class = 'AjaxisModal'>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script> var baseURL = "{{URL::to('/')}}"</script>
<script src = "{{ URL::asset('js/AjaxisBootstrap.js')}}"></script>
<script src = "{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>
</html>
