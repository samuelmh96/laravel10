@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}" class="back-to-index-link">BACK</a>
<div class="note-details-container">
    <h1 class="note-title">{{ $note->title }}</h1>
    <p class="note-description">{{ $note->description }}</p>
</div>
@endsection