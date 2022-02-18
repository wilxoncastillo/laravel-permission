<x-app-layout>
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Notes
        </h2>
    </x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
					<table>
				<thead>
					<th>ID</th>
					<th>Título</th>
					<th>Acción</th>
				</thead>
				<tbody>
					@foreach ($notes as $note)
						<tr>
							<td>{{ $note->id }}</td>
							<td>{{ $note->title }}</td>
							<td>
								@can('notes.create')
									<a href="{{ route('notes.create') }}">Create |</a>
								@endcan
								@can('notes.store')
									<a href="{{ route('notes.store') }}">Store |</a>
								@endcan
								@can('notes.show')
									<a href="{{ route('notes.show', $note) }}">Show |</a>
								@endcan
								@can('notes.edit')
									<a href="{{ route('notes.edit', $note) }}">Edit |</a>
								@endcan
								@can('notes.update')
									<a href="{{ route('notes.update', $note) }}">Update |</a>
								@endcan
								@can('notes.destroy')
									<a href="{{ route('notes.destroy', $note) }}">Destroy</a>
								@endcan
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			
			</div>
		</div>
	</div>
	
	
</x-app-layout>