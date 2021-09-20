<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hina+Mincho&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    body
    {   background-color:whitesomke;
        font-family: 'Hina Mincho', serif;

    }
    #mother
     {
         width:100%;
         font-size:20px;
         font-family: 'Hina Mincho', serif;
    }
    aside
    {
        width : 300px;
        background-color :silver;
        text-align:center;
        font-size: 20px;
        font-weight:bold;
        padding: 100px;
        float:left;
        font-family: 'Hina Mincho', serif;
    }
    #tbl 
    {
        font-family: 'Hina Mincho', serif;
        width : 900px;
        font-size:25px;
        text-align:center;
    }
    #tbl th
    {
        font-family: 'Hina Mincho', serif;
        background-color:silver;
        color: black;
        font-size:20px;
    }
    aside button
    {
        font-family: 'Hina Mincho', serif;
        width: 200px;
        padding:6px;
        font-weight:bold;
        font-size:20px; 
        margin-top:12px;
    }
    main
    {
        font-family: 'Hina Mincho', serif;
        float : right;
        border :2px solid black;
        padding: auto;
        
    }
    input
    {
        font-family: 'Hina Mincho', serif;
        font-size: 20px;
        border: 2px solid black
         
    }

    <?php


    //connecting with data base 

        $host='localhost';
        $user='root';
        $pass='';
        $db='student1';
        $connect=mysqli_connect($host,$user,$pass,$db);
        $result=mysqli_query($connect,"select * from student");
    //button variables
        $id='';
        $name='';
        $adress='';


        if(isset($_POST['id']))
            {
                $id=$_POST['id'];
            }
    
            if(isset($_POST['name']))
            {
                $name=$_POST['name'];
            }
            if(isset($_POST['adress']))
            {
                $adress=$_POST['adress'];
            }
        $sqls='';
            if(isset($_POST['add']))
            {
                $sqls="insert into student value ('$id','$name','$adress')";
                mysqli_query($connect,$sqls);
                header("location: home.php");
            }
            if(isset($_POST['remove']))
            {
                $sqls="delete from student where name='$name'";
                mysqli_query($connect,$sqls);
                header("location: home.php");
            }




    ?>

    </style>
</head>
<body>
     <div id='mother'>
         <form method='post'>
        
        <!-- control screen -->
         <aside>

            <div id='div'>
            <img src='https://www.voicesofyouth.org/sites/voy/files/images/2019-03/school.jpg' alt='website logo' width="200">
            <h3> welcome manager  </h3>
            <label> student id </label><br>
            <input type ='text' name='id' id='id'><br>  
            <label> student name </label><br>
            <input type ='text' name='name' id='name'><br>
            <label> student adress </label><br>
            <input type ='text' name='adress' id='adress'><br><br>
            <button name='add'>add student</button> <br>
            <button name='remove'>remove student</button><br>
            <button name='edit'>edit student</button> <br>         

        
            </div>

        </aside>

        <!-- data output -->
                <main>

                    <table id='tbl'>
                    <tr>
                    <th> student ID </th>
                    <th> student name </th>
                    <th> student Adress </th>
                    </tr>  
                    <?php
                            while($row = mysqli_fetch_array($result))
                            {
                                echo "<tr>";
                                echo "<td>".$row['ID']."</td>";
                                echo "<td>".$row['name']."</td>";
                                echo "<td>".$row['adress']."</td>";
                                echo "</tr>";
                            }
                    
                    ?>  
                </table>
                    

                </main>

        </form>


     </div>
</body>
</html>