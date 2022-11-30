<?php require '../../config.php'; ?>
<?php require '../partials/header.php' ?>
<section id="formNews">
        <?php require '../partials/postModal.php'; ?>
        <form action="<?=$base;?>/actions/post_action.php" method="post">
            <div class="titleNews">
                <label>
                <div><p>Título</p><span>*</span></div>
                <input type="text" name="title">
                </label><br>
                <label>
                <div><p>Subtítulo</p><span>*</span></div>
                <input type="text" name="subtitle">
                </label><br>
            </div>
            <div class="othersNews">
                <label>
                <div><p>Categoria</p><span>*</span></div>
                <select name="categories">
                        <option>HTML e CSS</option>
                        <option>JavaScript</option>
                        <option>PHP</option>
                        <option>SQL</option>
                        <option>TypeScript</option>
                        <option>Python</option>
                        <option>React</option>
                        <option>Node JS</option>
                        <option>Vue.js</option>
                        <option>AdonisJS</option>
                        <option>Angular</option>
                        <option>Git/Github</option>
                    </select>
                </label><br>
                <label>
                <div><p>Imagem</p></div>
                <input type="file" name="image">
                </label><br>
            </div>
            <div class="bodyNews">
                <label>
                <div><p>Corpo</p><span>*</span></div>
                <textarea name="body"></textarea>
                </label>
            </div>    
            <button>Publicar</button>
        </form>
</section>
<?php require '../partials/footer.php' ?>