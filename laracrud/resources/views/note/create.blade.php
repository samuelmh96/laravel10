@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}" class="back-to-index-link">Notes</a>
<form method="POST" action="{{ route('note.store') }}" class="create-note-form">
    @csrf
    <label for="title" class="form-label">Title:</label>
    <input type="text" name="title" id="title" class="form-input"><br>
    @error('title')
        <p class="error-message">{{ $message }}</p>
    @enderror
    <label for="description" class="form-label">Description:</label>
    <input type="text" name="description" id="description" class="form-input"><br>
    @error('description')
        <p class="error-message">{{ $message }}</p>
    @enderror
    <input type="submit" value="Create" class="create-btn">
</form>
@endsection