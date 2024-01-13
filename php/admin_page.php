<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
   exit();
}

// Establish database connection
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$connection){
   die("Database connection failed: " . mysqli_connect_error());
}

// Fetch records from the screenshots table
$sql = "SELECT * FROM screenshots";
$result = mysqli_query($connection, $sql);

// Handle errors if the query fails
if(!$result){
   die("Query failed: " . mysqli_error($connection));
}

// Fetch records from the user_form table
$userSql = "SELECT * FROM user_form";
$userResult = mysqli_query($connection, $userSql);

// Handle errors if the query fails
if(!$userResult){
   die("Query failed: " . mysqli_error($connection));
}

// Delete row if delete button is clicked in Order Details
if(isset($_GET['delete_id'])){
   $deleteId = $_GET['delete_id'];

   // Perform the deletion query using $deleteId
   $deleteQuery = "DELETE FROM screenshots WHERE id = $deleteId";
   $deleteResult = mysqli_query($connection, $deleteQuery);

   if(!$deleteResult){
      die("Deletion failed: " . mysqli_error($connection));
   }

   // Refresh the page after deletion
   echo '<script>window.location.href = "admin_page.php";</script>';
}

// Delete row if delete button is clicked in User Details
if(isset($_GET['delete_user_id'])){
   $deleteUserId = $_GET['delete_user_id'];

   // Perform the deletion query using $deleteUserId
   $deleteUserQuery = "DELETE FROM user_form WHERE id = $deleteUserId";
   $deleteUserResult = mysqli_query($connection, $deleteUserQuery);

   if(!$deleteUserResult){
      die("Deletion failed: " . mysqli_error($connection));
   }

   // Refresh the page after deletion
   echo '<script>window.location.href = "admin_page.php";</script>';
}

// Close the database connection
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Page</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
      body {
         background-color: #f5f5f5;
         padding: 20px;
      }
      .content {
         max-width: 100%;
         margin: 0 auto;
         background-color: #fff;
         padding: 20px;
         border-radius: 5px;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }
      h3 {
         margin: 0;
      }
      h1 {
         font-size: 24px;
         margin-bottom: 20px;
      }
      .card {
         margin-top: 20px;
      }
      .table-responsive {
         overflow-x: auto;
      }
      .screenshot-container {
         display: flex;
         flex-wrap: wrap;
         margin-top: 20px;
      }
      .screenshot {
         width: 200px;
         margin: 10px;
         padding: 10px;
         border: 1px solid #ccc;
         border-radius: 5px;
         text-align: center;
         background-color: #f9f9f9;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }
      .screenshot img {
         max-width: 100%;
         height: auto;
      }
      .screenshot select {
         margin-top: 10px;
         width: 100%;
         padding: 5px;
      }
      .screenshot .price {
         margin-top: 10px;
         font-weight: bold;
      }
      .screenshot .product-id {
         margin-top: 5px;
         color: #888;
         font-size: 12px;
      }
      .screenshot .remove-button {
         margin-top: 10px;
         color: #f00;
         cursor: pointer;
         font-size: 14px;
         background: none;
         border: none;
         outline: none;
      }
      .modal {
         display: none;
         position: fixed;
         z-index: 1;
         left: 0;
         top: 0;
         width: 100%;
         height: 100%;
         overflow: auto;
         background-color: rgba(0, 0, 0, 0.4);
      }
      .modal-content {
         background-color: #fefefe;
         margin: 15% auto;
         padding: 20px;
         border: 1px solid #888;
         width: 300px;
         border-radius: 5px;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      }
      .modal-title {
         font-size: 18px;
         margin-bottom: 10px;
      }
      .modal-input {
         width: 100%;
         padding: 10px;
         margin-bottom: 10px;
         border: 1px solid #ccc;
         border-radius: 4px;
         box-sizing: border-box;
      }
      .modal-button {
         padding: 10px 20px;
         background-color: #007bff;
         color: #fff;
         border: none;
         border-radius: 4px;
         cursor: pointer;
      }
   </style>
</head>
<body>
 
<div class="content">
   <h3>Hi, <span>Admin</span></h3>
   <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>

   <div class="card mt-4">
      <div class="card-header">
         <h2>Order Details</h2>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>id</th>
                     <th>size</th>
                     <th>price</th>
                     <th>email</th>
                     <th>product_id</th>
                     <th>address</th>
                     <th>mobile_number</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php while($row = mysqli_fetch_assoc($result)) : ?>
                     <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['size']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['product_id']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['mobile_number']; ?></td>
                        <td>
                           <a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                     </tr>
                  <?php endwhile; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>

   <div class="card mt-4">
      <div class="card-header">
         <h2>User Details</h2>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Password</th>
                     <th>User Type</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php while($userRow = mysqli_fetch_assoc($userResult)) : ?>
                     <tr>
                        <td><?php echo $userRow['id']; ?></td>
                        <td><?php echo $userRow['name']; ?></td>
                        <td><?php echo $userRow['email']; ?></td>
                        <td><?php echo $userRow['password']; ?></td>
                        <td><?php echo $userRow['user_type']; ?></td>
                        <td>
                           <a href="?delete_user_id=<?php echo $userRow['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                     </tr>
                  <?php endwhile; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>

</div>


<div id="screenshotContainer" class="screenshot-container">
  <!-- Your screenshot containers will be dynamically added here -->
</div>

<script>
  function deleteScreenshot(screenshotKey) {
    localStorage.removeItem(screenshotKey);
    displayScreenshots();
  }

  function displayScreenshots() {
    var screenshotData;
    var img;

    var container = document.getElementById("screenshotContainer");
    container.innerHTML = ""; // Clear previous screenshots

    for (var i = 1; i <= 8; i++) {
      var screenshotCounter = 1;
      while ((screenshotData = localStorage.getItem("screenshotData" + i + "_" + screenshotCounter))) {
        (function() {
          var currentCounter = screenshotCounter; // Capture the counter value
          var currentProductId = i; // Capture the product id value

          img = document.createElement("img");
          img.src = screenshotData;

          var removeButton = document.createElement("button");
          removeButton.innerHTML = "&#10060;";
          removeButton.classList.add("remove-button");
          removeButton.addEventListener("click", function() {
            var screenshotWrapper = this.parentNode;
            screenshotWrapper.parentNode.removeChild(screenshotWrapper);
            deleteScreenshot("screenshotData" + currentProductId + "_" + currentCounter); // Use the captured counter and product ID value
          });

          var screenshotWrapper = document.createElement("div");
          screenshotWrapper.classList.add("screenshot");
          screenshotWrapper.appendChild(img);
          screenshotWrapper.innerHTML += '<div class="product-id">Product ID: ' + currentProductId + '</div>'; // Add product_id
          screenshotWrapper.appendChild(removeButton);
          container.appendChild(screenshotWrapper);
        })();

        screenshotCounter++;
      }
    }
  }

  displayScreenshots();
</script>

</body>
</html>
