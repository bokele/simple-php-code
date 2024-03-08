<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mt-6">
            <a href="/notes/create"
                class="  justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create
                Note</a>
        </p>

        <ul role="list" class="divide-y divide-gray-100">


            <?php foreach ($notes as $note) : ?>
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">

                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900"> <?= htmlspecialchars($note['body']) ?>
                        </p>

                    </div>
                </div>

                <a href="/note?id=<?= $note['id'] ?>" class="justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm
                    font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline
                    focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Detail
                </a>
            </li>
            <?php endforeach; ?>
        </ul>


    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>