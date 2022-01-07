<!-- Greeting -->
<h1><?= htmlspecialchars($greeting); ?></h1>

<!-- Write a form -->
<!-- Is able to enter name -->
<form action="/" method="GET">
    <input type="text" placeholder="Enter a name" name="name" value="<?= $name ?>">
    <button>Submit</button>
</form>

<ul>
<?php foreach ($students as $student) : ?>
    <li><?= $student ?></li>
<?php endforeach; ?>
</ul>