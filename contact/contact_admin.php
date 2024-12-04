<?php

include "../database.php";

?>

<html lang="en">
<head>
  <title>Contact Us Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    
    td {
      word-wrap: break-word;
      max-width: 200px; 
    }
  </style>
</head>
<body>

<div class="container">
<div class="col-lg-4">
  <h2>Contact Us Admin Page</h2>
  <form action="" name="form" method="post" >
    <div class="form-group">
      <label for="lastname">Enter Username for Message Editing/Updating:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter Username" name="contact_username">
    </div>
    <div class="form-group">
      <label for="message">Enter New Message:</label>
      <textarea class="form-control" id="message" placeholder="Enter New Message" name="contact_message"></textarea>
    </div>
    
   
    <button type="submit" name="update" class="btn btn-default">Update</button>
    <button type="submit" name="delete" class="btn btn-default">Delete</button>
  </form>
</div>
</div>

<div class="col-lg-12">

<table class="table table-bordered">
    <thead>
      <tr>
        <th>Username</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
      
    <?php

    $res = mysqli_query($conn, "SELECT * FROM contact_us");
    while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";
        echo "<td>" . $row["contact_username"] . "</td>";
        echo "<td>" . $row["contact_name"] . "</td>";
        echo "<td>" . $row["contact_email"] . "</td>";
        echo "<td>" . $row["contact_message"] . "</td>";
        echo "</tr>";
    }

    ?>
       
    </tbody>
  </table>

</div>

<?php

if (isset($_POST["delete"])) {
    $username = $_POST['contact_username'];
    mysqli_query($conn, "DELETE FROM contact_us WHERE contact_username='$username'") or die(mysqli_error($conn));
    ?>
    <script type="text/javascript">
        window.location.href = window.location.href;
    </script>
    <?php
}

if (isset($_POST["update"])) {
    $username = $_POST['contact_username'];
    $new_message = $_POST['contact_message'];
    
    if (!empty($username) && !empty($new_message)) {
        // Debugging: Show the values you're trying to update
        echo "Updating username: $username with message: $new_message";

        // Update message for the provided username
        $update_query = "UPDATE contact_us SET contact_message='$new_message' WHERE contact_username='$username'";
        $result = mysqli_query($conn, $update_query) or die(mysqli_error($conn));

        // Check if the update was successful
        if ($result) {
            echo "<br>Update successful.";
        } else {
            echo "<br>Update failed.";
        }
    }
    ?>
    <script type="text/javascript">
        window.location.href = window.location.href;
    </script>
    <?php
}

?>

</body>
</html>
