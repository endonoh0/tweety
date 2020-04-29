@component('components.app')
    <div>
        @foreach ($users as $user)
            <a href="{{ $user->profilePath() }}" class="flex items-center mb-5">
                <img src="{{ $user->avatar }}"
                    alt="other users' avatar"
                    width="60"
                    class="mr-4 rounded"
                >

                <div>
                    <h4 class="font-bold">{{ '@' . $user->name }}</h4>
                </div>
            </a>
        @endforeach

        {{ $users->links()  }}
    </div>
@endcomponent
