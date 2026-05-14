<h1>Edit Patient</h1>

<form action="{{ route('patients.update', $patient->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $patient->name }}"><br><br>
    <input type="number" name="age" value="{{ $patient->age }}"><br><br>
    <input type="text" name="phone" value="{{ $patient->phone }}"><br><br>
    <textarea name="address">{{ $patient->address }}</textarea><br><br>

    <button type="submit">Update</button>
</form>