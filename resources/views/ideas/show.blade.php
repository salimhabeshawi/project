<x-layout>
	<div class="mt-6 text-white">
		<h1 class="font-bold">Your Idea</h1>

		<div class="mt-6">
			{{ $idea->description }}
		</div>

		<div class="mt-6">
			<a href="/ideas/{{ $idea->id }}/edit">
				<button type="submit"
					class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
					Edit
				</button>
			</a>

			<a href="/ideas/{{ $idea->id }}/edit">
				<button type="submit"
					class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
					Delete
				</button>
			</a>
		</div>
</x-layout>
