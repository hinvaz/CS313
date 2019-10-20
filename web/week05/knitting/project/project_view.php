<?php include '../view/header.php'; ?>
<main>
    <section>
        <table>
                    <tr>
                        <th>
                            <strong>Project Name</strong>
                        </th>
                        <th>
                            <strong>Project Type</strong>
                        </th>
                        <th>
                            <strong>Start Date</strong>
                        </th>
                        <th>
                            <strong>Yarn</strong>
                        </th>
                        <th>
                            <strong>Needle</strong>
                        </th>
                        <th>
                            <strong>Miscellaneous</strong>
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                       <?php foreach ($projectview as $project) : ?>
                        <td>
                            <?php echo $project['projectname']; ?>
                        </td>
                        <td>
                            <?php echo $project['projecttype']; ?>
                        </td>
                         <td>
                            <?php echo $project['projectstartdate']; ?>
                        </td>
                        <td>
                            <?php echo $project['yarnbrand']; ?> <?php echo $project['yarnweight']; ?> Weight in <?php echo $project['yarncolor']; ?>
                        </td>
                        <td>
                            <?php echo $project['needlebrand']; ?> <?php echo $project['needletype']; ?> Size <?php echo $project['needlesize']; ?>
                        </td>   
                        <td>
                            <?php echo $project['miscname']; ?>
                        </td>
                        <td>
                            <form action="index.php" method="post" id="project_edit">
                            <input type="hidden" name="action"
                                   value="show_edit_form_project">
                            <input type="hidden" name="projectid"
                                   value="<?php echo $project['projectid']; ?>">
                            <input type="submit" value="Edit">
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
 
        <div class="bottomlinks">
        <a href="index.php?action=show_add_form_project">Add Projects</a>
    </div>
    </section>
</main>
<?php include '../view/footer.php'; ?>