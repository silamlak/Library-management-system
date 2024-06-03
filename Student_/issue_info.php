<?php
  include 'auth.php';
  include "connection.php";
  include "nav.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title>issu_info</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">
/* Style the table */
body{
  font-size: 13px;
}
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
    <h3 style="text-align: center;">Information of Borrowed Books</h3><br>
    <?php
    $c=0;

      if(isset($_SESSION['login_user']))
      {
        $sql="SELECT student.username, roll, books.bid, books.name, authors, edition, issue, issue_book.return FROM student INNER JOIN issue_book ON student.username = issue_book.username INNER JOIN books ON issue_book.bid = books.bid WHERE issue_book.username = '$_SESSION[login_user]' AND issue_book.approve != '' ORDER BY issue_book.return ASC";
        $res=mysqli_query($db,$sql);
        
        
        echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
        echo "<th>"; echo "Username";  echo "</th>";
        echo "<th>"; echo "Roll No";  echo "</th>";
        echo "<th>"; echo "BID";  echo "</th>";
        echo "<th>"; echo "Book Name";  echo "</th>";
        echo "<th>"; echo "Authors Name";  echo "</th>";
        echo "<th>"; echo "Edition";  echo "</th>";
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
          echo "<td>"; echo $row['issue']; echo "</td>";
          echo "<td>"; echo $row['return']; echo "</td>";
        echo "</tr>";
      }
    echo "</table>";
        echo "</div>";
       
      }
      else
      {
        ?>
          <h3 style="text-align: center;">Login to see information of Borrowed Books</h3>
        <?php
      }
    ?>
  </div>
</div>
</body>
</html>

<?php
include 'footer.php';

?>