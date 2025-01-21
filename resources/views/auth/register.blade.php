<div>
    <h1>Register</h1>

    <form action="{{ route('registrar') }}" method="post">
        @csrf

        <div>
            <input name="name" placeholder="Name" value="{{ old('name') }}">
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        
        <br>

        <div>
            <input name="email" placeholder="email" value="{{ old('email') }}">
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
        </div>

        <br>

        <div>
            <input name="email_confirmation" placeholder="email_confirmation">
                @error('email_confirmation')
                    <span>{{ $message }}</span>
                @enderror
        </div>

        <br>

        <div>
            <input type='password' name="password" placeholder="Password">
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
        </div>

        <br>

        <button type="submit">Cadastrar</button>

    </form>
</div>
