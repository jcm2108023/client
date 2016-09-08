<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Index Document</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Document Index</h1>
            <form class = 'col s3' method = 'get' action = '{{url("document")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Document</button>
            </form>
            <br>
            
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Associate
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    
                    <li><a href="http://dts.buksu.edu.ph/purpose">Purpose</a></li>
                    
                </ul>
            </div>
            
            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    
                    <th>din</th>
                    
                    <th>title</th>
                    
                    <th>description</th>
                    
                    <th>priority</th>
                    
                    <th>type</th>
                    
                    <th>due</th>
                    
                    
                    
                    
                    <th>purpose</th>
                    
                    <th>description</th>
                    
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($documents as $Document)
                    <tr>
                        
                        <td>{{$Document->din}}</td>
                        
                        <td>{{$Document->title}}</td>
                        
                        <td>{{$Document->description}}</td>
                        
                        <td>{{$Document->priority}}</td>
                        
                        <td>{{$Document->type}}</td>
                        
                        <td>{{$Document->due}}</td>
                        
                        
                        
                                                <td>{{$Document->purpose->purpose}}</td>

                                                <td>{{$Document->purpose->description}}</td>

                        
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/document/{{$Document->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/document/{{$Document->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/document/{{$Document->id}}'><i class = 'material-icons'>info</i></a>
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
