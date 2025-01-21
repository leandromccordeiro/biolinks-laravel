<div>
    <h1>login</h1>

    <form action="{{ route('logar') }}" method="post">
        @csrf

        <div>
            <input name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
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

        <button type="submit">Logar</button>


    </form>
</div>
