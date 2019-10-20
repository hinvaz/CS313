<?php include '../view/header.php'; ?>
<main>
    <h1>Projects</h1>

    <section>
        <!-- display a table of recipes -->
        <h2><?php echo $projectname; ?></h2>
        <ul class="nav">
            <!-- display links for  -->
            <?php foreach ($projects as $project) : ?>
            <li>
                <a href="?action=view_project">
                    <?php echo $project['projectname']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>
<?php include '../view/footer.php'; ?>