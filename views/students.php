<div class="container" id="btn-newcourse">
    <a class="btn btn-info" href="?page=newStudent">
        <i class="fas fa-plus-circle"></i>
        New Student
    </a>
</div>
<table class="table" id="person-table">
    <thead>
        <tr>
            <th scope="col">Course</th>
            <th scope="col">Amount Hours</th>
        </tr>
    </thead>
    <?php
        while ($row = mysqli_fetch_array($tableQuery_students)) {
            echo '<tr><td>' . $row['name_student'] . '</td>';
            echo '<td>' . $row['date_birth'] . '</td>';
    ?>
    
    <td><a class="btn btn-danger" href="deletestudent.php?id_student=<?php echo $row['id_student']; ?>"><i class="fas fa-trash-alt"></i></a></td>
        </tr>

    <?php        
        }
    ?>
</table>