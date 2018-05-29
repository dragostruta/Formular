<div class="row">
    <div class='col-md-3'></div>
    <div class="col-md-6">
        <div class="login-box well">
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
                <form method="POST" action="settings/resetPass_funct">
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
                <br>
                <form method="POST" action="settings/resetUser_funct">
                    <legend>Reset Username</legend>
                    <div class="form-group">
                        <label for="username-email">Old Username</label>
                        <input name="Login" id="username-email" placeholder="Old Username" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">New Username</label>
                        <input id="password" name="new" placeholder="New Username" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">Email</label>
                        <input id="password" name="email" placeholder="E-mail" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="resetPass" class="btn btn-default btn-login-submit btn-block m-t-md" value="Reset Username" />
                    </div>
                </form>
                <br>
                <form method="POST" action="settings/resetEmail_funct">
                    <legend>Reset E-mail</legend>
                    <div class="form-group">
                        <label for="username-email">Username</label>
                        <input name="Login" id="username-email" placeholder="Username" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">New Email</label>
                        <input id="password" name="new" placeholder="New E-mail" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">Old Email</label>
                        <input id="password" name="email" placeholder="Old E-mail" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="resetPass" class="btn btn-default btn-login-submit btn-block m-t-md" value="Reset E-mail" />
                    </div>
                </form>
        </div>
    </div>
    <div class='col-md-3'></div>
</div>