<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Car</title>
</head>
<body>
    <form method="POST" action="{{ route('car.store') }}" class="create-position">
        @csrf
        @method('post')
            <div class="nama-style">
                <label for="exampleInputEmail">Nama Mobil</label><br>
                <input class="nama-input" type="text" placeholder="Input Nama" name="car_name">
            </div>

            <div class="nomor-style"">
                <label for="exampleInputEmail">Tahun Mobil</label><br>
                <input class="nomor-input" type="text" placeholder="Input Nomer" name="car_year">
            </div>

            <div class="button-position">
                <button type="submit" class="btn-submit">Submit</button>
                <a class="btn-return" href="{{ route('car.list')}}">Return</a>
            </div>  
    </form>   
</body>
</html>