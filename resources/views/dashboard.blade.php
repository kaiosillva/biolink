<div>
    <h1>Dashboard</h1>
    <h2>{{ auth()->user()->name }} :: {{ auth()->user()->id }}</h2>
    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif
    <a href="{{ route('links.create') }}">Criar</a>
    <ul>
        @foreach ($links as $link)
            <li style="display:flex">
                @unless ($loop->last)
                    <form action="{{ route('link.down', $link) }}" method="post">
                        @csrf
                        @method('PATCH')

                        <button>⬇️</button>
                    </form>
                @endunless
                @unless ($loop->first)
                    <form action="{{ route('link.up', $link) }}" method="post">
                        @csrf
                        @method('PATCH')

                        <button>⬆️</button>
                    </form>
                @endunless
                <a href="{{ route('links.edit', $link) }}">{{ $link->id }}.{{ $link->name }}</a>

                <form action="{{ route('link.destroy', $link) }}" method="post" onsubmit="return confirm('Tem Certeza?')">
                    @csrf
                    @method('DELETE')

                    <button>Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
