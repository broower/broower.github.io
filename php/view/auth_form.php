<div id="login-block">

	<h4 class="m-text25 p-b-14">
        Авторизация
    </h4>
	<form id="tab-1"
				name="AuthorizationForm" 
				method="post">
		<div class="form-box">
			<label class="form-label" for="AuthorizationForm_email" ><?echo $lang["auth"]['email'];?></label>
			<div class="input-holder">
				<input name="AuthorizationForm[email]" id="AuthorizationForm_email" type="text" />
				<input type="text" style="display:none;"><!--Автозаполнение в Chrome-->
			</div>
		</div>

		<div class="form-box">
			<label class="form-label" for="AuthorizationForm_password" ><?echo $lang["auth"]["password"];?></label>
			<div class="input-holder">
				<input name="AuthorizationForm[password]" id="AuthorizationForm_password" type="password" />
				<input type="password" style="display:none;"><!--Автозаполнение в Chrome-->
			</div>
		</div>
		<br>
		<input type="submit" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4" value=<?echo $lang['auth']['enter'];?> />
	</form>
</div>

<script>
	var lang = {
		error : <?echo json_encode($lang['error']);?>,
		city : <?echo json_encode($lang['reg_form']['city']);?>,
		other_city : <?echo json_encode($lang['reg_form']['other_city']);?>
	}
</script>

<script src="js/auth.js"></script>
