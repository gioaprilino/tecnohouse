<form action="process_contact.php" method="post">
    <label for="name">Your name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Your Message</label>
    <textarea name="message" id="message" required></textarea>

    <button type="submit">Submit</button>
</form>