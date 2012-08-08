<div class="row">

	<? if(Session::get_flash('fail')) { ?>
	<div class="alert alert-error fade in span6 offset2">
		<a class="close fade in" data-dismiss="alert" href="#">&times;</a>
		<strong><? echo Session::get_flash('fail') ?></strong>
	</div>
	<? } ?>

	<? echo \Fuel\Core\Form::open(array('class'=>'well form-horizontal span6 offset2')) ?>
	<legend>Вход</legend>

		<fieldset>
			<div class="control-group">
				<label>Логин</label>
				<div class="controls">
					<? echo Form::input('username', $val->validated('username'),array('class'=>'input span3','required'=>'required')) ?>
					<p class="help-block"> <? echo $val->error('username') ?> </p>
				</div>
			</div>

			<div class="control-group">
				<label>Пароль</label>
				<div class="controls">
					<? echo Form::input('password', $val->validated('password'),array('class'=>'input span3','required'=>'required')) ?>
					<p class="help-block"> <? echo $val->error('password') ?> </p>
				</div>
			</div>


			<div class="control-group">
				<div class="controls">
					<input type="submit" name="submit" id="form_submit" class="btn btn-primary btn-large" value="Ok">
				</div>
			</div>


		</fieldset>
	</form>

</div>