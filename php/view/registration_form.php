<div id="login-block">

	                 <h4 class="m-text25 p-b-14">
                                Регистрация
                            </h4>
	<form id="tab-1"
				name="RegistrationForm" 
				method="post"  
				autocomplete="off" 
				enctype="multipart/form-data" >
		<div class="form-box">
			<label class="form-label" for="RegistrationForm_name"><?echo $lang["reg_form"]['name'];?></label>
			<div class="input-holder" > <!-- error" data-error="В имени могут быть только буквы.-->
				<input name="RegistrationForm[name]" id="RegistrationForm_name" type="text" maxlength="50" />
			</div>
		</div>

		<div class="form-box">
			<label class="form-label" for="RegistrationForm_email" ><?echo $lang["reg_form"]['email'];?></label>
			<div class="input-holder">
				<input name="RegistrationForm[email]" id="RegistrationForm_email" type="text" />
				<input type="text" style="display:none;"><!--Автозаполнение в Chrome-->
			</div>
		</div>

		<div class="form-box">
			<label class="form-label" for="RegistrationForm_password"><?echo $lang["reg_form"]['password'];?></label>
			<div class="input-holder">
				<input name="RegistrationForm[password]" id="RegistrationForm_password" type="password" />
				<input type="password" style="display:none;"><!--Автозаполнение в Chrome-->
			</div>
		</div>

		<div class="form-box">
			<label class="form-label" for="RegistrationForm_reppassword"><?echo $lang["reg_form"]['repeat_password'];?></label>
			<div class="input-holder">
				<input name="RegistrationForm[reppassword]" id="RegistrationForm_reppassword" type="password" />
				<input type="password" style="display:none;"><!--Автозаполнение в Chrome-->
			</div>
		</div>

		<div class="form-box">
			<label class="form-label" ><?echo $lang["reg_form"]['gender'];?></label>
			<div class="input-holder gender-switch">
				<input name="RegistrationForm[gender]" type="radio" value="male" checked />
				<div id="male-radio"><div class="ico-man"></div></div>

				<input name="RegistrationForm[gender]" type="radio" value="female" />
				<div id="female-radio"><div class="ico-woman"></div></div>
			</div>
		</div>

		<div class="form-box">
			<label class="form-label" ><?echo $lang["reg_form"]['location'];?></label>
			<div class="input-holder">
				<select name="RegistrationForm[country]" id="RegistrationForm_country">
					<option disabled selected value=""><?echo $lang["reg_form"]['country'];?></option>
					<?
						$myDB = new MyDatabase();
						$countries = $myDB->getCountryList();
						foreach ($countries as $id => $country) {
							echo "<option value='$id'>$country</option>";
						}
					?>
				</select>
			</div>
		</div>
		
		<div class="form-box" style="display: none">
			<label class="form-label"><?echo $lang["reg_form"]['enter_country'];?></label>
			<div class="input-holder">
				<input name="RegistrationForm[other_country]" id="RegistrationForm_other_country" type="text" />
			</div>
		</div>

		<div class="form-box" style="display: none">
			<label class='form-label'><pre> </pre></label>
			<div class="input-holder">
				<select name="RegistrationForm[city]" id="RegistrationForm_city">
				</select>
			</div>
		</div>

		<div class="form-box" style="display: none">
			<label class="form-label"><?echo $lang["reg_form"]['enter_city'];?></label>
			<div class="input-holder">
				<input name="RegistrationForm[other_city]" id="RegistrationForm_other_city" type="text" />
			</div>
		</div>
		<br>
		<div class="form-box">
			<label class="form-label" ><?echo $lang["reg_form"]['birthdate'];?></label>
			<div class="input-holder">
				<select name="RegistrationForm[birth_day]" id="RegistrationForm_day">
					<option disabled selected value=""><?echo $lang["reg_form"]['birthday'];?></option>
					<?
						for ($i = 1; $i < 32; $i++)
							echo "<option value='$i'>$i</option>";
					?>
				</select>	
			</div>	
		</div>

		<div class="form-box">
			<label class="form-label" ><pre> </pre></label>
			<div class="input-holder">
		
				<select name="RegistrationForm[birth_month]" id="RegistrationForm_month">
					<option disabled selected value=""><?echo $lang["reg_form"]['birthmonth'];?></option>
					<? $month = $lang["reg_form"]['monthes'];
						for ($i=0; $i < 12 ; $i++) { 
							$j = $i+1;
							echo "<option value='$j'>$month[$i]</option>";		
						}
					?>
				</select>
			</div>	
		</div>

		<div class="form-box">
			<div class="input-holder">
		
				<select name="RegistrationForm[birth_year]" id="RegistrationForm_year">
					<option disabled selected value=""><?echo $lang["reg_form"]['birthyear'];?></option>
					<?
						$date = getdate();
						for ($i=$date['year']; $i > 1900; $i--) { 
							echo "<option value='$i'>$i</option>";		
						}
					?>
				</select>	
			</div>	
		</div>

		<div class="form-box">
			<label class="upload-label" for="RegistrationForm_photo"> <!-- style="background: url('img/ico/gender_ico.png'); background-size: cover"-->
				<p><?echo $lang["reg_form"]['photo'];?></p>
				<input id="RegistrationForm_photo" type="file" accept="image/*,image/jpeg,image/png,image/gif" />
			</label>
			<div class="load-image" style="display: none">
				<div class="close"></div>
				<div class="loader"></div>
			</div>
		</div>
		<p class="user-terms"><?echo $lang["reg_form"]['license'];?><a href="#"><?echo $lang["reg_form"]['agreement'];?></a></p>
		<br>
		<input type="submit" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4" value=<?echo $lang['reg_form']['register']?> />
	</form>
</div>

<script>
	var lang = {
		error : <?echo json_encode($lang['error']);?>,
		city : <?echo json_encode($lang['reg_form']['city']);?>,
		other_city : <?echo json_encode($lang['reg_form']['other_city']);?>
	}
</script>

<script src="js/main2.js"></script>
