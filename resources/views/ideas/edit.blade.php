<x-layout>
	<form method="POST" action="/ideas/{{ $idea->id }}">
		@csrf
		@method('PATCH')

		<fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-full max-w-xs border border-base p-4 mx-auto">
			<legend class="fieldset-legend">Edit Idea</legend>

			<label for="description" class="label">Description</label>
			<textarea id="description" name="description" rows="3" placeholder="Update your idea"
				class="textarea w-full @error('description') textarea-error @enderror"
				required>{{ old('description', $idea->description) }}</textarea>
			<x-forms.error name="description" />

			<button type="submit" class="btn btn-neutral mt-4">Update</button>
		</fieldset>
	</form>

	<form id="delete-idea-form" method="POST" action="/ideas/{{ $idea->id }}">
		@csrf
		@method('DELETE')
	</form>
</x-layout>