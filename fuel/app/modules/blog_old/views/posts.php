<section>
	<div class="row">
		<div class="span10">
			<? //var_dump($posts) ?>
			<? foreach ($posts as $post) { ?>


			<h2><? echo \Fuel\Core\Html::anchor('blog/orm/post/'.$post->id, $post->post_title )  ?></h2>
			<p><em>Author:</em> <? echo $post->user->username ?></p>
			<p><? echo $post->post_content ?></p>



			<? } ?>
		</div>
	</div>
</section>