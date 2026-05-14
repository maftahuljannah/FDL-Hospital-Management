<h1>Add Patient</h1>

<form action="{{ route('patients.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="number" name="age" placeholder="Age"><br><br>
    <input type="text" name="phone" placeholder="Phone"><br><br>
    <textarea name="address" placeholder="Address"></textarea><br><br>

    <button type="submit">Save</button>
</form>