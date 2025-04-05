<link rel="stylesheet"  href="style.css">
<form action="submit_report.php" method="POST">
    <div class="form-group">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="text" name="time" placeholder="Time" required>
        <input type="text" name="place" placeholder="Place" required>
        <input type="text" name="phone_no" placeholder="Phone Number" required>
    </div>
    <div class="form-group">
        <select name="emergency" required>
            <option value="" selected disabled>Select Emergency</option>
            <option value="Hospital">Hospital</option>
            <option value="Police Station">Police Station</option>
        </select>          
    </div>
    <button type="submit" class="submit-button">Submit</button>
    <button type="reset" class="cancel-button">Cancel</button>
</form>
