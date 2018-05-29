<div class="row">
    <div class='col-md-3'></div>
    <div class="col-md-6">
        <div class="login-box well">
                <form method="POST" action="http://localhost/Formular/dashboard/recieveInfo" enctype="multipart/form-data" id="form-create">
                    <legend>Create Form</legend>
                    <div class="form-group">
                        <label for="Title">Title</label>
                        <input id="Title" name="Title" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea id="Description" class="form-control" form="form-create" rows="4" cols="50" name="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Gender">Gender</label><br>
                        Male
                        <input id="Gender" name="Gender" type="radio" class="form-control" value="male" />
                        Female
                        <input id="Gender" name="Gender" type="radio" class="form-control" value="female" />
                    </div>
                    <div class="form-group">
                        <input id="File" name="file" type="file" class="btn btn-default btn-login-submit btn-block m-t-md" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="Trimite" class="btn btn-default btn-login-submit btn-block m-t-md" value="Create" />
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
<script type="text/javascript" src="<?php echo URL;?>Views/dashboards/js/default.js">
</script>