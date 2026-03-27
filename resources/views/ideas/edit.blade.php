<x-layout>
	<form method="POST" action="/ideas/{{ $idea->id }}">
		@csrf
		@method('PATCH')

		<div class="col-span-full">
			<label for="description" class="">Edit Your Idea</label>
			<div class="mt-2">
				<textarea id="description" name="description" rows="3"
					class="textarea w-full @error('description') textarea-error @enderror">{{ $idea->description }}</textarea>
				<x-forms.error name="description" />
			</div>
		</div>
		<div class="mt-6 flex items-center gap-x-2">
			<button type="submit" class="btn btn-soft btn-accent">
				Update
			</button>

			{{-- <button type="submit" form="delete-idea-form"
				class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
				Delete
			</button> --}}
		</div>
	</form>

	<form id="delete-idea-form" method="POST" action="/ideas/{{ $idea->id }}">
		@csrf
		@method('DELETE')
	</form>
</x-layout>