<div>
  <input type="text" wire:model="note"/>
  <button  wire:click="store">Add Note</button>
  <h3 style="color: green">{{ $feedback }}</h3>

  @foreach($notes as $note)
    <h4>
        {{ $note->content }}
        <button wire:click="update({{ $note->id }})">Update</button>
        <button wire:click="destroy('{{ $note->id }}')">Delete</button>
    </h4>
  @endforeach
</div>
