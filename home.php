<?php include 'header.php'; ?>
        <!-- Banner -->
        <section id="banner">
            <div class="content">
                <header>
                    <h1><?php if (isset($page["content"]["title"])) { echo $page["content"]["title"]; } ?></h1>
                    <p><?php if (isset($page["content"]["subtitle"])) { echo $page["content"]["subtitle"]; } ?></p>
                </header>
                <p><?php if (isset($page["content"]["description"])) { echo $page["content"]["description"]; } ?></p>
                <ul class="actions">
                    <li><a href="<?php echo $page["content"]["link"]; ?>" class="button big">Learn More</a></li>
                </ul>
            </div>
            <span class="image object">
                <?php
                if (isset($page["content"]["featuredImage"])) {
                    $imageDetails = getMedia($page["content"]["featuredImage"]);
                ?>
                    <img src="<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["file"]; ?>" alt="" />
                <?php } ?>
            </span>
        </section>

        <!-- Section -->
        <section>
            <header class="major">
                <h2>Recent Articles</h2>
            </header>
            <div class="posts">
            <?php foreach(getPages("articles", 0) as $article) { ?>
                <article>
                    <?php
                    if (isset($article["content"]["featuredImage"])) {
                    $imageDetails = getMedia($article["content"]["featuredImage"]); ?>
                    <a href="<?php echo BASEPATH . '/' . $article["collectionSubpath"] . '/' . $article["path"]; ?>" class="image"><img
                            src="<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["fileSmall"]; ?>"
                            alt="" /></a>
                    <?php } ?>
                    <?php $authorDetails = getUser($article["createdUser"]); ?>
                    <a href="<?php echo BASEPATH . '/' . $article["collectionSubpath"] . '/' . $article["path"]; ?>"><h3><?php echo $article["title"]; ?></h3></a>
                    <p><i>Published <?php echo date("F jS, Y", $article["created"]); ?> by <?php echo $authorDetails["name"]; ?></i></p>
                </article>
            <?php } ?>
            </div>
        </section>


<?php include 'footer.php'; ?>