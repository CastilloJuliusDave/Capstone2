

		<div class="content-i">
			<div class="content-box">
			    <div class="element-wrapper">
					<h6 class="element-header">Register</h6>
					<div class="element-box">
					   	<h5 class="form-header">
						Powerful Datatables
					   	</h5>
					   	<div class="form-desc">
							<div class="card-body">
								<form id="signupForm" action="" method="post" name="login">
									<div class="form-row p-1 text-white">
									    <div class="form-group col-md-4">
											<label for="firstname">First Name</label>
											<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
									    </div>
									    <div class="form-group col-md-4">
										    <label for="middlename">Middle Name</label>
										    <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name" required>
									    </div>
									    <div class="form-group col-md-4">
										    <label for="lastname">Last Name</label>
										    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
									    </div>
									    <div class="w-100"><br></div>
									    <div class="form-group col-md-6">
											<label for="email">Email</label>
											<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
									    </div>
									    <div class="form-group col-md-6">
										    <label for="confirm_email"> Confirm Email</label>
										    <input type="email" class="form-control" id="confirm_email" name="confirm_email" placeholder="Confirm Email" required>
									    </div>
									    <div class="w-100"><br></div>
									    <div class="form-group col-md-4">
										    <label for="mainphone">Main Phone Number</label>
										    <input type="text" class="form-control" id="mainphone" name="mainphone" placeholder="Main Phone Number" required>
									    </div>
									    <div class="form-group col-md-4">
										    <label for="homephone">Home Phone Number</label>
										    <input type="text" class="form-control" id="homephone" name="homephone" placeholder="Home Phone Number" required>
									    </div>
									    <div class="form-group col-md-4">
											<label for="bday">Birth Day</label>
											 <input class="form-control" id="bday" name="bday" type="date" data-input-style="box" placeholder="Please Select..." required/>
									    </div>
									    <div class="w-100"><br></div>
									    <div class="form-group col-md-7">
										    <label for="address">Address</label>
										    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
									    </div>
									    <div class="form-group col-md-2">
										    <label for="Gender">Gender</label>
										    <select name="gender" id="gender" class="form-control">
										    	<option value="Male" selected>Male</option>
										    	<option value="Female" >Female</option>
										    </select>
								  		</div>
								  		<div class="form-group col-md-3">
										    <label for="Gender">User Type</label>
										    <select name="usertype" id="usertype" class="form-control">
										    	<option value="1" selected>Employee</option>
										    	<option value="2" >Human Resource</option>
										    	<option value="3" >Admin</option>
										    </select>
								  		</div>
									</div>
									<div class="form-group">
									    <div class="form-check">
												<input class="btn btn-primary float-right" type="submit" name="submit_registration" value="Register">									
									    </div>
									</div>
								</form>
							</div>
					   </div>
					   <div class="table-responsive">

					   </div>
					</div>
			    </div>
			</div>
		</div>

<div class="col-lg-7 col-md-7 col-sm-12 p-1">
	<div class="card reg_card card-fluid float-center">
		<div class="card-header card-header">
			<h3 class="text-white"></h3>
		</div>

		<div class="card-footer">
			<div class="d-flex justify-content-center">
				<a class="float-right login_links" href="login.php">Already Registered Click Here!</a>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-5 col-md-5 col-sm-12 p-1">
	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>
			<h2 class="panel-title">Rows with Details</h2>
		</header>
		<div class="panel-body">
			<table id="example" class="table table-striped table-bordered table-compact" style="width:100%; font-size: .8rem;">
		        <thead>
		            <tr>
		                <th>ID</th>
		                <th>Fullname</th>
		                <th>Type</th>
		                <th>status</th>
		            </tr>
		        </thead>
		        <tbody>

			<?php
				$row = $obj->fetch_data("Employee_Master");
				foreach ($row as $employee) {
					/*concatinate full name with or without middle name*/
					if ($employee['middle_name'] != "") {
						$fullname = $employee['last_name'].", ".$employee['first_name']." ".substr($employee['middle_name'], 0, 1).".";
					}else{
						$fullname = $employee['last_name'].", ".$employee['first_name'];
					}
					/*get employee login type*/
					$category = $employee['employee_id'];
					$where = array("employee_id"=>$category,);
					$emp_info_table = $obj->select_data("Employee_Login_Master", $where);

						$category = $emp_info_table['user_type_id'];
						$where = array("id"=>$category,);
						$user_type = $obj->select_data("User_Type_Master", $where);

					/*get employee status type*/

						$category = $employee['status_id'];
						$where = array("id"=>$category,);
						$emp_status = $obj->select_data("Employee_Status_Master", $where);
						
					?>

					<tr>
						<td><?php echo $employee['employee_id'];?></td>
		                <td><?php echo $fullname;?></td>
		                <td><?php echo $user_type['user_type'];?></td>
		                <td><?php echo $emp_status['status'];?></td>
		            </tr>

				<?php } ?>

		            
		        </tbody>
		        <tfoot>
		            <tr>
		                <th>ID</th>
		                <th>Full Name</th>
		                <th>Type</th>
		                <th>Status</th>
		            </tr>
		        </tfoot>
		    </table>
		</div>
	</section>
</div>
