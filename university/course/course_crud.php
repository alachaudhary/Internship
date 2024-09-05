<!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Course List</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </head>
<?php
class course
{
    protected $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "ala", "ala123", "university");
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function submit($course_name, $course_duration)
    {
        $sql = "INSERT INTO `course` (`course_name`, `course_duration`) VALUES ('$course_name', '$course_duration')";
        $result = mysqli_query($this->conn, $sql);
    }

    public function view()
    { ?>
        <body>

        <div class="container">
            <button style="margin: 10px" class="btn btn-primary">
                <a style="color:white;" href="add_course.php">Add Course</a>
            </button>
            <table class="table">
                <thead>
                <tr>
                    <th>Course Id</th>
                    <th>Course Name</th>
                    <th>Course Duration</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM `course`";
                $result = mysqli_query($this->conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['course_id']; ?></td>
                        <td><?php echo $row['course_name']; ?></td>
                        <td><?php echo $row['course_duration']; ?></td>
                        <td>
                           

                            <button class="btn btn-primary">
                                <a name="add_section" style="color: white;" href="add_section.php?id=<?php echo $row['course_id']; ?>">Add Section</a>
                            </button>
                            <button class="btn btn-info">
                                <a name="view_section" style="color: white;" href="section_crud.php?sview=<?php echo $row['course_id']; ?>">View Sections</a>
                            </button>
                            <button class="btn btn-warning">
                                <a name="update" style="color: white;" href="course_crud.php?update=<?php echo $row['course_id']; ?>">Update</a>
                            </button>
                            <button class="btn btn-danger">
                                <a style="color: white;" href="course_crud.php?did=<?php echo $row['course_id']; ?>" onclick="return confirm('Are you sure this will delete all the related Sections?');">Delete</a>
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
        $sql = "DELETE from `course` WHERE course_id=$did";
        $result = mysqli_query($this->conn, $sql);
        $sql = "DELETE from `section` WHERE course_id=$did";
        $result = mysqli_query($this->conn, $sql);
    }
    public function update( ) 
    {        
    echo "hi";
    $id = $_POST['id'];        
    $name = $_POST['name'];        
    $duration = $_POST['duration'];                         
    $sql = "UPDATE `course` SET `course_name`='$name',`course_duration`='$duration' WHERE `course_id`=$id";         
    $result = mysqli_query($this->conn, $sql);  
    }
    public function update_form($course_id)
    { ?>
        <body>
        <?php 

            $sql = "SELECT * FROM `course` WHERE `course_id`=$course_id";
            $result = mysqli_query($this->conn, $sql);               
                while ($row = $result->fetch_assoc()) 
                {    
                    $course_id=$row['course_id'];      
                    $course_name = $row['course_name'];                    
                    $course_duration = $row['course_duration'];                                      
                }    
            
        ?> 
        
        <div style= " width: 15%; padding: 7px; margin: auto; background-color:skyblue">
        <form action="course_crud.php" method="POST">     
                    <h2>Course Update Form</h2>
                    <input type="hidden" id="id" name="id" value="<?php echo $course_id; ?>" readonly> 
                    <label for="name">Course Name:</label><br>
                    <input type="text" id="name" name="name" value="<?php echo $course_name; ?>"><br>
                    <label for="duration">Course Duration:</label><br>
                    <input type="text" id="duration" name="duration" value="<?php echo $course_duration; ?>" required><br><br>
                    <input class="btn btn-primary" type="submit" name="update_course" id=update_course value="Update Course"><br>   
                    </form> </div>
        
        </body>
        </html>  
        
         
  <?php  }
}

if (isset($_POST["add"])) {
    $obj = new course();
    $course_name = $_POST["course_name"];
    $course_duration = $_POST["course_duration"];
    $obj->submit($course_name, $course_duration);
    header("location:course_crud.php?vid=view");
}
if(isset($_REQUEST['vid'])) {
    $show = new course();
    $show->view();
}
if (isset($_REQUEST['did'])) {
    $del = new course();
    $del->delete($_REQUEST['did']);
    header('location:course_crud.php?vid=view');
}
if (isset($_REQUEST['update'])) {
    $up = new course();
    $up->update_form($_REQUEST['update']);
}
if (isset($_REQUEST['update_course'])) {
    $up = new course();
    $up->update();
    header('location:course_crud.php?vid=view');
}
?>
