<!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Section List</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </head>
<?php
class section
{
    protected $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "ala", "ala123", "university");
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function submit($course_id, $teacher_id,$section_strength)
    {
        $sql = "INSERT INTO `section` (`course_id`, `teacher_id`,`section_strength`) VALUES ('$course_id', '$teacher_id','$section_strength')";
        $result = mysqli_query($this->conn, $sql);
    }

    public function view($sview)
    {
         ?>

        <body>

        <div class="container">
        <button style="margin: 10px" class="btn btn-primary">
                <a style="color:white;" href="add_section.php?id=<?php echo $_REQUEST['sview']; ?>.php">Add Section</a>
        </button>
            <table class="table">
                <thead>
                <tr>
                    <th>Section ID</th>
                    <th>Teacher ID</th>
                    <th>No. of Enrolled Students</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM `section` WHERE `course_id`=$sview ";
                $result = mysqli_query($this->conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['section_id'] ?></td>
                        <td><?php echo $row['teacher_id'] ?></td>
                        <td><?php echo $row['section_strength'] ?></td>
                        <td>
                            <button class="btn btn-warning">
                                <a name="update" style="color: white;" href="section_crud.php?update=<?php echo $row['section_id']; ?>">Update</a>
                            </button>
                            <button class="btn btn-danger">
                                <a style="color: white;" href="section_crud.php?did=<?php echo $row['section_id']; ?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

        </body>
        </html>
    <?php }
    public function delete($did)
    {
        $did=intval($did);
        $sql = "DELETE from `section` WHERE section_id=$did";
        $result = mysqli_query($this->conn, $sql);
    }
    public function update( ) 
    {        
    $id = $_POST['id'];        
    $teacher_id = $_POST['teacher_id'];        
    $section_strength = $_POST['section_strength'];                         
    $sql = "UPDATE `section` SET `teacher_id`='$teacher_id',`section_strength`='$section_strength' WHERE `section_id`=$id";         
    $result = mysqli_query($this->conn, $sql);  
    }
    public function update_form($section_id)
    { ?>
        <body>
        <?php 

            $sql = "SELECT * FROM `section` WHERE `section_id`=$section_id";
            $result = mysqli_query($this->conn, $sql);               
                while ($row = $result->fetch_assoc()) 
                {    
                    $section_id=$row['section_id'];      
                    $teacher_id = $row['teacher_id'];                    
                    $section_strength = $row['section_strength'];                                      
                }    
            
        ?> 
        
        <div style= " width: 15%; padding: 7px; margin: auto; background-color:skyblue">
        <form action="section_crud.php" method="POST">     
                    <h2>Section Update Form</h2>
                    <input type="hidden" id="id" name="id" value="<?php echo $section_id; ?>" readonly> 
                    <label for="teacher_id">Teacher ID</label><br>
                    <input type="text" id="teacher_id" name="teacher_id" value="<?php echo $teacher_id; ?>"><br>
                    <label for="section_strength">Section Strength</label><br>
                    <input type="text" id="duration" name="section_strength" value="<?php echo $section_strength; ?>" required><br><br>
                    <input class="btn btn-primary" type="submit" name="update_section" id=update_section value="Update Section"><br>   
                    </form> </div>
        
        </body>
        </html>  
        
         
  <?php  }
}

if (isset($_POST["add_section"])) {
    $obj = new section();
    $course_id = $_POST["course_id"];
    $teacher_id = $_POST["teacher_id"];
    $section_strength = $_POST["section_strength"];
    $obj->submit($course_id,$teacher_id,$section_strength);
    header("location:course_crud.php?vid=view");
}
if(isset($_REQUEST['sview'])) {
    $show = new section();
    $show->view($_REQUEST['sview']);
}
if (isset($_REQUEST['did'])) {
    $del = new section();
    $del->delete($_REQUEST['did']);
    header('location:course_crud.php?vid=view');
}
if (isset($_REQUEST['update'])) {
    $up = new section();
    $up->update_form($_REQUEST['update']);
}
if (isset($_REQUEST['update_section'])) {
    $up = new section();
    $up->update();
    header('location:course_crud.php?vid=view');
}
?>
