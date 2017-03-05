<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Eloquent Macros </title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { padding-top:50px; } /* add some padding to the top of our site */
    </style>
</head>
<body>
<div class="container">
    <div class="form-group">

        @foreach($users as $user)
            <h2>{{ $user->name }}</h2>
            <small>{{ $user->email }}</small>
            <i> {{ $user->name }}'s posts </i>
            <br>
            @foreach($user->posts as $post)
                <h4> {{ $post->post }}</h4>
                <small> Created at: {{ $post->created_at }}</small>
                <small> Updated at: {{ $post->updated_at }}</small>
            @endforeach
            <hr>
        @endforeach

    </div>
</div>
</body>
</html>
