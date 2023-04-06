
<?php require base_path('views/partial/head.php') ?>

<?php require base_path('views/partial/nav.php') ?>
<?php require base_path('views/partial/header.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <h1>Notes Simple </h1>
        <p class="mb-6 mt-6">
            <a href="/notes" class="text-blue-500 underline">My notes ....</a>
        </p>
        <p> <?= $note['body'] ?>  </p>
        <div class="flex gap-x-4">
            <form class="md-6" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button class="mt-5 pl-5 pr-5 pt-3 pb-3 rounded-full bg-red-500">
                    <!-- <a href="/notes/create" class="text-white">Delete Note</a> -->
                    Delete
                </button>
            </form>
            <a href="/note/edit?id=<?= $note['id'] ?>" class="text-white mt-5 pl-5 pr-5 pt-3 pb-3 rounded-full bg-green-500">Update</a>
        </div>




    </div>
</main>
<?php require base_path('views/partial/footer.php') ?>


