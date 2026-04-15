<x-layout>
	<div class="card bg-neutral p-6">
		<div>
			{{ $idea->description }}
		</div>

		<div class="mt-6 flex flex-wrap gap-2">
			<a href="/ideas/{{ $idea->id }}/edit">
				<button type="submit" class=" btn btn-soft btn-primary">
					Edit
				</button>
			</a>

			<button type="submit" form="delete-idea-form" class="btn btn-soft btn-error">
				Delete
			</button>
		</div>

		<form id="delete-idea-form" method="POST" action="/ideas/{{ $idea->id }}">
			@csrf
			@method('DELETE')
		</form>
</x-layout>