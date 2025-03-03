<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/car/edit.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/side-navbar.css') }}">
    <title>Document</title>
</head>
<body>

<div class="conten-control">

        <div class="side-navbar">
            <div class="center">
                <img src="{{asset('image/Bmw-White-Logo-Remobe-bg.png')}}" width="150px">
                  
            </div>
            <hr>
            
            <div class="buyer-car-list">
                <a class="buyer-icon left-center" href="{{route('buyer.list')}}"><img src="{{asset('image/buyericon-white.png')}}" width="33px">Buyer</a>
                <a style="background-color: #444444" class="buyer-icon left-center" href="{{route('car.list')}}"><img src="{{asset('image/Car-logo.png')}}" width="33px"> Car</a>
            </div>

        </div>

    
        <div class="card">
            <div class="logo">
                <img src="{{asset('image/Bmw_logo-removebg-preview.png')}}" width="50px" height="50px">
                <h4><b>BMW Cooperation</b></h4>
            </div>
                <form method="POST" action="{{ route('car.update', $car->id) }}" class="create-position">
                            
                    @csrf
                    @method('PUT')

                    <div class="car-year">
                        <div class="car-style">
                                <label for="exampleInputEmail">Nama Mobil</label><br>
                                <input class="car-style-input" type="text" placeholder="Input Nama" name="car_name" value="{{ old('car_name', $car->car_name) }}">
                            </div>
                
                        <div class="year-style">
                                <label for="exampleInputEmail">Tahun Mobil</label><br>
                                <input class="year-style-input" type="text" placeholder="Input Nomer" name="car_year" value="{{ old('car_year', $car->car_year) }}">
                        </div>
                    </div>

                            <div class="button-position">
                                <button type="submit" class="btn-submit">Update</button>
                                <button type="reset" class="btn-reset">Reset</button>
                                <a class="btn-return" href="{{ route('car.list')}}">Return</a>
                            </div>
                </form>
            
                <div class="banner">
                    <i>BMW Cooperation</i>
                    <img src="{{asset('image/bmw-m-removebg-preview.png')}}" width="40px">
                </div>
        
        </div>
    
</div>
</body>
</html>