<form action="/registerStudent" method="POST">
    @csrf
    <label for="level">Level:</label>
    <input type="text" name="level"></br>
    <label for="gpa">GPA:</label>
    <input type="text" name="gpa"></br>
    <label for="contact">Contact-Info:</label>
    <input type="text" name="contact"></br>
    <button>Done</button>
</form>