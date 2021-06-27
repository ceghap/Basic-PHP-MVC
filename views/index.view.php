<?php require('partials/head.php'); ?>

    <h1>My Tasks</h1>

    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description; ?></strike>
                <?php else: ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Add Task</h2>
    <form method="POST" action="addtask">
        <input type="text" name="description"/>
        <button type="submit">Submit</button>
    </form>
<?php require('partials/footer.php'); ?>