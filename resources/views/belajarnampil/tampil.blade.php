<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
</head>
<body>
    
    <h1>DATA OPET</h1>

   @foreach ($datasiswa as $data)

       <h1><li>{{ $data }}</li></h1>

   @endforeach

</body>
</html>