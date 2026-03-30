<x-layout>
	<form method="POST" action="/ideas">
		@csrf

		<fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border border-base p-4 mx-auto">
			<legend class="fieldset-legend">Create New Idea</legend>

			<label for="description" class="label">Description</label>
			<textarea id="description" name="description" rows="3" placeholder="Have an idea you wanna save for later?"
				class="textarea w-full @error('description') textarea-error @enderror"
				required>{{ old('description') }}</textarea>
			<x-forms.error name="description" />

			<button type="submit" class="btn btn-neutral mt-4">Save</button>
		</fieldset>
	</form>
</x-layout>