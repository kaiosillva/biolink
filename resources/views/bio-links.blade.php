<x-layout.app>
    <x-container>

        <div class="text-center space-y-2 w-2/3">
            <x-img src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('images/default-avatar.png') }}"
                alt="Profile Photo" />

            <div class="font-bold text-2xl tracking-wider"> {{ $user->name }} </div>
            <div class="text-sm opacity-80 mb-6">{{ $user->description }}</div>
            <ul class="space-y-2">
                @foreach ($user->links as $link)
                    <li class="flex items-center gap-2 justify-center">
                        <x-button href="{{ $link->link }}" block outline info target="_blank">
                            {{ $link->name }}
                        </x-button>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>


<x-layout.app>
    <div>
        <x-img src="/storage/{{ $user->photo }}" alt="Photo Profile" />
        <h2>{{ $user->name }} :: {{ $user->id }}</h2>
        <h3>{{ $user->description }}</h3>
        <ul>
            @foreach ($user->links as $link)
                <li>
                    <a href="{{ $link->link }}" target='_blank'>
                        {{ $link->id }}.{{ $link->name }}
                    </a>

                </li>
            @endforeach
        </ul>
    </div>
</x-layout.app>
