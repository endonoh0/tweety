<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @foreach (range(1, 8) as $index)
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <img
                    src="images/image-1.png"
                    alt="Avatar of a women"
                    class="rounded-full mr-2"
                >

                Jon Doe
            </div>
        </li>
    @endforeach
</ul>
