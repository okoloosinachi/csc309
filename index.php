<!DOCTYPE html>
<html>
<head>
    <title>CSC 309 DB Class</title>
</head>
<body>
    <h2>Registration Form</h2>

    <!-- Select all users and display in a Table -->
    <table>
        <thead>
            <!-- Complete the table header row -->
        </thead>

        <tbody>
            <?php
                // Complete code to:
                // Connect to the DB
                // Select all records from users table
                // Display all the selected records

                    $server = 'localhost'; // 127.0.0.1
                    $username = 'root';
                    $password = 'rootroot';
                    $db = 'csc309';
                     // Open a new connection
                $con = new mysqli($server, $username, $password,$db);

                    $select = "SELECT * FROM users ";
                    $result = $con->query($select);
                    if($result){?>

                    <table width="500" align="center" border="1" cellspacing="0">
                        <tr><td>S/N</td><td>Last Name</td><td>First Name</td><td>Gender</td><td>Date Of Birth</td><td>Email</td></tr>
                        <?php while($row = mysqli_fetch_assoc($result)){?>
                            <tr>
                            <td><?php echo $row['id']?></td>
                                <td><?php echo $row['lastname']?></td>
                                <td><?php echo $row['firstname']?></td>
                                <td><?php echo $row['gender']?></td>
                                <td><?php echo $row['date_of_birth']?></td>
                                <td><?php echo $row['email']?></td>
                        </tr>

                       <?php } ?>
                    </table>

                  <?php  }

            ?>
        </tbody>
    </table>
</body>
</html>