@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}" class="back-to-index-link">Back</a>
<form method="POST" action="{{ route('note.update', $note->id) }}" class="edit-note-form">
    @method('PUT')
    @csrf
    <label for="title" class="form-label">Title:</label>
    <input type="text" name="title" id="title" value="{{ $note->title }}" class="form-input"><br>
    @error('title')
        <p class="error-message">{{ $message }}</p>
    @enderror
    <label for="description" class="form-label">Description:</label>
    <input type="text" name="description" id="description" value="{{ $note->description }}" class="form-input"><br>
    @error('description')
        <p class="error-message">{{ $message }}</p>
    @enderror
    <input type="submit" value="Update" class="update-btn">
</form>
@endsection