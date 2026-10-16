<!-- Register Form -->
<x-layouts.auth>
    <form method="post" enctype="multipart/form-data" class="space-y-4 w-96">
        @csrf
        <x-input id="name" label="Name" icon="icon-[tabler--user]" />
        <x-input id="email" label="E-mail" icon="icon-[tabler--mail]" type="email" />
        <x-input minLength="8" id="password" label="Password" icon="icon-[tabler--lock]" type="password" />
        <x-input minLength="8" id="password_confirmation" label="Confirm Password" icon="icon-[tabler--lock]"
            type="password" />
        <div class="max-w-sm input-floating">
            <label class="label-text input-floating-label" for="avatar"> Profile Photo </label>
            <input type="file" required accept="image/*" class="input" id="avatar" name="avatar" />
        </div>
        <!-- @error('avatar')
            <div class="text-error helper-text ps-3 mb-2">
                {{ $message }}
            </div>
        @enderror

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>

                    </li>
                @endforeach
            </ul>
        @endif -->

        <button type="submit" class="btn btn-primary w-full mt-4"> Register </button>
        <span> Have an account? <a href="/login" class="link link-animated"> login </a> </span>
    </form>
</x-layouts.auth>