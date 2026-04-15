<x-layout>
    <form action="/login" method="POST">
        @csrf

        <fieldset
            class="fieldset bg-base-200 border-base-300 rounded-box w-full max-w-xs border border-base p-4 mx-auto">
            <legend class="fieldset-legend">Login</legend>

            <label class="label">Email</label>
            <input name="email" type="email" class="input w-full" placeholder="Your Email" value="{{ old('email')  }}"
                required />
            <x-forms.error name="email" />

            <label class="label">Password</label>
            <input name="password" type="password" class="input w-full" placeholder="Your Password" required />
            <x-forms.error name="password" />

            <button class="btn btn-neutral mt-4">Login</button>
        </fieldset>
    </form>
</x-layout>