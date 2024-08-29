<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/car/list.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/side-navbar.css') }}">
    <title>car list</title>
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
        <div class="center-create">
            <img src="{{asset('image/bmw-logo.webp')}}" width="60px">
            <a href="carcreate" class="btn-create"><b>Add New Car</b></a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col" style="width: 40%">Nama Mobil</th>
                    <th scope="col">Mobil Keluaran</th>
                    <th scope="col" style="width: 25%">Action</th>
                </tr>
    
            </thead>
            <tbody>
                @forelse ($car as $key => $car)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$car->car_name}}</td>
                        <td class="car-year">{{$car->car_year}}</td>
                        <td style="height: 40px">
                            
                            <form class="action" method="POST" action="{{ route('car.delete', $car->id) }}" onsubmit="return confirm('Apakah Anda Yakin?');" >
                                <a href="{{route('car.edit', $car->id)}}" class="btn-edit">Edit</a>
                                
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn-delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div>
                        <h1>Belum Ada Mobil</h1>
                    </div>
                @endforelse
        </table>
    </div>

</div>
</body>
</html>