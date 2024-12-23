<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mise en situation</title>
</head>

<body>
    <form method="post" action="insert.php">

        <h2>Register</h2>

        <label for="name">Name</label>
        <input id="name" type="text" name="name">

        <label for="email">Email</label>
        <input id="email" type="text" name="email">

        <!--  -->
        <label for="role">Role</label>
        <select id="role" name="role">
            <?php 
                 include './connexion.php';
                 $req="select role_id, name from role ";
                $result=$conn->query($req);
                 if($result->num_rows > 0){
               while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['role_id'] . "'>" . $row['name'] . "</option>";
                       }
                             }
                                 $conn->close(); 
        ?>
        </select>
        <!--  -->

        <button type="submit">Save</button>
    </form>

</body>

</html>