<x-layout.app>
    <x-container>
        <div class="absolute top-10 left-10 flex flex-col gap-4">
            <x-button :href="route('profile')" outline>Update Profile</x-button>
            <x-button :href="route('links.create')" outline>Create a new link</x-button>
            <x-button :href="route('logout')" outline>Logout</x-button>
        </div>

        <div class="text-center space-y-2 w-2/3">
            <x-img src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('images/default-avatar.png') }}"
                alt="Profile Photo" />

            <div class="font-bold text-2xl tracking-wider"> {{ $user->name }} </div>
            <div class="text-sm opacity-80 mb-6">{{ $user->description }}</div>
            <ul class="space-y-2">
                @foreach ($links as $link)
                    <li class="flex items-center gap-2 justify-center">
                        @unless ($loop->last)
                            <x-form :route="route('link.down', $link)" patch>
                                <x-button ghost>
                                    <x-icones.arrow-down class="w-6 h-6" />
                                </x-button>
                            </x-form>
                        @else
                            <x-button disabled ghost>
                                <x-icones.arrow-down class="w-6 h-6" />
                            </x-button>
                        @endunless
                        @unless ($loop->first)
                            <x-form :route="route('link.up', $link)" patch>
                                <x-button ghost>
                                    <x-icones.arrow-up class="w-6 h-6" />
                                </x-button>
                            </x-form>
                        @else
                            <x-button disabled ghost>
                                <x-icones.arrow-up class="w-6 h-6" />
                            </x-button>
                        @endunless
                        <x-button href="{{ route('links.edit', $link) }}" block outline info>
                            {{ $link->name }}
                        </x-button>
                        <x-form :route="route('link.destroy', $link)" delete onsubmit="return confirm('Tem Certeza?')">
                            <x-button outline ghost>
                                <x-icones.trash class="w-6 h-6" />
                            </x-button>

                        </x-form>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>
