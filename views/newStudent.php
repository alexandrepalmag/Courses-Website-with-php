<?php if (!isset($_GET['edit'])) { ?>

    <div class="card">
        <div class="card-header">
            <h1>Register New Student</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="register_student.php">
                <div class="form-row" style="padding: 1rem;">
                    <div class="col">
                        <label>Student Name</label>
                        <input type="text" class="form-control" name="name_student" placeholder="Student Name" autofocus required>
                    </div>
                    <div class="col">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control" name="date_birth" placeholder="Date of Birth" required>
                    </div>
                </div>
                <div class="container">
                    <button type="submit" class="btn btn-info">Send</button>
                </div>
            </form>
        </div>
    </div>

<?php
} else { ?>

    <?php while ($row = mysqli_fetch_array($tableQuery_students)) { ?>

        <?php if ($row['id_student'] == $_GET['edit']) { ?>

            <div class="card">
                <div class="card-header">
                    <h1>Edit Student</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="edit_student.php">
                        <input type="hidden" name="id_student" value="<?php echo $row['id_student']; ?>">
                        <div class="form-row" style="padding: 1rem;">
                            <div class="col">
                                <label>Student Name</label>
                                <input type="text" class="form-control" name="name_student" placeholder="Student Name" value="<?php echo $row['name_student']; ?>" autofocus required>
                            </div>
                            <div class="col">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" name="date_birth" placeholder="Date of Birth" value="<?php echo $row['date_birth']; ?>" required>
                            </div>
                        </div>
                        <div class="container">
                            <button type="submit" class="btn btn-info">Send</button>
                        </div>
                    </form>
                </div>
            </div>

        <?php } ?>
    <?php } ?>
<?php } ?>