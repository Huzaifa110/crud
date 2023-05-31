<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    $connection = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed:(");

    $student_id = $_GET['id'];

    $sql = "SELECT * FROM student WHERE s_id = {$student_id}";

    $result = mysqli_query($connection, $sql) or die("Query unsuccessful:(");

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            ?>
            <form class="post-form" action="updatedata.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="hidden" name="s_id" value="<?php echo $row['s_id']; ?>" />
                    <input type="text" name="s_name" value="<?php echo $row['s_name']; ?>" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="s_address" value="<?php echo $row['s_address']; ?>" />
                </div>
                <div class="form-group">
                    <label>Class</label>
                    <?php
                    $sql2 = "SELECT * FROM class";

                    $result2 = mysqli_query($connection, $sql2) or die("Query unsuccessful:(");

                    if (mysqli_num_rows($result2) > 0) {

                        echo '<select name="s_class">
                            <option value="" selected disabled>Select Class</option>';

                        while ($row2 = mysqli_fetch_assoc($result2)) {
                            if($row['s_class'] == $row2['c_id']){
                                $select = "selected";
                            }else{
                                $select = "";
                            }
                            echo "<option {$select} value='{$row2['c_id']}'>{$row2['c_name']}</option>";


                        }
                        echo "</select>";
                    } ?>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="s_phone" value="<?php echo $row['s_phone']; ?>" />
                </div>
                <input class="submit" type="submit" value="Update" />
            </form>
        <?php }
    } ?>
</div>
</div>
</body>

</html>