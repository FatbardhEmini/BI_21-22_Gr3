<!-- Blog -->
<section class="blog">
    <div class="container">
        <h2>Posts</h2>
        <p>Providing content on our website that answers our prospective customers' questions and helps them learn about our product and services.</p>
        <div class="posts">
            <?php 
                foreach($blogs as $blog) {
                    ?>
                    <div class="post <?= !$blog['published'] ? 'in-review' : '' ?>">
                        <div 
                            class="post-img"
                            style="background-image: url(<?= $blog["thumbnail"] ?>)"></div>
                        <h3><?= $blog["title"] ?></h3>
                        <p><?= $blog["excerpt"] ?></p>
                        <div class="tags">
                            <?php
                                $tags = explode(",", $blog["tags"]);
                                foreach($tags as $tag) {
                                    echo "<span>" . $tag . "</span>";
                                }
                            ?>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</section>