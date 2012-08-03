<div class="row">

	<div class="alert error alert-error span6 offset2" style="display: none">
		<strong>Пользователь с таким логином и паролем не найден. В доступе отказано.</strong>
	</div>
	<? echo Form::open(array('class'=>'well form-horizontal span6 offset2','action'=>'blogajax/blog/send')) ?>
		<legend>Вход</legend>
		<fieldset>

			<div class="control-group">
				<label>Логин</label>
				<div class="controls">
					<? echo Form::input('username', '',array('class'=>'input span3')) ?>
					<p class="help-block validation" id="val-username"></p>
				</div>
			</div>

			<div class="control-group">
				<label>Пароль</label>
				<div class="controls">
					<? echo Form::input('password', '',array('class'=>'input span3')) ?>
					<p class="help-block validation" id="val-password"></p>
				</div>
			</div>


			<div class="control-group">
				<div class="controls">
					<input type="submit" name="submit" class="btn btn-primary btn-large" value="Ok">
				</div>
			</div>
		</fieldset>
	</form>

</div>