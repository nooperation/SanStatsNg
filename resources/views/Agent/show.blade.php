<html>
    <head>
        <title>Agent Index</title>
    </head>
    <body>
        <h1>Agent {{$agent->handle}}</h1>
        <table>
            <tr><td>UUID</td><td>{{$agent->uuid}}</td></tr>
            <tr><td>handle</td><td>{{$agent->handle}}</td></tr>
            <tr><td>name</td><td>{{$agent->name}}</td></tr>
            <tr><td>created_at</td><td>{{$agent->created_at}}</td></tr>
            <tr><td>updated_at</td><td>{{$agent->updated_at}}</td></tr>
        </table>
    </body>
</html>
