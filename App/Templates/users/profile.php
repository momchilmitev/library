<?php /** @var \App\Data\UserDTO $data */ ?>

<h1>Hello, <?= $data->getFullName(); ?></h1>
<br>
<a href="add_book.php">Add new book</a> | <a href="myProfile.php">My profile</a> | <a href="/logout.php">logout</a>
<br>
<br>
<br>
<a href="myBooks.php">My books</a>
<br>
<a href="allBooks.php">All books</a>