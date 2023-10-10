<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
</head>
<style>
     .container {
    display: flex;
}

.left-side {
    width: 50%;
    padding: 20px;
    border-right: 1px solid #ccc;
}

.right-side {
    width: 50%;
    padding: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
}

button {
    cursor: pointer;
    margin-right: 5px;
}

</style>
<body>
    <div class="container">
        <div class="left-side">
            <h2>Student List</h2>
            <table>
                <!-- Display the student list here -->
                <tr>
                    <td>Student 1</td>
                    <td>
                        <button class="edit-button">Edit</button>
                        <button class="delete-button">Delete</button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </table>
        </div>
        <div class="right-side">
            <!-- This is where the edit form or delete confirmation message will be displayed -->
        </div>
    </div>

    <script >
        document.addEventListener("DOMContentLoaded", function () {
    const editButtons = document.querySelectorAll(".edit-button");
    const deleteButtons = document.querySelectorAll(".delete-button");
    const rightSide = document.querySelector(".right-side");

    editButtons.forEach((button) => {
        button.addEventListener("click", function () {
            // Display edit form on the right side (you can customize this part)
            rightSide.innerHTML = "<h2>Edit Student</h2><form>Student Name: <input type='text'><br><button>Save</button></form>";
        });
    });

    deleteButtons.forEach((button) => {
        button.addEventListener("click", function () {
            // Display delete confirmation message on the right side (you can customize this part)
            rightSide.innerHTML = "<h2>Delete Student</h2><p>Are you sure you want to delete this student?</p><button>Delete</button>";
        });
    });
});

    </script>
</body>
</html>
