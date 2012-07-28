<section>
	<div class="row">
		<div class="span10">


			<h2><? echo $post->post_title ?></h2>
			<p><em>Author:</em> <? echo \Fuel\Core\Html::anchor('simpleblog/orm/user/'.$post->user->id,$post->user->username)  ?></p>
			<p><? echo $post->post_content ?></p>


			<? foreach ($post->comments as $comment){ ?>

				<p><? echo $comment->text ?></p>

			<? } ?>

		</div>
	</div>
</section>