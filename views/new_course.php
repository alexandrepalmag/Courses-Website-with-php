<?php if (!isset($_GET['edit'])) { ?>

    <div class="card">
        <div class="card-header">
            <h1>Regi er New Course</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="register_course.php">
                <div class="form-row" style="padding: 1rem;">
                    <div class="col">
                        <label>Course Name</label>
                        <input type="text" class="form-control" name="name_course" placeholder="Course Name" autofocus required>
                    </div>
                    <div class="col">
                        <label>Amount Hours</label>s
                        <input type="text" class="form-control" name="amount_hours" placeholder="Amount Hours" required>
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

    <?php while ($row = mysqli_fetch_array($tableQuery)) { ?>

        <?php if ($row['id_course'] == $_GET['edit']) { ?>

            <div class="card">
                <div class="card-header">
                    <h1>Course Edit</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="edit_course.php">
                        <input type="hidden" name="id_course" value="<?php echo $row['id_course']; ?>">
                        <div class="form-row" style="padding: 1rem;">
                            <div class="col">
                                <label>Course Name</label>
                                <input type="text" class="form-control" name="name_course" placeholder="Course Name" value="<?php echo $row['name_course']; ?>" autofocus required>
                            </div>
                            <div class="col">
                                <label>Amount Hours</label>s
                                <input type="text" class="form-control" name="amount_hours" placeholder="Amount Hours" value="<?php echo $row['amount_hours']; ?>" required>
                            </div>
                        </div>
                        <div class="container">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
<?php } ?>