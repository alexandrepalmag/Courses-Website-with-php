<div class="container" id="btn-newcourse">
    <a class="btn btn-info" href="?page=new_enrollment">
        <i class="fas fa-plus-circle"></i>
        New Enrollment
    </a>
</div>

<table class="table" id="person-table">
    <thead>
        <tr>
            <th scope="col">Student Name</th>
            <th scope="col">Course Name</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <?php
    while ($row = mysqli_fetch_array($query_enrollments)) {
        echo '<tr><td>' . $row['name_student'] . '</td>';
        echo '<td>' . $row['name_course'] . '</td>';
        ?>

        <td><a class="btn btn-danger" href="deleteenrollment.php?id_enrollment=<?php echo $row['id_student_course']; ?>"><i class="fas fa-trash-alt"></i></a></td>
        </tr>

    <?php
    }
    ?>
</table>