<?php


class Main {

	public $con; 
	public function __construct(){
		$this->con = mysqli_connect("localhost", "admin", "root", "attendance");
				if (mysqli_connect_errno()) {
			echo"Error: could not connect to database.";
			exit;
		}
	}

	//"insert info from table (, ,) values ('data','data')"
	public function insert_data($table,$fields){
		$sql = "";
		$sql .="INSERT INTO " . $table;
		$sql .=" (".implode(",",array_keys($fields)). ") VALUES ";
		$sql .=" ('".implode("','", array_values($fields)). "')";

/*echo "<h1>" . $sql . "</h1>";*/
		$query = mysqli_query($this->con,$sql);
		if($query){
			return true;
		}
	}

	//end of insert
	//srat of fetch
	public function fetch_data($table){
		$sql = "SELECT * FROM ".$table;
		$array = array();
		$query = mysqli_query($this->con,$sql);
		while($row = mysqli_fetch_assoc($query)){
			$array[] = $row;
		}
		return $array;
	}
	//end of fetch



	//start of update
	public function update_data($table,$where,$fields){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			//id = 5 and firstname = 'kanit ano'
		$condition.=$key . "='" .$value ."' AND ";

		}
		$condition = substr($condition, 0, -5);
		foreach ($fields as $key => $value) {
			//UPDATE FUNCTION QUERY
			//UPDATE table SET lastname = '' , firstname = '' , middlename '' , picture = '', WHERE id = '',
			$sql .=$key . "='".$value."',";
		}
		$sql = substr($sql, 0, -2); $value . "' AND ";
		$sql = "UPDATE ".$table." SET ".$sql."' WHERE " . $condition;
		
/*		echo $sql;*/
		if(mysqli_query($this->con,$sql)){
			return true;
		}
	}
	//end of update

//start select
	public function select_data($table,$where){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			$condition .= $key . "='" . $value . "' AND ";
			}

		$condition = substr($condition,0,-5);
		$sql .= "SELECT * FROM ".$table." WHERE ".$condition;

/*		echo $sql;*/

		//fetch singe data. by boss noli
		$query = mysqli_query($this->con,$sql);
		$row = mysqli_fetch_assoc($query);
		return $row;
	}
//end select

	//start select  orderby
	public function select_data_orderby($table,$where){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			$condition .= $key . "='" . $value . "' AND ";
			}

		$condition = substr($condition,0,-5);
		$sql .= "SELECT * FROM ".$table." WHERE ".$condition ." ORDER BY ID DESC LIMIT 1";

/*		echo $sql;*/

		//fetch singe data. by boss noli
		$query = mysqli_query($this->con,$sql);
		$row = mysqli_fetch_assoc($query);
		return $row;
	}
//end select orderby

		//srat of fetch
	public function fetch_data_presentLIKE($table,$condition,$like_argument){
		$sql = "SELECT * FROM ".$table." WHERE employee_id='".$condition ."' AND status != 'Logged_In' AND status != 'Logged_Out' AND date_time LIKE '".$like_argument."%'";;
		$array = array();
		$query = mysqli_query($this->con,$sql);

		while($row = mysqli_fetch_assoc($query)){
			$array[] = $row;
		}
		return $array;
	}
	//end of fetch


//start delete data
	public function delete_data($table, $where){
		$sql = "";
		$condition = "";
		foreach($where as $key => $value){
			$condition .= $key . "='" . $value . "' AND ";
		}

		$condition = substr($condition, 0, -5);
		$sql .= "DELETE FROM ".$table." WHERE " .$condition;

		echo $sql;

/*		if (mysqli_query($this->con,$sql)){
			return true;
		}*/
	}
//end of delete

		//session start
		public function get_session(){
			return $_SESSION['login'];
		}
	//session end

	//logout destroy session

		public function user_logout(){
			$_SESSION['login'] = FALSE;

			$where = array("employee_id"=>$_SESSION['id']);
			$myarray = array(
				"last_login"=>$_SESSION['last_login'],
				"status"=>"OUT"
			);
			$this->update_data("Employee_Login_Master", $where, $myarray);

			$myarray = array(
				"employee_id"=>$_SESSION['id'],
				"status"=>"Logged_Out"
			);
			$this->insert_data("Activity_Master", $myarray);

			session_destroy();
		}

	//show name or email.
		public function get_fullname($uid){
			$sql = "SELECT * FROM user_account WHERE id = '$uid'";
			$result = mysqli_query($this->con,$sql);
			$user_data = mysqli_fetch_array($result);
			echo $user_data['user_name'];
		}


			//for login process
	public function check_login($employeeID, $password){
/*		$password = md5($password);*/
		$sql= "SELECT * FROM Employee_Login_Master WHERE employee_id='$employeeID' AND password='$password'";
		//checking id the username is available in the table
		$result = mysqli_query($this->con,$sql);
		$user_data = mysqli_fetch_array($result);
		$count_row = $result->num_rows;

		

		if ($count_row == 1){
			//this login car is from session
			$_SESSION['login'] = true;
			$_SESSION['id'] = $user_data['employee_id'];
			$_SESSION['type'] = $user_data['user_type_id'];
			$_SESSION['last_login'] = $user_data['last_login'];
			

			$where = array("employee_id"=>$_SESSION['id']);
			$myarray = array("status"=>"IN");
			$this->update_data("Employee_Login_Master", $where, $myarray);

			$myarray = array(
				"employee_id"=>$_SESSION['id'],
				"status"=>"Logged_In"
			);
			$this->insert_data("Activity_Master", $myarray);

			return true;
		}
		
	}

		//generateID.
		public function generateID(){
			$sql = "SELECT max(id) AS temp_id FROM Employee_Master";
			$result = mysqli_query($this->con,$sql);
			$user_data = mysqli_fetch_array($result);
			$unique_id = uniqid();
			$unique_id = substr( $unique_id, 9 );
			$temp_ID = $unique_id.($user_data['temp_id'] + 1);
			return $temp_ID;
		}

		public function get_date_time($type)
		if ($type == "date") {
			$date_ = new DateTime();
			$usersTimezone = 'Asia/Manila';
			$tz = new DateTimeZone($usersTimezone);
			$date_->setTimeZone($tz);
			return = $date->format('Y-m-d');
		
		}else{
			$date_ = new DateTime();
			$usersTimezone = 'Asia/Manila';
			$tz = new DateTimeZone($usersTimezone);
			$date_->setTimeZone($tz);
			return = $date->format('H:i:s');
		}
}

$obj = new Main();
$obj2 = new Main();
if (isset($_POST['submit_registration'])) {
	
	$myarray = array(
		"employee_id"=>$obj->generateID(),
		"first_name"=>ucfirst($_POST['firstname']),
		"last_name"=>ucfirst($_POST['lastname']),
		"middle_name"=>ucfirst($_POST['middlename']),
		"birth_day"=>$_POST['bday'],
		"address"=>$_POST['address'],
		"phone_main"=>$_POST['mainphone'],
		"phone_home"=>$_POST['homephone'],
		"email"=>$_POST['email'],
		"gender"=>$_POST['gender'],
		"status_id"=>"1"
	);

	$temp_pass = md5(substr( $_POST['mainphone'], 4 ));

	$myarray2 = array(
		"employee_id"=>$myarray['employee_id'],
		"password"=>"admin",
		"user_type_id"=>$_POST['usertype']
	);
		if ($obj2->insert_data("Employee_Login_Master", $myarray2)) {
			header("location: registration.php?msg=Registration Successfull");
		}else{
			//failed register
			header("location: registration.php?msg=Login Registration Failed");
		}
}


/*if (isset($_POST['action'])) {

	echo "The _post action! is called.";
    switch ($_POST['action']) {
        case 'time_in':
            time_in();
            break;

        case 'break_':
            break_();
            break;

        case 'lunch':
            lunch();
            break;

        case 'time_out':
            time_out();
            break;
    }
}

function time_in() {
    echo "The select time_in is called.";
    exit;
}

function break_() {
    echo "The insert break_ is called.";
    exit;
}
function lunch() {
    echo "The insert lunch is called.";
    exit;
}
function time_out() {
    echo "The insert time_out is called.";
    exit;
}*/

if (isset($_POST['time_in'])) {
	$myarray = array(
		"employee_id"=>$_SESSION['id'],
		"status"=>"Time_In"
	);
	    if ($obj->insert_data("Activity_Master", $myarray)) {

		}else{

		}
}

if (isset($_POST['break_'])) {
	$myarray = array(
		"employee_id"=>$_SESSION['id'],
		"status"=>"Break"
	);
	    if ($obj->insert_data("Activity_Master", $myarray)) {
			header("location: home.php?msg=Punch_in_BREAK_Successfull");
		}else{
			header("location: home.php?msg=Punch_in_BREAK_Failed");
		}
}

if (isset($_POST['lunch'])) {
	$myarray = array(
		"employee_id"=>$_SESSION['id'],
		"status"=>"Lunch"
	);

	    if ($obj->insert_data("Activity_Master", $myarray)) {
			header("location: home.php?msg=Punch_in_LUNCH_Successfull");
		}else{
			header("location: home.php?msg=Punch_in_LUNCH_Failed");
		}
}

if (isset($_POST['time_out'])) {
	$myarray = array(
		"employee_id"=>$_SESSION['id'],
		"status"=>"Time_Out"
	);

	    if ($obj->insert_data("Activity_Master", $myarray)) {
			header("location: home.php?msg=Clock_OUT_Successfull");
		}else{
			header("location: home.php?msg=Clock_OUT_Failed");
		}

}


//name a button name="update" to allow button to update 
if (isset($_POST['update'])) {
	$id = $_POST["id"];
	$where = array("id"=>$id);
	$myarray = array(
		"id"=>$_POST['id'],
		"firstname"=>$_POST['firstname'],
		"lastname"=>$_POST['lastname']
	);
	if ($obj->update_data("person", $where, $myarray)) {
		header("location: update.php?msg=Your request is Accepted");
	}
}

//delete button
if (isset($_GET['delete'])) {
	$id = $_GET["id"];
	$where = array("id"=>$id);
	if ($obj->delete_data("person", $where)) {
		header("location: index.php?msg=Your request is Accepted");
	}
}



?>