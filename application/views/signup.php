


<?php echo form_open('users/create');?>

	<label for="name"> name</label>
	<input type="text" name="name"><br/><br/>

	<label for="email">email</label>
	<input type="email" name="email"><br/><br/>

	<label for="username">username</label>
	<input type="text" name="username"><br/><br/>

	<label for="password">password</label>
	<input type="password" name="password"><br/><br/>


	<input type="submit" name="create user">	
</form>

<?php echo anchor('Users/getUserData','See Users') ?>