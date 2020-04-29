@component('components.app')
    <header class="mb-6 relative">
        <div class="relative">
            <img
                src="/images/default-profile-banner.jpg"
                alt="bugs bunny banner"
                class="mb-2"
            >

            <img
                src="/images/image-1.png"
                alt="Avatar of a women"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"
                width="150px"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                <a
                    href=""
                    class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2"
                >
                    Edit Profile
                </a>

                @component('components.follow-button', [
                    'user' => $user
                    ])
                @endcomponent
            </div>
        </div>

        <p class="text-sm">
            Bugs Bunny is the main protagonist of the animated series Looney Tunes and Merrie Melodies and one of the two triagonists in the 2003 live-action/animated film, Looney Tunes: Back in Action, and the deuteragonist in the 1996 live-action/animated film, Space Jam.
        </p>
    </header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endcomponent
