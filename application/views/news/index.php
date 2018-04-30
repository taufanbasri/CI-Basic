<?php foreach ($news as $item) { ?>
	<h1>
		<a href="<?php echo site_url('/news/' . $item['slug']); ?>"><?php echo $item['title']; ?></a>
	</h1>
	<p><?php echo $item['text'] ?></p>
<?php } ?>
