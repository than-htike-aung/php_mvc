

<h1>Home Page</h1>

<ul>
    <?php foreach($data as $user): ?>
        <li><?php echo $user->name; ?></li>
        <li><?php echo $user->email; ?></li>
        <hr>
    <?php endforeach; ?>
</ul>


<img src="<?php echo URLROOT . '/assets/imgs/php.jpg' ?>" alt="">