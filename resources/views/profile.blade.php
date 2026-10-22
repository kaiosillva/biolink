<x-layout.app>
    <x-container>
        <x-card title="Profile">
            <x-form :route="route('profile')" put id="form" enctype="multipart/form-data">
                <div class="flex gap-2 items-center">
                    <x-img
                        src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('images/default-avatar.png') }}"
                        alt="Profile Photo" />
                    <x-file-input name="photo" />
                </div>

                <x-input name="name" placeholder="Nome" value="{{ old('name', $user->name) }}" />

                <x-textarea name="description">
                    {{ old('description', $user->description) }}
                </x-textarea>

                <x-input name="handler" prefix="biolinks.com.br/" placeholder="@seulink"
                    value="{{ old('handler', $user->handler) }}" />
            </x-form>

            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancel</x-a>
                <x-button type="submit" form="form">Update profile</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
