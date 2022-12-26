<?php include('head.php') ?>
    <div class="login-window d-flex flex-wrap justify-content-center align-items-center">
        <div class="login-form">
            <div class="login-header d-flex flex-wrap justify-content-center align-items-center">
                <img src="images/logo.png" alt="Stanvac AI" width="206" height="70" class="img-fluid">
            </div>
            <div class="login-body">
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control password" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Log In</button>
                    <div class="d-flex flex-wrap justify-content-between align-items-center mt-3">
                        <div class="from-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                        </div>
                        <div class="from-group">
                            <a href="#" class="forget-password-btn">Forget Password</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include('footer.php') ?>