<section>
	<div class="row">
		<div class="span10">
			<? //var_dump($posts) ?>
			<? foreach ($posts as $post) { ?>


			<h2><? echo Html::anchor('exemple_ormrelationusers/orm/post/'.$post->id,$post->post_title)  ?></h2>

			<p><em>Author: <? echo Html::anchor('exemple_ormrelationusers/orm/user/'.$post->user->id,$post->user->username) ?></em></p>
			<p><? echo $post->post_content ?></p>



			<? } ?>
		</div>
	</div>
</section>