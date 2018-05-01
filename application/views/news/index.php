<?php foreach ($news as $item) { ?>
	<h1>
		<a href="<?php echo site_url('/news/' . $item['slug']); ?>"><?php echo $item['title']; ?></a>
	</h1>
	<p><?php echo $item['text'] ?></p>
	<a href="<?php echo site_url('news/update/' . $item['id']); ?>">Edit</a>
	<a href="<?php echo site_url('news/delete/' . $item['id']); ?>">Hapus</a>
<?php } ?>
