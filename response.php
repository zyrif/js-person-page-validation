<?php		
	$name = trim($_GET['namefield']);
	$email = trim($_GET['emailfield']);
	$gender = $_GET['gender'];
	$dobdate = $_GET['dobdate'];
	$dobmonth = $_GET['dobmonth'];
	$dobyear = $_GET['dobyear'];
	$bloodgroup = $_GET['bloodgroup'];
	$degree = $_GET['checkdegree'];
	
	
	// showName starts here
	$words = explode(" ", $name);
	$chars = str_split($name);
	$flag1 = true;
	$flag2 = true;
	//print_r ($chars);
	
	
	foreach ($chars as $item){
		if(!(($item >= 'a' && $item <= 'z') || ($item >= 'A' && $item <= 'Z') || $item == '.' || $item == '-' || $item == ' ')) {
			$flag1 = false;
			break;
		}
	}
	
	if(!(($chars[0] >= 'a' && $chars[0] <= 'z') || ($chars[0] >= 'A' && $chars[0] <= 'Z'))){
		$flag2 = false;
	}
	
	
	if($name==""){
		echo "Name can not be empty";
	}
	
	else if(count($words) < 2){
		echo "Name should contain at least two words.";
	}
	
	else if($flag1 == false){
		echo "Name should contain only a-z, A-Z, dot, dash.";
	}
	
	else if($flag2 == false){
		echo "Name should start with a letter.";
	}
	
	else{
		echo "Name: $name";
	}
	//showName ends here.
	
	echo "<br/>";
	
	//showEmail starts here
	$partemail = explode("@", $email);
	$partdomain = explode(".", $partemail[1]);
	
	if ($email == ""){
		echo "Email Address cannot be empty";
	}
	else if (count($partemail) != 2 || $partemail[0] == ""){
		echo "Invalid Email.";
	}
	else if (count($partdomain) != 2 || $partdomain[0] == ""){
		echo "Invalid Host.";
	}
	else if ($partdomain[1] == ""){
		echo "Invalid Domain.";
	}
	else {
		echo "Email: $email";
	}
	
	//showEmail ends here
	
	echo "<br/>";
	
	//showGender starts here
	if($gender == ""){
		echo "Gender: At least one must be selected.";
	}
	else {
		echo "Gender: $gender";
	}
	//showGender ends here
	
	echo "<br/>";
	
	//showDob starts here
	if(!(($dobdate >= '01' && $dobdate <= '31') && ($dobmonth >= '01' && $dobmonth <= '12') && ($dobyear >= '1900' && $dobyear <= '2100'))) {
		echo "Invalid Birthdate";
	}
	else {
		echo "Date of Birth: $dobdate/$dobmonth/$dobyear";
	}
	
	//showDob ends here
	
	echo "<br/>";
	
	//showBloodgroup starts here
	
	if($bloodgroup == ""){
		echo "A blood group should be selected from the list.";
	}
	else
		echo "Blood Group: $bloodgroup";
		
	//showBloodgroup ends here
	
	echo "<br/>";
	
	//showDegree starts here
	
	if(count($degree) == 0){
		echo "At least one degree should be chosen.";
	}
	else {
		echo "Selected degrees: ";
		foreach($degree as $selected){
			echo $selected;
			echo "&nbsp;&nbsp;";
		}
	}
	
	
?>