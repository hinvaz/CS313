<?php include '../view/header.php'; ?>
<main>
    <h1>Edit Project</h1>
        <form action="index.php" method="post" id="edit_project_form">
            <input type="hidden" name="action" value="project_edit">

            <label>Name:</label>
            <input type="text" name="projectname" value="<?php echo $aproject['projectname']; ?>"> <br>

            <input type="hidden" name="projectid" value="<?php echo $aproject['projectid']; ?>">
            
            <label>Type:</label>
            <input type="text" name="projectttype" value="<?php echo $aproject['projecttype']; ?>"><br>

            <label>Start Date:</label>
            <input type="text" name="projectstartdate" value="<?php echo $aproject['projectstartdate']; ?>"><br>


            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
    <div class="bottomlinks">
        <a href="index.php?action=project_view">View Projects</a>
    </div>

</main>
<?php include '../view/footer.php'; ?>