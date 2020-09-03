<div class="container" id="btn-newcourse">
    <a class="btn btn-info" href="?page=new_course">
        <i class="fas fa-plus-circle"></i>
        New Course
    </a>
</div>
<br>
<table class="table table-striped table-bordered" id="table-course">
    <thead>
        <tr>
            <th scope="col">Course</th>
            <th scope="col">Amount Hours</th>
            <th scope="col">Delete</th>
            <th scope="col">Edit</th>
        </tr>
    </thead>
    <?php
    while ($row = mysqli_fetch_array($tableQuery)) {
        echo '<tr><td>' . $row['name_course'] . '</td>';
        echo '<td>' . $row['amount_hours'] . '</td>';
    ?>
        <td><a class="btn btn-danger" href="deletecourse.php?id_course=<?php echo $row['id_course']; ?>"><i class="fas fa-trash-alt"></i></a></td>
        
        <td><a class="btn btn-info" href="?page=new_course&edit=<?php echo $row['id_course']; ?>"><i class="fas fa-edit"></i></a></td>
        </tr>

    <?php
    }
    ?>
</table>