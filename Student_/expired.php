<?php
  include 'auth.php';
  include "connection.php";
  include "nav.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Expired</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body{
  font-size: 13px;
}
        /* Style for container div */
.container {
  width: 100%;
  margin: 20px auto;
}

/* Style for the left div with buttons */
.left-div {
  float: left;
  padding-left: 5px;
  padding-top: 20px;
}

.left-div button {
  background-color: #06861a;
  color: yellow;
  margin-right: 10px;
  border: none;
  padding: 10px;
  border-radius: 5px;
  cursor: pointer;
}

.left-div button:hover {
  background-color: #0d9e27;
}

/* Style for the right div with fine amount */
.right-div {
  float: right;
  padding-top: 10px;
}

.right-div h3 {
  color: #06861a;
}

/* Clearfix to clear the floats */
.clearfix {
  clear: both;
}


/* Style the table */
table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    table th, table td {
        padding: 8px;
        text-align: left;
        vertical-align: top;
        border-top: 1px solid #ccc;
    }
    table th {
        background-color: #6db6b9e6;
        font-weight: bold;
    }
    table tr:nth-child(odd) {
        background-color: #f9f9f9;
    }
    div.table-wrapper {
        max-height: 300px;
        overflow-y: auto;
    }
    @media screen and (max-width: 800px) {
  table {
    font-size: 8px;
  }
}
    </style>
</head>
<body>

  <div class="lela">
    
    <?php
      if(isset($_SESSION['login_user']))
      {
        ?>

      <div style="float: left; padding-left:  5px; padding-top: 20px;">
      <form method="post" action="">
          <button name="submit2" type="submit" class="btn btn-default" style="background-color: #06861a; color: yellow;">RETURNED</button> 
                      &nbsp&nbsp
          <button name="submit3" type="submit" class="btn btn-default" style="background-color: red; color: yellow;">EXPIRED</button>
      </form>
      </div>
      <div style="float: right;padding-top: 10px;">
        
        <?php 
        $var=0;
          $result=mysqli_query($db,"SELECT * FROM `fine` where username='$_SESSION[login_user]' and status='not paid' ;");
          while($r=mysqli_fetch_assoc($result))
          {
            $var=$var+$r['fine'];
          }
          $var2=$var+$_SESSION['fine'];

         ?>
        <h3>Your fine is: 
          <?php
            echo "Birr ".$var2;
          ?>
        </h3>
      </div>
        <br><br><br><br>
        <?php
      }

      
         $ret='RETURNED';
         $exp='EXPIRED';
        
        if(isset($_POST['submit2']))
        {
          
        $sql="SELECT student.username,roll,books.bid,books.name,authors,edition,approve,issue,issue_book.return FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve ='$ret' and issue_book.username ='$_SESSION[login_user]'  ORDER BY `issue_book`.`return` DESC";
        $res=mysqli_query($db,$sql);

        }
        else if(isset($_POST['submit3']))
        {
        $sql="SELECT student.username,roll,books.bid,books.name,authors,edition,approve,issue,issue_book.return FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve ='$exp' and issue_book.username ='$_SESSION[login_user]' ORDER BY `issue_book`.`return` DESC";
        $res=mysqli_query($db,$sql);
        }
        else
        {
        $sql="SELECT student.username,roll,books.bid, books.name,authors,edition,approve,issue,issue_book.return FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve !='' and issue_book.approve !='Yes'  and issue_book.username ='$_SESSION[login_user]' ORDER BY `issue_book`.`return` DESC";
        $res=mysqli_query($db,$sql);
        }

        echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
        echo "<th>"; echo "Username";  echo "</th>";
        echo "<th>"; echo "Roll No";  echo "</th>";
        echo "<th>"; echo "BID";  echo "</th>";
        echo "<th>"; echo "Book Name";  echo "</th>";
        echo "<th>"; echo "Authors Name";  echo "</th>";
        echo "<th>"; echo "Edition";  echo "</th>";
        echo "<th>"; echo "Status";  echo "</th>";
        echo "<th>"; echo "Issue Date";  echo "</th>";
        echo "<th>"; echo "Return Date";  echo "</th>";

      echo "</tr>"; 

      while($row=mysqli_fetch_assoc($res))
      {
        echo "<tr>";
          echo "<td>"; echo $row['username']; echo "</td>";
          echo "<td>"; echo $row['roll']; echo "</td>";
          echo "<td>"; echo $row['bid']; echo "</td>";
          echo "<td>"; echo $row['name']; echo "</td>";
          echo "<td>"; echo $row['authors']; echo "</td>";
          echo "<td>"; echo $row['edition']; echo "</td>";
          echo "<td>"; echo $row['approve']; echo "</td>";
          echo "<td>"; echo $row['issue']; echo "</td>";
          echo "<td>"; echo $row['return']; echo "</td>";
        echo "</tr>";
      }
    echo "</table>";
        echo "</div>";

    ?>
  </div>
</body>
</html>


<?php
include 'footer.php';

?>