<form action="{{ $action }}" method="POST">
    @csrf
    @if($method)
        @method($method)
    @endif

    <!-- Setup Field -->
    <label for="setup">Setup</label>
    <input
        type="text"
        name="setup"
        id="setup"
        value="{{ old('setup', $joke->setup ?? '') }}"
        placeholder="Enter the joke setup"
        aria-invalid="{{ $errors->has('setup') ? 'true' : (old('setup') ? 'false' : '') }}"
        aria-describedby="setup-helper"
    >
    @error('setup')
        <small id="setup-helper" class="invalid-feedback">{{ $message }}</small>
    @enderror

    <!-- Punchline Field -->
    <label for="punchline">Punchline</label>
    <input
        type="text"
        name="punchline"
        id="punchline"
        value="{{ old('punchline', $joke->punchline ?? '') }}"
        placeholder="Enter the punchline"
        aria-invalid="{{ $errors->has('punchline') ? 'true' : (old('punchline') ? 'false' : '') }}"
        aria-describedby="punchline-helper"
    >
    @error('punchline')
        <small id="punchline-helper" class="invalid-feedback">{{ $message }}</small>
    @enderror

    <button type="submit">{{ $buttonText }}</button>
</form>
