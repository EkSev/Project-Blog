<?php
include(SITE_ROOT . "/app/controllers/commentaries.php");
?>

<div class="col-md-9 col-12 comments">
    <h3>Оставить комментраий</h3>
    <form action="<?= BASE_URL . "single.php?post=$page"; ?>" method="post">
        <div class="err">
            <!-- Вывод массива с обишками -->
            <p><?php include("app/helps/errorInfo.php"); ?></p>
        </div>
        <input type="hidden" name="page" value="<?= $page; ?>">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email адрес</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Напишите ваш отзыв</label>
            <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" name="goComment" claass="btn bth-primary">Отправить</buttton>
        </div>
    </form>
    <?php if(count($comments) > 0): ?>
        <div class="row all-comments">
            <h3 class="col-12">Комментраии к записи</h3>
            <?php foreach ($comments as $comment): ?>
                <div class="col-12 one-comment">
                    <span><i class="fa-regular fa-envelope"></i><?= $comment['email'] ;?></span>
                    <span><i class="fa-regular fa-calendar-check"></i><?= $comment['created_date'] ;?></span>
                    <div class="col-12 text">
                        <?= $comment['comment']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif ;?>
</div>