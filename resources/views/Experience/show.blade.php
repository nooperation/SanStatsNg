<html>
    <head>
        <title>Experience Index</title>
    </head>
    <body>
        <h1>Experience {{$experience->uuid}}</h1>
        <table>
            <tr><td>uuid</td><td>{{ $experience->uuid }}</td></tr>
            <tr><td>name</td><td>{{ $experience->name }}</td></tr>
            <tr><td>description</td><td>{{ $experience->description }}</td></tr>
            <tr><td>uri</td><td>{{ $experience->uri }}</td></tr>
            <tr><td>compat_version</td><td>{{ $experience->compat_version }}</td></tr>
            <tr><td>handle</td><td>{{ $experience->handle }}</td></tr>
            <tr><td>scene_asset_id</td><td>{{ $experience->scene_asset_id }}</td></tr>
            <tr><td>thumbnail_asset_id</td><td>{{ $experience->thumbnail_asset_id }}</td></tr>
            <tr><td>curation</td><td>{{ $experience->curation }}</td></tr>
            <tr><td>image_max</td><td>{{ $experience->image_max }}</td></tr>
            <tr><td>is_published</td><td>{{ $experience->is_published }}</td></tr>
            <tr><td>access_controls</td><td>{{ $experience->access_controls }}</td></tr>
            <tr><td>is_listed</td><td>{{ $experience->is_listed }}</td></tr>
            <tr><td>agent_id</td><td>{{ $experience->agent_id }}</td></tr>
        </table>
    </body>
</html>
