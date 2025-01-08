<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
    
    @foreach ($barangs as $data)

       <h3><li>{{ $data->id }}</li></h3>
       <h3><li>{{ $data->title }}</li></h3>
       <h3><li>{{ $data->content }}</li></h3>
       <hr>
       
    @endforeach

</body>
</html>