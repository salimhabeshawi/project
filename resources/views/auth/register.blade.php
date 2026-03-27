<x-layout>
    <form action="/register" method="POST">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">Register</legend>

            <label class="label">Name</label>
            <input name="name" type="text" class="input" placeholder="Your Name" required />

            <label class="label">Email</label>
            <input name="email" type="email" class="input" placeholder="Your Email" required />

            <label class="label">Password</label>
            <input name="email" type="password" class="input" placeholder="Your Password" required />

            <button class="btn btn-neutral mt-4">Register</button>
        </fieldset>
    </form>
</x-layout>