
<table class="table">
    <thead>
        <tr>
            <th scope="col">Course</th>
            <th scope="col">Amount Hours</th>
        </tr>
    </thead>
    <?php
    while ($row = mysqli_fetch_array($query_enrollments)) {
        echo '<tr><td>' . $row['name_student'] . '</td>';
        echo '<td>' . $row['name_course'] . '</td></tr>';
    }
    ?>
</table>