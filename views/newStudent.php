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