<?php 
require '../../config.php';
require_once '../../dao/PostDaoMySql.php';
$postDao = new PostDaoMySql($pdo, $base); 
$data = $postDao->getAllPosts();
?>

<?php require '../partials/header.php'; ?>
    <section>
        <?php require '../partials/aside.php'; ?>
        <main>
            <?php foreach($data as $d): ?>
                <div class="post-item">
                <img src="https://th.bing.com/th/id/OIP.EivCYmfxSccqnP2poBJtQgHaEK?pid=ImgDet&rs=1" alt="img">
                <p class="data-theme"><?=$d['created_at'].' - '.$d['category'];?></p>
                <h3><?=$d['title'];?></h3>
                <p class="subtitle"><?=$d['subtitle'];?></p>
            </div>
            <?php endforeach; ?>
        </main>
</section>
<?php require '../partials/footer.php'; ?>