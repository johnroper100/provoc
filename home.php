<?php include 'header.php'; ?>


        <!-- Banner -->
        <section id="banner">
            <div class="content">
                <header>
                    <h1><?php echo $page["content"]["title"]; ?></h1>
                    <p><?php echo $page["content"]["subtitle"]; ?></p>
                </header>
                <p><?php echo $page["content"]["description"]; ?></p>
                <ul class="actions">
                    <li><a href="#" class="button big">Learn More</a></li>
                </ul>
            </div>
            <span class="image object">
                <?php $imageDetails = getMedia($page["content"]["featuredImage"]); ?>
                <img src="<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["file"]; ?>" alt="" />
            </span>
        </section>

        <!-- Section -->
        <section>
            <header class="major">
                <h2>Recent Articles</h2>
            </header>
            <div class="posts">
            <?php foreach(getPages("newsItems", 0) as $newsItem) { ?>
                <article>
                    <?php $imageDetails = getMedia($newsItem["content"]["featuredImage"]); ?>
                    <a href="<?php echo BASEPATH . '/' . $newsItem["collectionSubpath"] . '/' . $newsItem["path"]; ?>" class="image"><img
                            src="<?php echo BASEPATH; ?>/uploads/<?php echo $imageDetails["fileSmall"]; ?>"
                            alt="" /></a>
                    <a href="<?php echo BASEPATH . '/' . $newsItem["collectionSubpath"] . '/' . $newsItem["path"]; ?>"><h3><?php echo $newsItem["title"]; ?></h3></a>
                    <p><i>Published <?php echo date("F jS, Y", $newsItem["created"]); ?> by John Roper</i></p>
                </article>
            <?php } ?>
            </div>
        </section>


<?php include 'footer.php'; ?>