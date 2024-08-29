<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/buyer/bedit.css') }}" >
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
                <a class="buyer-icon left-center" href="{{route('car.list')}}"><img src="{{asset('image/Car-logo.png')}}" width="33px"> Car</a>
            </div>

        </div>
    
    
    
        <div class="card">
            <div class="logo">
                <img src="{{asset('image/Bmw_logo-removebg-preview.png')}}" width="50px" height="50px">
                <h4><b>BMW Cooperation</b></h4>
            </div>
            <form method="POST" action="{{ route('buyer.update', $buyer->id) }}" class="create-position">
                @csrf
                @method('put')
                    <div class="buyer-number">
                        <div class="buyer-style">
                            <label for="exampleInputEmail">Nama Buyer</label><br>
                            <input class="buyer-style-input" type="text" placeholder="Input Nama" name="buyer_name" value="{{ old('buyer_name', $buyer->buyer_name) }}">
                        </div>
                        <div class="number-style">
                            <label for="exampleInputEmail">Plat Number</label><br>
                            <input class="number-style-input" type="text" placeholder="Input Nomer" name="plat_number" value="{{ old('plat_number', $buyer->plat_number) }}">
                        </div>
                        
                        <div class="button-position">
                            <button type="submit" class="btn-submit">Submit</button>
                            <a class="btn-return" href="{{ route('buyer.list')}}">Return</a>
                        </div>  
                    </div>
        
                    <div class="type">
                        <label for="exampleInputEmail" class="tipe-mobil">Tipe Mobil</label><br>
                        <select name="car_id" class="form-control scroll-select" size="10"  value="{{ old('car_id', $buyer->car_id) }}">
                            <option value="{{ old('car_id', $buyer->car_id) }}" style="background-color: rgb(0, 132, 255); color: white;"    selected>{{old('car_id', $buyer->car->car_name)}}</option>
                            @foreach($car as $car)
                                <option value="{{$car->id}}">{{$car->car_name}}</option>
                            @endforeach 
                        </select>
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