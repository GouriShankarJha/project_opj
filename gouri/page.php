<html>
    <head>
        <title>page</title>
        <style>
            body
            {
                background-color:rgb(150,190,170);
            }
            table,th,td
            {
                border:2px solid black;
                width:1100px;
                background-color:white;
                cursor:pointer;
            }
            .container
            {
                padding : 0px 0px;
                margin:0px;
                cursor:pointer;
            }
             .burger
            {  
                cursor:pointer; 
                 display: block; 
                align-items:center; 
                justify-content:center;
                 position: sticky; 
                padding : 5px 5px;
                margin:1px;
                display: inline-block;
             } 
             .com
             {
                display:block;
                padding:5px 10px;
                margin:1px;
             }
        </style>
    </head>

    <body>
        <center>
            <div class ="com";>
            <h1 style="color:blue">O.P JINDAL GLOBAL UNIVERSITY</h1>
            <h2 style="color:blue">Complete details of all Student</h2>
            </div>
            <div class="container">
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
                   
                    // connect to database
                    $con = mysqli_connect('localhost','root','');
                    mysqli_select_db($con, 'studentd');
                    
                    // define how many results you want per page
                    $results_per_page = 10;
                    
                    // find out the number of results stored in database
                    $sql='SELECT * FROM studentd';
                    $result = mysqli_query($con, $sql);
                    $number_of_results = mysqli_num_rows($result);
                    
                    // determine number of total pages available
                    $number_of_pages = ceil($number_of_results/$results_per_page);
                    
                    // determine which page number visitor is currently on
                    if (!isset($_GET['page'])) {
                      $page = 1;
                    } else {
                      $page = $_GET['page'];
                    }
                    
                    // determine the sql LIMIT starting number for the results on the displaying page
                    $this_page_first_result = ($page-1)*$results_per_page;
                    
                    // retrieve selected results from database and display them on page
                    $sql='SELECT * FROM studentd LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
                    $result = mysqli_query($con, $sql);
                    
                    while($row = mysqli_fetch_array($result)) 
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
                    
                    // display the links to the pages
    
                        for ($page=1;$page<=$number_of_pages;$page++) {
                        echo ' <div class=burger> <button class="btn" ><a href="page.php?page=' . $page .' ">' . $page . '</a></button> </div>';
                        }
                  
                    
                ?>
                </table>
                    </div>
        </center>
    </body>

</html>
