<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <a href="{{ $tweet->user->profilePath() }}">
        <div class="mr-2 flex-shrink-0">
            <img
                src="{{ $tweet->user->avatar }}"
                alt="your avatar"
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
        </div>
    </a>

    <div>
        <h5 class="font-bold mb-4">
            <a href="{{ $tweet->user->profilePath() }}">
                {{ $tweet->user->name }}
            </a>
        </h5>

        <p class="text-sm mb-3">
            {{ $tweet->body }}
        </p>

        @auth
            @component ('components.like-buttons', [
                'tweet' => $tweet
            ])
            @endcomponent
        @endauth
    </div>
</div>
