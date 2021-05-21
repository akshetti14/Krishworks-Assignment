
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Database Managememt System</title>
    <style>
    body{
        background-color:whitesmoke; 
    }
    input{
        width:40%;
        height:5%;
        border:1px;
        border-radius:0.5px;
        padding: 8px 15px 8px 15px;
        margin:10px 0px 15px 0px;
        box-shadow:1px 1px 2px 1px grey;
    }
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
</head>
<body>

    <center>
    <h1>Krishworks Assignment</h1>
    <form action="" method="POST">
    <input type="text" name="id" placeholder="Enter Name To Search"/>
    <br/>
    <input type="submit" name="search_name" value="Search Data">
    </form>
    <br>
    <form action="" method="POST">
    <input type="text" name="id" placeholder="Enter Phone Number To Search"/>
    <br/>
    <input type="submit" name="search_phone" value="Search Data">
    </form>
    <form action="" method="POST">
    <input type="text" name="id" placeholder="Enter Marks To Search"/>
    <br/>
    <input type="submit" name="search_x" value="Search Data">
    </form>
    </center>
    <?php
        
        $connection =mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,'students');
        $print=false;
        if(isset($_POST['search_name']))
        {
            $id=$_POST['id'];
            
            $query="SELECT * FROM student where studentName='$id'";
            $query_run=mysqli_query($connection,$query);
            $html='<table>';
            $html.='<tr><td>Name</td><td>Email</td><td>Phone.No</td><td>Physics</td><td>Chemistry</td><td>Maths</td><td>Biology</td><td>English</td><td>Total</td></tr>';
            while($row=mysqli_fetch_assoc($query_run))
            {
                $html.='<tr><td>'.$row['studentName'].'</td><td>'.$row['emailid'].'</td><td>'.$row['phoneNumber'].'</td><td>'.$row['Physics'].'</td><td>'.$row['Chemistry'].'</td><td>'.$row['Maths'].'</td><td>'.$row['Biology'].'</td><td>'.$row['English'].'</td><td>'.$row['Total'].'</td></tr>';

            }
            $html.='</table>';
            echo $html;
            $print =true;
           
        }

        if(isset($_POST['search_phone']))
        {
            $id=$_POST['id'];
            
            $query="SELECT * FROM student where phoneNumber='$id'";
            $query_run=mysqli_query($connection,$query);
            $html='<table>';
            $html.='<tr><td>Name</td><td>Email</td><td>Phone.No</td><td>Physics</td><td>Chemistry</td><td>Maths</td><td>Biology</td><td>English</td><td>Total</td></tr>';
            while($row=mysqli_fetch_assoc($query_run))
            {
                $html.='<tr><td>'.$row['studentName'].'</td><td>'.$row['emailid'].'</td><td>'.$row['phoneNumber'].'</td><td>'.$row['Physics'].'</td><td>'.$row['Chemistry'].'</td><td>'.$row['Maths'].'</td><td>'.$row['Biology'].'</td><td>'.$row['English'].'</td><td>'.$row['Total'].'</td></tr>';

            }
            $html.='</table>';
            echo $html;
            
            
        }
        if(isset($_POST['search_x']))
        {
            $id=$_POST['id'];
            
            $query="SELECT * FROM student where total>='$id'";
            $query_run=mysqli_query($connection,$query);
            $html='<table>';
            $html.='<tr><td>Name</td><td>Email</td><td>Phone.No</td><td>Physics</td><td>Chemistry</td><td>Maths</td><td>Biology</td><td>English</td><td>Total</td></tr>';
            while($row=mysqli_fetch_assoc($query_run))
            {
                $html.='<tr><td>'.$row['studentName'].'</td><td>'.$row['emailid'].'</td><td>'.$row['phoneNumber'].'</td><td>'.$row['Physics'].'</td><td>'.$row['Chemistry'].'</td><td>'.$row['Maths'].'</td><td>'.$row['Biology'].'</td><td>'.$row['English'].'</td><td>'.$row['Total'].'</td></tr>';

            }
            $html.='</table>';
            echo $html;
            $print =true;
            
           
            
        }
        
       
    ?>
    


</body>
</html>