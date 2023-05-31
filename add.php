<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="s_name" required/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="s_address" required/>
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="s_class" required>
                <option value="" selected disabled>Select Class</option>
                <?php
                $connection = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed:("); 
                
                $sql = "SELECT * FROM class";

                $result = mysqli_query($connection, $sql) or die("Query unsuccessful:(");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['c_id']; ?>"><?php echo $row['c_name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="s_phone" required/>
        </div>
        <input class="submit" type="submit" value="Save"/>
    </form>
</div>
</div>
</body>

</html>