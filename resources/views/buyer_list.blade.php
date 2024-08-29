<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/buyer/blist.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/side-navbar.css') }}">
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
                <a style="background-color: #444444" class="buyer-icon left-center" href="{{route('buyer.list')}}"><img src="{{asset('image/buyericon-white.png')}}" width="33px">Buyer</a>
                <a class="buyer-icon left-center" href="{{route('car.list')}}"><img src="{{asset('image/Car-logo.png')}}" width="33px"> Car</a>
            </div>

        </div>

        <div class="card">
            <div class="center-create">
                <img src="{{asset('image/Bmw_logo-removebg-preview.png')}}" width="50px">
                
                <a href="{{ route('buyer.create')}}" class="btn-create"><b>Join Our Team</b></a>
            </div>
            <br>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Buyer</th>
                    <th scope="col">Plat Number</th>
                    <th scope="col">Car</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($buyer as $key => $buy)
                    
                    <tr>
                        <td>{{ $key +1 }}</td>
                        <td>{{ $buy->buyer_name }}</td>
                        <td>{{ $buy->plat_number }}</td>
                        <td>{{ $buy->car->car_name}}</td>
                        <td style="height: 40px">
                            <form method="POST" class="action"  onsubmit="return confirm('Apakah Anda Yakin?');" action="{{ route('buyer-delete', $buy->id) }}">
                                <a href="{{ route('buyer.edit', $buy->id) }}" class="btn-edit">Edit</a>
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn-delete">Delete</button>    
                            </form>
                        </td>
                    </tr>
                    
                </tbody>
                
                @empty
                <div class="alert alert-danger">
                    Data Belum Tersedia. 
                </div>
                @endforelse 
                
            </table>
        </div>

    </div>


</body>
</html>