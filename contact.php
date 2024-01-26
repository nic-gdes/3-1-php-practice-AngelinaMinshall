<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $messafe = htmlspecialchars($_POST['message']);
}
 
echo $name . "," . $email . ","  . $message;
?> 

<!DOCTYPE html>
<html lang="en">

<body>

<?php include ('./components/head.php'); ?>

<?php
  include ('./components/nav.php');
?>

<div class="container">
    <form action="./contact.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Submit">
    </form>
</div>

<?php
  include ('./components/footer.php');
?>

</body>
</html>