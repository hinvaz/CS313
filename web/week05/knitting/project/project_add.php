<?php include '../view/header.php'; ?>
<main>
    <h1>Add Project</h1>
    <form action="index.php" method="post" id="add_project_form">
        <input type="hidden" name="action" value="project_add">

        <label>Yarn:</label>
        <select name="yarnid">
        <?php foreach ( $yarns as $yarn ) : ?>
            <option value="<?php echo $yarn['yarnid']; ?>">
                <?php echo $yarn['yarnbrand']; ?> <?php echo $yarn['yarnweight']; ?> <?php echo $yarn['yarncolor']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>
        
        <label>Needle:</label>
        <select name="needleid">
        <?php foreach ( $needles as $needle ) : ?>
            <option value="<?php echo $needle['needleid']; ?>">
                <?php echo $needle['needlebrand']; ?> <?php echo $needle['needletype']; ?> <?php echo $needle['needlesize']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>
        
         <label>Miscellaneous:</label>
        <select name="miscid">
        <?php foreach ( $miscs as $misc ) : ?>
            <option value="<?php echo $misc['miscid']; ?>">
                <?php echo $misc['miscname']; ?> <?php echo $misc['miscamount']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>
        
        <label>Name:</label>
        <input type="text" name="projectname" />
        <br>
        
        <label>Start Date:</label>
        <input type="text" name="projectstartdate" value="YYYY-MM-DD"/>
        <br>
        
         <label>Type:</label>
        <input type="text" name="projecttype" />
        <br>
        
        <label>&nbsp;</label>
        <input type="submit" value="Add Project" />
        <br>
    </form>
    <div class="bottomlinks">
        <a href="index.php?action=view_project">View Projects</a>
    </div>

</main>
<?php include '../view/footer.php'; ?>