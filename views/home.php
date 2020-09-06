<div class="container" style="width: 28rem;margin-top: 8%;">
    <div class="card">
        <div class="card-header" style="text-align: center;background: #ffffff;color:rgba(0, 71, 144, 0.88);height: 3.4rem;">
            <h3 class="h3 mb-3 font-weight-normal">Please sign in</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="login.php">
                <div class="form-group">
                    <input type="email" id="inputEmail" name="user" class="form-control" placeholder="Email address" required autofocus>
                </div>
                <div class="form-group">
                    <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
                </div>
                <div class="checkbox mb-3">
                    <br>
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Sign in</button>
            </form>
        </div>
        <?php if (isset($_GET['erro'])) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Invalid loin or password</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>
    </div>
</div>