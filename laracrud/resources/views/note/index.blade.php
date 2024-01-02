@extends('layouts.app')

@section('content')
<a href="{{ route('note.create') }}" class="create-note-link">Create New Note</a>
<ul class="note-list">
    @forelse ($notes as $note)
        <li class="note-item fade-in">
            <a href="{{ route('note.show', $note->id) }}" class="note-title">{{ $note->title }}</a>
            <a href="{{ route('note.edit', ['note' => $note->id]) }}" class="edit-note-link">EDIT</a>
            <form method="POST" action="{{ route('note.destroy', $note->id) }}">
                @csrf
                @method('DELETE')
                <input type="submit" value="DELETE" class="delete-note-btn"/>
            </form>
        </li>
    @empty
        <p class="no-data-msg">No data</p>
    @endforelse
</ul>
@endsection