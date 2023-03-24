<?php  require base_path('views/partial/head.php') ?>

<?php  require base_path('views/partial/nav.php') ?>
<?php  require base_path('views/partial/header.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1>Notes </h1>
        <ul class="p-6">
            <?php foreach ($notes as $note) : ?>
            <li class="m-6 bg-gray-300 ">
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                    <?= $note['body'] ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>

        <button class="mt-5 pl-5 pr-5 pt-3 pb-3 rounded-full bg-indigo-500">
            <a href="/notes/create" class="text-white">Create Note</a>
        </button>
    </div>
</main>
<?php  require base_path('views/partial/footer.php') ?>