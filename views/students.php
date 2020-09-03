<div class="container" id="btn-newcourse">
    <a class="btn btn-info" href="?page=newStudent">
        <i class="fas fa-plus-circle"></i>
        New Student
    </a>
</div>
<br>
<table class="table table-striped table-bordered" id="table-student">
        <thead>
            <tr>
                <th scope="col">Student Name</th>
                <th scope="col">Date Birth</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <?php
        while ($row = mysqli_fetch_array($tableQuery_students)) {
            echo '<tr><td>' . $row['name_student'] . '</td>';
            echo '<td>' . $row['date_birth'] . '</td>';
        ?>

            <td><a class="btn btn-danger" href="deletestudent.php?id_student=<?php echo $row['id_student']; ?>"><i class="fas fa-trash-alt"></i></a></td>

            <td><a class="btn btn-info" href="?page=newStudent&edit=<?php echo $row['id_student']; ?>" ?><i class="fas fa-edit"></i></a></td>
            </tr>

        <?php
        }
        ?>
    </table>
    