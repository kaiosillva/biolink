<div>
    <h1>Profile</h1>
    @if ($message = session()->get('messagem'))
        <div>{{ $message }}</div>
    @endif

    <form action="{{ route('profile') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <img src="/storage/{{ $user->photo }}" alt="">
            <input type="file" name="photo" />
        </div>

        <div>
            <input name="name" placeholder="Nome" value="{{ old('name'), $user->name }}" />
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <textarea name="description" placeholder="Resumo">{{ old('description'), $user->description }}</textarea>
            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <span>biolink.com.br/</span>
            <input name="handler" placeholder="@seulink" value="{{ old('handler'), $user->handle }}"></input>
            @error('handler')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <a href="{{ route('dashboard') }}">Cancelar</a>
        <button>Update</button>
    </form>
</div>
