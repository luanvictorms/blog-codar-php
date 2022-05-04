<?php
    include_once("api/templates/header.php");
    include_once ("api/data/posts.php");
    include_once ("api/data/categories.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }

    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title">
                <?= $currentPost['title'] ?>
            </h1>
            <p id="post-description">
                <?= $currentPost['description'] ?>
            </p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci repellendus sunt velit. Veniam placeat magnam inventore quasi ipsum optio dolorum, expedita eum soluta ipsa delectus! Aut ipsa rerum quae vel!</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tags-list">
                <?php foreach($currentPost['tags'] as $tag):?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category):?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>