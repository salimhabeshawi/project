<x-layout title="Home">
		<h1 style="color: navajowhite">Hello, World</h1>
		<p style="color: honeydew">
				{{ $greeting }}, {{ $person }}!
		</p>
		@dump($shopping_list)
</x-layout>
