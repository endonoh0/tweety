@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img
            src="/images/default-profile-banner.jpg"
            alt="bugs bunny banner"
            class="mb-2"
        >

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow Me</a>
            </div>
        </div>

        <p class="text-sm">
            Bugs Bunny is the main protagonist of the animated series Looney Tunes and Merrie Melodies and one of the two triagonists in the 2003 live-action/animated film, Looney Tunes: Back in Action, and the deuteragonist in the 1996 live-action/animated film, Space Jam.
        </p>

        <img
            src="/images/image-1.png"
            alt="Avatar of a women"
            class="rounded-full mr-2 absolute"
            style="width: 150px; left: calc(50% - 75px); top: 138px;"
        >
    </header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ]);
@endsection
