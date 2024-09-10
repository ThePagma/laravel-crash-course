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
                <div class="note">
                    <div class="note-body">
                        bas
                    </div>
                    <div class="note-buttons">
                        <a href="http://crash-course-v4.test/note/106" class="note-edit-button">View</a>
                        <a href="http://crash-course-v4.test/note/106/edit" class="note-edit-button">edit</a>

                        <form action="http://crash-course-v4.test/note/106" method="post">
                            <input type="hidden" name="_token" value="PdNrjrqo1w66wml8VzaVHONxu6UYtLinEYCUteLN" autocomplete="off">                            <input type="hidden" name="_method" value="DELETE">                            <button class="note-delete-button">Delete</button>

                        </form>
                    </div>
                </div>
                <br>
        </div>




        {{$notes->links()}}
    </div>
</x-app-layout>
