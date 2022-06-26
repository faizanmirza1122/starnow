@extends('layouts.master')


@section('title')
    <title>Public Profile</title>
@endsection

<style>
    .personal-info {
        border-bottom: 1px solid gray;
        padding-bottom: 10px;
    }

    .image:hover {
        opacity: 0.8;
        cursor: pointer;
    }
</style>

@section('content')
    <div class="container" style="padding:20px; margin:20px;">
        {{-- personal information --}}
        <div style="display:flex;justify-content:space-around;align-items:center; width:100%">
            <div style="width:30%">
                <div class="profile-image">
                    @if ($user->profile_photo)
                        <img style="width:250px;height:250px; border-radius: 50%;"
                            src="{{ asset('storage/profiles/' . $user->profile_photo) }}" alt="Amelia" />
                    @else
                        <img class="width:250px; border-radius: 50%;" src="https://via.placeholder.com/300" alt="Amelia" />
                    @endif
                </div>
                <div>
                    <h1>{{ $user->fullname }}</h1>
                </div>
            </div>
            <div style="width:70%;">
                <div>
                    <h1>Personal Information</h1>
                </div>
                <div style="display:flex; width:100%;">
                    <div style="width:45%;">
                        <p class="personal-info"><strong>Username: </strong> {{ $user->username }}</p>
                        <p class="personal-info"><strong>Email: </strong> {{ $user->email }}</p>
                        <p class="personal-info"><strong>Phone: </strong> {{ $user->phone }}</p>
                        <p class="personal-info"><strong>Gender: </strong> {{ ucfirst($user->gender) }}</p>
                    </div>
                    <div style="width:45%;">
                        <p class="personal-info"><strong>Date of birth: </strong> {{ $user->dob }}</p>
                        <p class="personal-info"><strong>Country: </strong> {{ $user->oneCountry->name }}</p>
                        <p class="personal-info"><strong>Height: </strong> {{ $user->height }}</p>
                        <p class="personal-info"><strong>Age: </strong> {{ $user->worker->age }}</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- media --}}
        <div style="display:flex; width:100%;margin-bottom:30px;">
            <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                <h1 style="font-size: 40px; background-color: #565656;color:white; padding: 0 10px;">
                    Media
                </h1>
            </div>
        </div>

        {{-- Images --}}
        <div style="display:flex; width:100%">
            <div style="width:50%;">
                <div style="display:flex; width:100%;margin-bottom:60px">
                    <div style="width: 100%; height: 20px; ; text-align: center">
                        <h1 style="font-size: 40px;   padding: 0 10px;">
                            Images
                        </h1>
                    </div>
                </div>
                <div style="display:flex; width:100%;border-right:2px solid darkgray;paddign:5px;">
                    @foreach ($user->images as $image)
                        <div style="margin:5px" class="image" >
                            <img width="300" height="200"
                                src="{{ asset('storage/images/' . $image->image) }}" alt="Amelia" />
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- Videos --}}
            <div style="width:50%;">
                <div style="display:flex; width:100%;margin-bottom:60px">
                    <div style="width: 100%; height: 20px;  text-align: center">
                        <h1 style="font-size: 40px;   padding: 0 10px;">
                            Videos
                        </h1>
                    </div>
                </div>
                <div style="display:flex; width:100%;bottom-left:2px solid darkgray;paddign:5px;">
                    @foreach ($user->videos as $video)
                        <div style="margin:5px" class="image">
                            <iframe width="300" height="200"
                            src="https://www.youtube.com/embed/{{ $video->video_id }}" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection
