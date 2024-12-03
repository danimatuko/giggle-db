<x-layout>
    <header>
        <h2>Create a New Joke</h2>
    </header>

    <form action="/jokes" method="POST">
        @csrf

        <!-- Setup Field -->
        <label for="setup">Setup</label>
        <input
            type="text"
            name="setup"
            id="setup"
            value="{{ old('setup') }}"
            aria-invalid="{{ $errors->has('setup') ? 'true' : (old('setup') ? 'false' : '') }}"
            aria-describedby="setup-helper"
            placeholder="Enter the joke setup"
        >
        <small id="setup-helper" class="invalid-feedback">
            @if ($errors->has('setup'))
                {{ $errors->first('setup') }}
            @endif
        </small>

        <!-- Punchline Field -->
        <label for="punchline">Punchline</label>
        <input
            type="text"
            name="punchline"
            id="punchline"
            value="{{ old('punchline') }}"
            aria-invalid="{{ $errors->has('punchline') ? 'true' : (old('punchline') ? 'false' : '') }}"
            aria-describedby="punchline-helper"
            placeholder="Enter the punchline"
        >
        <small id="punchline-helper" class="invalid-feedback">
            @if ($errors->has('punchline'))
                {{ $errors->first('punchline') }}
            @endif
        </small>

        <button type="submit">Create Joke</button>
    </form>
</x-layout>
