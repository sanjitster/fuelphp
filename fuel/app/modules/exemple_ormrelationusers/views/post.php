<section>
	<div class="row">
		<div class="span10">

			<? var_dump($post) ?>

			<h2><? echo $post->post_title  ?></h2>

			<p><em>Author: <? echo Html::anchor('exemple_ormrelationusers/orm/user/'.$post->user->id,$post->user->username) ?></em></p>
			<p><? echo $post->post_content ?></p>


			<? foreach ($post->comments as $comment){ ?>
				<hr>
				<h3><em>Comment:</em></h3>
				<p><? echo $comment->text ?></p>

			<? } ?>
		</div>
	</div>
</section>