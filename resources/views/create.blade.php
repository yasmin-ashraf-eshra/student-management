<form action="/create" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name"></br>
    <label for="email">Email:</label>
    <input type="text" name="email"></br>
    <label for="password">Password:</label>
    <input type="text" name="password"></br>
    <button>Done</button>
</form>