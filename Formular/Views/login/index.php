<div class="row">
    <div class='col-md-3'></div>
    <div class="col-md-6">
        <div class="login-box well">
                <form method="POST" action="login/run">
                    <legend>Log In</legend>
                    <div class="form-group">
                        <label for="username-email">Username</label>
                        <input name="Login" id="username-email" placeholder="Username" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" name="Pass" placeholder="Password" type="password" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="Button" class="btn btn-default btn-login-submit btn-block m-t-md" value="Log In" />
                    </div>
                    <span class='text-center'><a href="resetpass" class="text-sm">Forgot Password?</a></span>
                </form>
            <font color="red">
			<?php
			if(!empty(Session::get("errors"))){
				echo Session::get("errors");
				unset($_SESSION['errors']);
			}
			?>
		</font>
        </div>
    </div>
    <div class='col-md-3'></div>
</div>