<div class="card text-center">
    <div class="card-header">
        <h4>New Enrollment</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="set_enrollment.php" style="padding: 1rem;">
            <div class="form-group">
                <select name="choice_student" class="form-control" autofocus>
                    <option value="">Choice a Student</option>
                    <?php
                    while ($row = mysqli_fetch_array($tableQuery_students)) {
                        echo '<option value="' . $row['id_student'] . '">' . $row['name_student'] . '</option>';
                    }
                    ?>
                </select>
                <br>
                <select name="choice_course" class="form-control">
                    <option value="">Choice a Course</option>
                    <?php
                    while ($row = mysqli_fetch_array($tableQuery)) {
                        echo '<option value="' . $row['id_course'] . '">' . $row['name_course'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div>
                <button class="btn btn-lg btn-info">
                    Enroll
                </button>
            </div>
        </form>
    </div>
</div>