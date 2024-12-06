<?php
include "database.php";
?>

<html lang="en">
<head>
  <title>User Account Maintenance Admin Page</title>
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
  <div class="row">
    <!-- Form Section -->
    <div class="col-lg-6">
      <h2>User Account Maintenance Admin Page</h2>
      <form action="" name="form" method="post">
        <div class="form-group">
          <label for="id">User ID:</label>
          <input type="text" class="form-control" id="id" placeholder="Enter User ID" name="id">
        </div>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
        </div>
        <button type="submit" name="add" class="btn btn-success">Add</button>
        <button type="submit" name="update" class="btn btn-warning">Update</button>
        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
      </form>
    </div>

    <!-- Instructions Section -->
    <div class="col-lg-6">
      <h3>Admin Instructions</h3>
      <div style="border: 1px solid #ddd; padding: 15px; border-radius: 5px; background-color: #f9f9f9;">
        <ul>
          <li><strong>Add:</strong> Fill in all fields and click <b>Add</b> to create a new user.</li>
          <li><strong>Update:</strong> Enter the User ID and any fields to modify. Leave fields blank to retain existing values.</li>
          <li><strong>Delete:</strong> Enter the User ID and click <b>Delete</b> to remove the user.</li>
          <li>Ensure all data is accurate before submitting.</li>
          <li>Duplicate usernames and emails are not allowed.</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col-lg-12">
    <h3>Users List</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Email</th>
          <th>Password</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $res = mysqli_query($conn, "SELECT * FROM sign_up");
        while ($row = mysqli_fetch_assoc($res)) {
          echo "<tr>";
          echo "<td>" . $row["id"] . "</td>";
          echo "<td>" . $row["username"] . "</td>";
          echo "<td>" . $row["email"] . "</td>";
          echo "<td>" . $row["password"] . "</td>";
          echo "<td>" . $row["date"] . "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

<?php
// Add new user
if (isset($_POST["add"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    if (!empty($username) && !empty($email) && !empty($password)) {
      // Check for existing username or email
      $check_query = "SELECT * FROM sign_up WHERE username='$username' OR email='$email'";
      $result = mysqli_query($conn, $check_query);
  
      if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Username or Email already exists. Please use a different one.');</script>";
      } else {
        // Insert new user if no duplicates found
        $query = "INSERT INTO sign_up (username, email, password, date) VALUES ('$username', '$email', '$password', NOW())";
        mysqli_query($conn, $query) or die(mysqli_error($conn));
        echo "<script>window.location.href = window.location.href;</script>";
      }
    } else {
      echo "<script>alert('All fields are required!');</script>";
    }
  }

// Update user
if (isset($_POST["update"])) {
    $id = $_POST["id"];

    if (!empty($id)) {
        // Fetch existing user data
        $fetch_query = "SELECT * FROM sign_up WHERE id='$id'";
        $result = mysqli_query($conn, $fetch_query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Pre-fill the fields with existing data for modification
            $username = $_POST["username"] ?: $row["username"];
            $email = $_POST["email"] ?: $row["email"];
            $password = $_POST["password"] ?: $row["password"];

            // Check for duplicate username or email
            $check_query = "SELECT * FROM sign_up WHERE (username='$username' OR email='$email') AND id != '$id'";
            $check_result = mysqli_query($conn, $check_query);

            if (mysqli_num_rows($check_result) > 0) {
                echo "<script>alert('Username or Email already exists. Please use a different one.');</script>";
            } else {
                // Update user
                $update_query = "UPDATE sign_up SET username='$username', email='$email', password='$password' WHERE id='$id'";
                mysqli_query($conn, $update_query) or die(mysqli_error($conn));
                echo "<script>window.location.href = window.location.href;</script>";
            }
        } else {
            echo "<script>alert('User ID not found.');</script>";
        }
    } else {
        echo "<script>alert('User ID is required!');</script>";
    }
}

// Delete user
if (isset($_POST["delete"])) {
  $id = $_POST["id"];
  
  if (!empty($id)) {
    $query = "DELETE FROM sign_up WHERE id='$id'";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo "<script>window.location.href = window.location.href;</script>";
  }
}
?>

</body>
</html>
