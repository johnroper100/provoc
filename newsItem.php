<?php include 'header.php'; ?>
<section>
	<?php $imageDetails = getMedia($page["content"]["featuredImage"]); ?>
	<span class="image main"><img
			src="<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["file"]; ?>"
			alt="" /></span>
	<header class="main">
		<h1>
			<?php echo $page["title"]; ?>
		</h1>
		<h4>Published on
			<?php echo date("F jS, Y", $page["created"]); ?> by John Roper
		</h4>
	</header>
	<?php echo $page["content"]["pageContent"]; ?>

</section>
<?php include 'footer.php'; ?>