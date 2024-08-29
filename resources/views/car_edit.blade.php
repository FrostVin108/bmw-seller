<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="{{ route('car.update', $car->id) }}" class="edit-input-position">
                
        @csrf
        @method('PUT')

                <div class="nama-style">
                    <label for="exampleInputEmail">Nama Mobil</label><br>
                    <input class="nama-input" type="text" placeholder="Input Nama" name="car_name" value="{{ old('car_name', $car->car_name) }}">
                </div>car_year
    
                <div class="nomor-style">
                    <label for="exampleInputEmail">Tahun Mobil</label><br>
                    <input class="nomor-input" type="text" placeholder="Input Nomer" name="car_year" value="{{ old('car_year', $car->car_year) }}">
                </div>
    
                <div class="button-position">
                    <button type="submit" class="btn-update">Update</button>
                    <button type="reset" class="btn-reset">Reset</button>
                    <a class="btn-return" href="{{ route('car.list')}}">Return</a>
                </div>
    </form>

</body>
</html>