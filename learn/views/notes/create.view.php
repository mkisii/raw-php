<?php  require base_path('views/partial/head.php') ?>

<?php  require base_path('views/partial/nav.php') ?>
<?php  require base_path('views/partial/header.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <h1 class="text-blue-500 text-center text-lg mb-6">Create Note</h1>
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <form action="/notes" method="POST">
                        <div class="shadow sm:overflow-hidden sm:rounded-md">
                            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                <div class="grid grid-cols-3 gap-6">
                                </div>
                                <div>
                                    <label for="body"
                                        class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                                    <div class="mt-2">
                                        <textarea id="body" name="body" rows="3"
                                            class="mt-1 block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"
                                            placeholder="your note">
                                            <?= $_POST['body'] ?? '' ?>
                                        </textarea>

                                        <?php if(isset($errors['body'])) : ?>
                                            <p class="text-red-500 text-xs mt-5"><?= $errors['body'] ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6 flex gap-x-4 justify-end">

                                <a href="/notes" class="inline-flex justify-center rounded-md bg-gray-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Cancel</a>

                                <button type="submit"
                                    class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</main>
<?php  require base_path('views/partial/footer.php') ?>