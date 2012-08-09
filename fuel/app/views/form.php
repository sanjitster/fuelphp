<? echo Form::open(array('class'=>'well form-horizontal span6 offset2','action'=>'/form/send')) ?>
<legend>Вход</legend>
<fieldset>

	<div class="control-group">
		<label>Селект</label>
		<div class="controls">
			<? echo Form::select(
								'username',
								'',
								array(
					                'none' => 'None',
					                'europe' => array(
					                    'uk' => 'United Kingdom',
					                    'nl' => 'Netherlands'
					                ),
					                'us' => 'United States'
			)) ?>
		</div>
	</div>


	<div class="control-group">
		<div class="controls">
			<input type="submit" name="submit" class="btn btn-primary btn-large" value="Ok">
		</div>
	</div>
</fieldset>
</form>

<? echo print_r($post) ?>