<div>
    <ul>
        @foreach ($data as $contact)
            <li>{{ $contact->name }}</li>
        @endforeach
    </ul>
</div>
