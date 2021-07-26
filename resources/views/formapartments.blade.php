<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Product</title>
</head>
<body>
<h2>Sweet Home</h2>
<form action="" method="post">
    @csrf
    <input type="text" name="tenchungcu"value="{{$data ? $data->tenchungcu : ''}}">
    <input type="text" name="diachi"value="{{$data ? $data->diachi : ''}}">
    <input type="text" name="giaban"value="{{$data ? $data->giaban : ''}}">
    <input type="text"name="thongtinchung"value="{{$data ? $data->thongtinchung : ''}}">
    <input type="text"name="thongtinchitiet"value="{{$data ? $data->thongtinchitiet : ''}}">
    <input type="text"name="hinhdaidien"value="{{$data ? $data->hinhdaidien : ''}}">
    <input type="text"name="trangthaiban"value="{{$data ? $data->trangthaiban : ''}}">
    <input type="submit" name="submit">
</form>
</body>
</html>
