<div class="bg-blue-100 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @forelse (auth()->user()->follows as $user)
            <li class="mb-4">
                <div>
                    <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                        <img
                            src="/images/image-1.png"
                            alt="Avatar of a women"
                            class="rounded-full mr-2"
                            width="40"
                            height="40"
                        >
                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @empty
            <p>No Friends yet...</p>
        @endforelse
    </ul>
</div>
