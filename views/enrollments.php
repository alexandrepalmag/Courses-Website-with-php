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
        </tr>
    </thead>
    <?php
    while ($row = mysqli_fetch_array($query_enrollments)) {
        echo '<tr><td>' . $row['name_student'] . '</td>';
        echo '<td>' . $row['name_course'] . '</td></tr>';
    }
    ?>
</table>