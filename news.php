<?php include 'header.php'; ?>

<!-- Section -->
<section>
    <div class="posts">
        <?php foreach(getPages("news", 0) as $newsItem) {
            if ($newsItem["content"]["category"] == $page["content"]["category"]) {
        ?>
        <article>
            <?php if (isset($newsItem["content"]["featuredImage"])) {
            $imageDetails = getMedia($newsItem["content"]["featuredImage"]); ?>
            <a href="<?php echo BASEPATH . '/' . $newsItem["collectionSubpath"] . '/' . $newsItem["path"]; ?>" class="image"><img
                    src="<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["fileSmall"]; ?>"
                    alt="" /></a>
            <?php } ?>
            <a href="<?php echo BASEPATH . '/' . $newsItem["collectionSubpath"] . '/' . $newsItem["path"]; ?>"><h3><?php echo $newsItem["title"]; ?></h3></a>
            <p><i>Published <?php echo date("F jS, Y", $newsItem["created"]); ?> by John Roper</i></p>
        </article>
        <?php } } ?>
    </div>
</section>

<?php include 'footer.php'; ?>