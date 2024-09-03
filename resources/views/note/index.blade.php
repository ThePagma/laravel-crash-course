<x-app-layout>
    <div class="note-container">
        <a href="{{ route('note.create')}}" class="new-note-btn">
            new note
        </a>
        <div class="notes">
            @foreach($notes as $note)

                <div class="note">
                    <div class="note-body">
                        {{Str::words($note->note, 50)}}
                    </div>
                    <div class="note-buttons">
                        <a href="{{ route('note.show', $note)}}" class="note-edit-button">View</a>
                        <a href="{{ route('note.edit', $note)}}" class="note-edit-button">edit</a>

                        <form action="{{route('note.destroy', $note)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="note-delete-button">Delete</button>

                        </form>
                    </div>
                </div>
                <br>
            @endforeach
        </div>

        {{$notes->links()}}
    </div>
</x-app-layout>
