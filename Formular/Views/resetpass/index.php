<div class="row">
    <div class='col-md-3'></div>
    <div class="col-md-6">
        <div class="login-box well">
                <form method="POST" action="resetpass/run">
                    <legend>Reset Password</legend>
                    <div class="form-group">
                        <label for="username-email">Username</label>
                        <input name="Login" id="username-email" placeholder="Username" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input id="password" name="new" placeholder="New Password" type="password" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">Email</label>
                        <input id="password" name="email" placeholder="E-mail" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="resetPass" class="btn btn-default btn-login-submit btn-block m-t-md" value="Reset Password" />
                    </div>
                </form>
            <font color="red">
			<?php
			if(!empty(Session::get("errors")))
			{
			foreach (Session::get("errors") as $i) {
				echo $i;
				?>
				<br>
				<?php
			}
			unset($_SESSION['errors']);
			}
			?>
		</font>
        </div>
    </div>
    <div class='col-md-3'></div>
</div>