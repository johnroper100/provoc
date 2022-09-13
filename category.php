<?php include 'header.php'; ?>

<!-- Section -->
<section>
    <div class="posts">
        <?php foreach(getPages("articles", 0) as $article) {
            if ($article["content"]["category"] == $page["_id"]) {
        ?>
        <article>
            <?php if (isset($article["content"]["featuredImage"])) {
            $imageDetails = getMedia($article["content"]["featuredImage"]); ?>
            <a href="<?php echo BASEPATH . '/' . $article["collectionSubpath"] . '/' . $article["path"]; ?>" class="image"><img
                    src="<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["fileSmall"]; ?>"
                    alt="" /></a>
            <?php } ?>
            <?php $authorDetails = getUser($article["createdUser"]); ?>
            <a href="<?php echo BASEPATH . '/' . $article["collectionSubpath"] . '/' . $article["path"]; ?>"><h3><?php echo $article["title"]; ?></h3></a>
            <p><i>Published <?php echo date("F jS, Y", $article["created"]); ?> by <?php echo $authorDetails["name"]; ?></i></p>
        </article>
        <?php } } ?>
    </div>
</section>

<?php include 'footer.php'; ?>