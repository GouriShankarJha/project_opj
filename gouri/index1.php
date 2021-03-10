<html>
    <head>
        <title>Fetch Data From Database table</title>
        <link rel="pagination" href="pagination.php">
        <style>
            body
            {
                background-color:rgb(122,223,180);
            }
            table,th,td
            {
                border:2px solid black;
                width:1100px;
                background-color:white;
                cursor:pointer;
            }
            .btn
            {
                width : 10%;
                height :5%;
                font-size:30px;
                padding:0px;
                cursor:pointer;
            }
            .frm
            {
                padding : 2px 3px;
                margin:2px;
                cursor:pointer;
            }
            .container
            {
                padding : 2px 3px;
                margin:2px;
                cursor:pointer;
            }
        </style>
    </head>

    <body>
        <center>
            <h1 style="color:red">O.P JINDAL GLOBAL UNIVERSITY</h1>
            <h2 style="color:grey">Search and fetch student detail from database</h2>

            <div class="container">
             
                <form class="frm" action="" method="POST">
                    <input type="text" name="id" placeholder="Enter student id">
                    <input type="Submit" name="search" value="Search by stu.Id."><br><br>
                    <input type="text" name="age" placeholder="Enter student age">
                    <input type="Submit" name="search" value="Search by st.age"><br><br>
                    <input type="text" name="Phone" placeholder="Enter student Phone No.">
                    <input type="Submit" name="search" value="Search by Phone"><br><br>
                    <input type="text" name="Top" placeholder="Submit for top 10 marks">
                    <input  type="Submit"  name="ttt" value="Get top 10 marks">
    
                </form>
                <table>
                    <tr>
                        <th>Sno</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Marks</th>
                        <th>dt</th>
                    </tr><br>
                    <?php
                    $connection=mysqli_connect("localhost","root","");
                    
                    $db=mysqli_select_db($connection,'studentd');
                    
                    if(isset($_POST['search']))
                    {
                        if(isset($_POST['id']))
                        {
                            $id=$_POST['id'];
                            $query = "SELECT * from `studentd` where Sno ='$id' ";
                            $query_run=mysqli_query($connection,$query);
                            // $num=mysqli_num_row($query);
                            // echo $num;
                            while($row=mysqli_fetch_array($query_run))
                            {
                                ?>
                                <tr>
                                    <td><?php echo $row['Sno']; ?></td>
                                    <td><?php echo $row['Name']; ?></td>
                                    <td><?php echo $row['Age']; ?></td>
                                    <td><?php echo $row['Gender']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['Phone']; ?></td>
                                    <td><?php echo $row['Marks']; ?></td>
                                    <td><?php echo $row['dt']; ?></td>
                                </tr>

                                <?php
                            }
                        }
                        if(isset($_POST['age']))
                        {
                            $age=$_POST['age'];
                            $query = "SELECT * from `studentd` where Age ='$age' ";
                            $query_run=mysqli_query($connection,$query);
                            // $num=mysqli_num_row($query);
                            // echo $num;
                            while($row=mysqli_fetch_array($query_run))
                            {
                                ?>
                                <tr>
                                    <td><?php echo $row['Sno']; ?></td>
                                    <td><?php echo $row['Name']; ?></td>
                                    <td><?php echo $row['Age']; ?></td>
                                    <td><?php echo $row['Gender']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['Phone']; ?></td>
                                    <td><?php echo $row['Marks']; ?></td>
                                    <td><?php echo $row['dt']; ?></td>
                                </tr>

                                <?php
                            }
                        }
                        if(isset($_POST['Phone']))
                        {
                            $Phone=$_POST['Phone'];
                            $query = "SELECT * from `studentd` where Phone ='$Phone' ";
                            $query_run=mysqli_query($connection,$query);
                            // $num=mysqli_num_row($query);
                            // echo $num;
                            while($row=mysqli_fetch_array($query_run))
                            {
                                ?>
                                <tr>
                                    <td><?php echo $row['Sno']; ?></td>
                                    <td><?php echo $row['Name']; ?></td>
                                    <td><?php echo $row['Age']; ?></td>
                                    <td><?php echo $row['Gender']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['Phone']; ?></td>
                                    <td><?php echo $row['Marks']; ?></td>
                                    <td><?php echo $row['dt']; ?></td>
                                </tr>

                                <?php
                            }
                        }
                           
                    }
                    
                    if(isset($_POST['ttt']))
                        {
                            $Top=$_POST['Top'];
                            $query = "SELECT * FROM studentd ORDER BY marks DESC LIMIT 10";
                            $query_run=mysqli_query($connection,$query);
                            // $num=mysqli_num_row($query);
                            // echo $num;
                            while($row=mysqli_fetch_array($query_run))
                            {
                                ?>
                                <tr>
                                    <td><?php echo $row['Sno']; ?></td>
                                    <td><?php echo $row['Name']; ?></td>
                                    <td><?php echo $row['Age']; ?></td>
                                    <td><?php echo $row['Gender']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['Phone']; ?></td>
                                    <td><?php echo $row['Marks']; ?></td>
                                    <td><?php echo $row['dt']; ?></td>
                                </tr>

                                <?php
                             }
                             
                        }
                        

                   ?>
                </table>
                       <br><a href="http://localhost/gouri/page.php">
                        <input  type="Submit" name="detail" value="Complete table & details of all student">
                        </a>
        </center>
    </body>

</html>
