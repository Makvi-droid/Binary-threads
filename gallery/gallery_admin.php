<?php
session_start();

// Include database connection
include('database.php');

// Create (Add new order)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_order'])) {
    // Retrieve and sanitize input data
    $fullname = isset($_POST['fullname']) ? trim($_POST['fullname']) : '';
    $contact = isset($_POST['contact']) ? trim($_POST['contact']) : '';
    $address = isset($_POST['address']) ? trim($_POST['address']) : '';
    $region = isset($_POST['region']) ? trim($_POST['region']) : '';
    $zip = isset($_POST['zip']) ? trim($_POST['zip']) : '';
    $payment = isset($_POST['payment']) ? trim($_POST['payment']) : '';
    $product = isset($_POST['product']) ? trim($_POST['product']) : '';
    $total = isset($_POST['total']) ? trim($_POST['total']) : '';

    // Insert into database
    $query = "INSERT INTO check_out (fullname, contact, address, region, zip, payment, product, total) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param('ssssssss', $fullname, $contact, $address, $region, $zip, $payment, $product, $total);
        if ($stmt->execute()) {
            $_SESSION['order_status'] = "Order successfully added!";
        } else {
            $_SESSION['order_status'] = "Error adding order: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $_SESSION['order_status'] = "Database query failed: " . $conn->error;
    }
}

// Read (Display orders)
$query = "SELECT * FROM check_out";
$result = $conn->query($query);

// Edit order (Update order)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_order'])) {
    // Retrieve the data
    $id = $_POST['order_id']; // ID is editable here
    $fullname = $_POST['fullname'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $region = $_POST['region'];
    $zip = $_POST['zip'];
    $payment = $_POST['payment'];
    $product = $_POST['product'];
    $total = $_POST['total'];

    // Update the order in the database
    $update_query = "UPDATE check_out SET fullname=?, contact=?, address=?, region=?, zip=?, payment=?, product=?, total=? WHERE id=?";
    $stmt = $conn->prepare($update_query);

    if ($stmt) {
        $stmt->bind_param('ssssssssi', $fullname, $contact, $address, $region, $zip, $payment, $product, $total, $id);
        if ($stmt->execute()) {
            // Redirect back to the page to reset the form and show updated data
            $_SESSION['order_status'] = "Order successfully updated!";
            header("Location: ".$_SERVER['PHP_SELF']);
            exit();
        } else {
            $_SESSION['order_status'] = "Error updating order: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $_SESSION['order_status'] = "Database query failed: " . $conn->error;
    }
}

// Delete order
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_query = "DELETE FROM check_out WHERE id=?";
    $stmt = $conn->prepare($delete_query);

    if ($stmt) {
        $stmt->bind_param('i', $id);
        if ($stmt->execute()) {
            $_SESSION['order_status'] = "Order successfully deleted!";
        } else {
            $_SESSION['order_status'] = "Error deleting order: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $_SESSION['order_status'] = "Database query failed: " . $conn->error;
    }
}

// Fetch the order to edit if 'edit' is set
$order_to_edit = null;
if (isset($_GET['edit'])) {
    $order_id = $_GET['edit'];
    $query = "SELECT * FROM check_out WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $order_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $order_to_edit = $result->fetch_assoc();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Admin</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container { 
            max-width: 1200px; 
        }

        .form-group { 
            margin-bottom: 1.5rem; 
        }

        .table th, .table td { 
            padding: 1rem; 
        }

        .table { 
            margin-top: 2rem; 
        }

        .alert { 
            margin-top: 1rem; 
        }

        .btn-group .btn { 
            margin-right: 10px; 
        }

        .card { 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); border-radius: 8px; margin-bottom: 2rem; 
        }

        .card-header { 
            background-color: #0069d9; color: white; font-size: 1.25rem; 
        }

        .card-body { 
            padding: 2rem; 
        }

        .table th { 
            background-color: #f8f9fa; color: #343a40; 
        }

    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4 text-center">Manage Orders</h2>

    <?php if (isset($_SESSION['order_status'])): ?>
        <div class="alert alert-info">
            <?php echo $_SESSION['order_status']; unset($_SESSION['order_status']); ?>
        </div>
    <?php endif; ?>

    <!-- Add or Edit Order Form in Card -->
    <div class="card">
        <div class="card-header">
            <strong><?php echo $order_to_edit ? 'Edit Order' : 'Add New Order'; ?></strong>
        </div>
        <div class="card-body">
            <form method="POST" action="">
                <input type="hidden" name="order_id" value="<?php echo $order_to_edit['id'] ?? ''; ?>">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="order_id">Order ID</label>
                        <input type="text" class="form-control" id="order_id" name="order_id" required value="<?php echo $order_to_edit['id'] ?? ''; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required value="<?php echo $order_to_edit['fullname'] ?? ''; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="contact">Contact</label>
                        <input type="text" class="form-control" id="contact" name="contact" required value="<?php echo $order_to_edit['contact'] ?? ''; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required value="<?php echo $order_to_edit['address'] ?? ''; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="region">Region</label>
                        <input type="text" class="form-control" id="region" name="region" required value="<?php echo $order_to_edit['region'] ?? ''; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="zip">ZIP Code</label>
                        <input type="text" class="form-control" id="zip" name="zip" required value="<?php echo $order_to_edit['zip'] ?? ''; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="payment">Payment Method</label>
                        <input type="text" class="form-control" id="payment" name="payment" required value="<?php echo $order_to_edit['payment'] ?? ''; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="product">Product</label>
                        <input type="text" class="form-control" id="product" name="product" required value="<?php echo $order_to_edit['product'] ?? ''; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="total">Total</label>
                        <input type="number" class="form-control" id="total" name="total" required value="<?php echo $order_to_edit['total'] ?? ''; ?>">
                    </div>
                </div>

                <button type="submit" name="<?php echo $order_to_edit ? 'edit_order' : 'add_order'; ?>" class="btn btn-primary">
                    <?php echo $order_to_edit ? 'Update Order' : 'Add Order'; ?>
                </button>
            </form>
        </div>
    </div>

    <!-- Orders Table -->
    <table class="table table-bordered table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Region</th>
                <th>ZIP</th>
                <th>Payment</th>
                <th>Product</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fullname']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['region']; ?></td>
                    <td><?php echo $row['zip']; ?></td>
                    <td><?php echo $row['payment']; ?></td>
                    <td><?php echo $row['product']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="?edit=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this order?');">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
