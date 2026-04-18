<x-layout>
    <form action="/register" method="POST">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-full max-w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">Register</legend>

            <label class="label">Name</label>
            <input name="name" type="text" class="input w-full" placeholder="Your Name" value="{{ old('name')  }}"
                required />

            <label class="label">Email</label>
            <input name="email" type="email" class="input w-full" placeholder="Your Email" value="{{ old('email')  }}"
                required />

            <label class="label">Password</label>
            <input name="password" type="password" class="input w-full" placeholder="Your Password" required />

            <button class="btn btn-neutral mt-4" data-test="register-button">Register</button>
        </fieldset>
    </form>
</x-layout>