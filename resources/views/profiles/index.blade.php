@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.flko7-1.fna.fbcdn.net/v/t51.2885-19/s320x320/93266276_1330131793845699_2774957101267550208_n.jpg?tp=1&_nc_ht=instagram.flko7-1.fna.fbcdn.net&_nc_ohc=i2ZO0M8LTJEAX-v_WIo&edm=ABfd0MgAAAAA&ccb=7-4&oh=683ed758e72c6f79c6bbc2f9e5c4b094&oe=60902E32&_nc_sid=7bff83" style="border-radius: 50%; height: 200px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>157</strong> posts</div>
                <div class="pr-5"><strong>624</strong> followers</div>
                <div class="pr-5"><strong>86</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}
            </div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4 ">
            <img src="https://instagram.flko7-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/140313115_816493935571524_8690887886328323569_n.jpg?tp=1&_nc_ht=instagram.flko7-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=G7NfuWsP_SMAX8TyiTK&edm=APU89FAAAAAA&ccb=7-4&oh=1c385ca017a20d59bc85f10f44d5910d&oe=60919F72&_nc_sid=86f79a" class="w-100">
        </div>

        <div class="col-4">
            <img src="https://instagram.flko7-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/135035974_214709073647337_1551398997116896927_n.jpg?tp=1&_nc_ht=instagram.flko7-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=YSybjTCdsD0AX_LO5sU&edm=APU89FAAAAAA&ccb=7-4&oh=8eb97793268b2242d402d64587a0011f&oe=60915F3B&_nc_sid=86f79a" class="w-100">
        </div>

        <div class="col-4">
            <img src="https://instagram.flko7-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c134.0.811.811a/s640x640/139425185_159592905685662_1593239483771281038_n.jpg?tp=1&_nc_ht=instagram.flko7-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=V53esjujHIoAX-2pHTK&edm=APU89FAAAAAA&ccb=7-4&oh=8138f32c72f54b28bf285a43ba1a0231&oe=6091391B&_nc_sid=86f79a" class="w-100">
        </div>


    </div>
</div>
@endsection