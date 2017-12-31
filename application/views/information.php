<? php if(isset($users)){
		foreach($users as $item){
	// we will now loop through all the user data we have and just ech the full name and email
		echo 'Full name is'. $item['name'] . 'and email is'. $item['email'];
		echo br(2);
		//"echo br()" works just like <br/> in html.

	}
}
 	else{
		//we just want to display something is $user is empty so lets do that
		echo '<h4> There is no data to display </h4>';
	}

	?>

