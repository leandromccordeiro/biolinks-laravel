<div>
    <h1>Criar Link</h1>

    @if($message = session()->get('mensagem'))
        <div>{{ $message }}</div>
    @endif


    <form action="{{ route('links.create') }}" method="post">
        @csrf

        <div>
            <input name="link" placeholder="Link" value="{{ old('link') }}">
            @error('link')
                <span>{{ $message }}</span>
            @enderror
        </div>
        
        <br>

        <div>
            <input name="name" placeholder="Name" value="{{ old('name') }}">
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
        </div>

        <br>

        <button type="submit">Salvar</button>

    </form>
</div>
