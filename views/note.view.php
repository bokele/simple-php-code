<?php require('partials/head.php') ?>
<?php require('partials/menu.view.php') ?>
<?php require('partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul role="list" class="divide-y divide-gray-100">
            <?php  foreach($notes as $note): ?>
            <li class="flex justify-between gap-x-6 py-5">
                <?=  $note->body ?></li>
            <?php endforeach ?>
        </ul>
    </div>
</main>

<?php require('partials/footer.php') ?>