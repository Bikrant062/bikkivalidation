<form method="POST" action="d.php">
    <!-- Form fields -->
    <p>
        <label for="name">Name:</label>
        <input type="text" id="name" name="bikrant_name" required>
    </p>
    <p>
        <label for="password">Password:</label>
        <input type="password" id="password" name="bikrant_password" required>
    </p>
    <p>
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="bikrant_confirm_password" required>
    </p>
    <p>
        <label>Gender:</label>
        <input type="radio" id="male" name="bikrant_gender" value="Male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="bikrant_gender" value="Female" required>
        <label for="female">Female</label>
        <input type="radio" id="other" name="bikrant_gender" value="Other" required>
        <label for="other">Other</label>
    </p>
    <p>
        <label for="contact">Contact:</label>
        <input type="tel" id="contact" name="bikrant_contact" pattern="[0-9]{10}" required>
    </p>
    <p>
        <label for="course">Course:</label>
        <select id="course" name="bikrant_course" required>
            <option value="">Select a Course</option>
            <option value="Science">Science</option>
            <option value="Arts">Arts</option>
            <option value="Commerce">Commerce</option>
            <option value="Engineering">Engineering</option>
            <option value="Medicine">Medicine</option>
        </select>
    </p>
    <p>
        <label for="email">Email:</label>
        <input type="email" id="email" name="bikrant_email" required>
    </p>

    <!-- Buttons -->
    <p>
        <input type="submit" name="validate" value="Validate">
        <input type="submit" name="insert" value="Insert">
    </p>
</form>
<h2>View Data</h2>
<p><a href="f.php"><button>View DAta</button></a></p>

<h2>Delete Data</h2>
<form method="POST" action="h.php">
    <p>
        <label for="id">ID to Delete:</label>
        <input type="text" id="id" name="bikrant_id" required>
    </p>
    <p>
        <input type="submit" value="Delete">
    </p>
</form>
<h2>Update Data</h2>
<form method="POST" action="g.php">
    <p>
        <label for="id">ID to Update:</label>
        <input type="text" id="id" name="bikrant_id" required>
    </p>
    <p>
        <label for="name">Name:</label>
        <input type="text" id="name" name="bikrant_name" required>
    </p>
    <p>
        <label for="password">Password:</label>
        <input type="password" id="password" name="bikrant_password" required>
    </p>
    <p>
        <label>Gender:</label>
        <input type="radio" id="male" name="bikrant_gender" value="Male" required> Male
        <input type="radio" id="female" name="bikrant_gender" value="Female" required> Female
        <input type="radio" id="other" name="bikrant_gender" value="Other" required> Other
    </p>
    <p>
        <label for="contact">Contact:</label>
        <input type="tel" id="contact" name="bikrant_contact" required>
    </p>
    <p>
        <label for="email">Email:</label>
        <input type="email" id="email" name="bikrant_email" required>
    </p>
    <p>
        <label for="course">Course:</label>
        <select id="course" name="bikrant_course" required>
            <option value="">Select</option>
            <option value="Science">Science</option>
            <option value="Arts">Arts</option>
            <option value="Commerce">Commerce</option>
            <option value="Engineering">Engineering</option>
            <option value="Medicine">Medicine</option>
        </select>
    </p>
    <p>
        <input type="submit" value="Update">
    </p>
</form>


