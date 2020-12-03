<?php /** @var \App\Data\GenreDTO[] $data */ ?>

<h1>ADD NEW BOOK</h1>
<br>
<a href="profile.php">My Profile</a>
<br>
<form method="post">
    Book Title: <input type="text" name="title" /><br>
    Book Author: <input type="text" name="author" /><br>
    Book Description:<br> <textarea rows="5" name="description"></textarea><br>
    Book Image URL: <input type="text" name="image_url" /><br>
    Book Genre:
    <select name="genre_id">
        <?php foreach ($data as $genre): ?>
            <option value="<?= $genre->getId(); ?>">
                <?= $genre->getName(); ?>
            </option>
        <?php endforeach; ?>
    </select><br>
    <input type="submit" name="add" value="Add">
</form>
