<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <h2>User Data</h2>
    <table border="1">
        <tr>
            <th>User ID</th>

            <th>Name</th>
            <th>Password</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['user_id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['password']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Add New User</h2>
    <form id="addUserForm">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="button" onclick="addUser()">Add User</button>
    </form>

    <script>
        $(function() {

        });

        function addUser() {
            // Get form data
            var formData = $('#addUserForm').serialize();

            // AJAX request
            $.ajax({
                type: 'POST',
                url: '/login/saveUser', // Change the URL if needed
                data: formData,
                success: function(response) {
                    // Refresh the user data table
                    $('#userTable').load('/login #userTable');

                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    </script>
</body>

</html>