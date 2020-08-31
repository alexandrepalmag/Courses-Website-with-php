<div class="card">
    <div class="card-header">
        <h1>Register New Course</h1>
    </div>
    <div class="card-body">
        <form method="POST" action="register_course.php">
            <div class="form-row" style="padding: 1rem;">
                <div class="col">
                    <label>Course Namel</label>
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