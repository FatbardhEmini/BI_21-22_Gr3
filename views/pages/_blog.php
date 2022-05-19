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
                        <h3><?= str_replace("2", "two", $blog["title"])
                         ?></h3>
                        <p><?= strlen($blog["excerpt"]) > 50 ? substr($blog["excerpt"], 0, 50) . "..." : $blog["excerpt"] ?></p>
                        <div class="tags">
                            <?php
                                $tags = explode(",", $blog["tags"]);
                                foreach($tags as $tag) {
                                    echo "<span>" . $tag . "</span>";
                                }
                            ?>
                        </div>
                        <p style="margin-top: 15px">Date: <?php 
                            $dateSplitted = preg_split("/([-\s:])/", $blog["created_at"], -1, PREG_SPLIT_DELIM_CAPTURE);
                            echo $dateSplitted[4] . "," . $dateSplitted[2] . "," . $dateSplitted[0];
                        ?></p>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</section>