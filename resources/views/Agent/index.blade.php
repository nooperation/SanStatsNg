<html>
    <head>
        <title>Agent Index</title>
    </head>
    <body>
        <h1>Agent Index</h1>
        <ul>
            @foreach ($agents as $agent)
                <li><a href="/agent/{{$agent->id}}">{{$agent->name}}</a></li>
            @endforeach
        </ul>
    </body>
</html>
