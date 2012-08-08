<section>
	<div class="row">
		<div class="span10">


			<h2><? echo $user->username ?></h2>
			<p><em>UserGroup:</em> <?

			foreach ($user->groups as $group){

				echo $group->group;

			}?></p>

		</div>
	</div>
</section>