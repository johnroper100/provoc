<?php include 'header.php'; ?>
<section>
	<?php if (isset($page["content"]["featuredImage"])) {
	$imageDetails = getMedia($page["content"]["featuredImage"]); ?>
	<span class="image main"><img
			src="<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["file"]; ?>"
			alt="" /></span>
	<?php } ?>
	<header class="main">
		<h1>
			<?php echo $page["title"]; ?>
		</h1>
		<h4>Published on
			<?php $authorDetails = getUser($page["createdUser"]); ?>
			<?php echo date("F jS, Y", $page["created"]); ?> by <?php echo $authorDetails["name"]; ?>
		</h4>
	</header>
	<?php echo $page["content"]["pageContent"]; ?>

</section>
<?php include 'footer.php'; ?>