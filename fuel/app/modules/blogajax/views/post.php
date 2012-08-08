<div class="row">
	<article>
		<h1><? echo Html::anchor('blog/post/'.$post->id, $post->title) ?></h1>
		<em>Дата: </em><span class="label label-info"><? echo $post->created_at ?>  </span>
		<em>Автор: </em><span class="label label-warning"><? echo $post->user->username ?></span>
		<p><? echo $post->content ?></p>
	</article>
</div>