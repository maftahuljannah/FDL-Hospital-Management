<h1>Patients List</h1>

<a href="{{ route('patients.create') }}">Add Patient</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>

    @foreach($patients as $patient)
    <tr>
        <td>{{ $patient->name }}</td>
        <td>{{ $patient->age }}</td>
        <td>{{ $patient->phone }}</td>
        <td>
            <a href="{{ route('patients.edit', $patient->id) }}">Edit</a>

            <form action="{{ route('patients.destroy', $patient->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>