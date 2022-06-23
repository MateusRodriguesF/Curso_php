<?php
include_once("templates/header.php");

if(isset($_GET["id"])){
    $postId = $_GET["id"];
    $currentPost;

    foreach($posts as $post) {
        if($post["id"] == $postId){
            $currentPost = $post;
        }
    }

}

?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-tite"><?= $currentPost["title"] ?></h1>
            <p id="post-description"><?=$currentPost["description"] ?></p>
            <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost["img"] ?> " alt="<?= $currentPost["title"] ?>">
            </div>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem minima voluptatum labore consequatur vitae itaque similique dolorum ab iusto, est necessitatibus. Debitis enim id repudiandae totam nesciunt laudantium voluptatum eveniet.
                Fugiat iure praesentium impedit aliquid nostrum, ullam culpa ut eaque aspernatur sit laudantium iusto error provident, rem aperiam reprehenderit recusandae debitis officia suscipit? Inventore, quibusdam libero distinctio cupiditate accusamus molestias.
                Debitis consequuntur nesciunt id esse quibusdam, repudiandae neque ut aut, illo expedita porro dolorem. Earum, voluptate hic nesciunt fugiat excepturi ea adipisci soluta laborum aperiam. Quisquam quae voluptatum dignissimos omnis!
                Non fugit ipsam aspernatur, quibusdam nesciunt laudantium rerum. Deleniti veniam eveniet ex accusamus, hic maiores quasi laborum distinctio cumque harum quibusdam, aliquam nostrum, debitis dignissimos. Officia rerum deleniti ducimus vero!
                Illo eius vero accusamus quam assumenda temporibus nesciunt, quibusdam sequi tempore ratione incidunt molestiae earum expedita cupiditate harum sint magnam? Error, laborum consequuntur dolores quia incidunt aut ratione non. Vitae?
            </p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
                <ul id="tag-list">
                    <?php foreach($currentPost["tags"] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                    <?php endforeach ?>
                </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach ?>
            </ul>
        </aside>
    </main>
<?php
include_once("templates/footer.php");
?>
