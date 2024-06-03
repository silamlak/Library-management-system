<?php
session_start();
include 'nav.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Our Team</title>
  <style>
    /* Reset some default styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body{
    font-size: 13px;
}

    /* Styles for the team section */
    .team {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      margin: 20px;
    }

    .team-member {
      width: 300px;
      margin: 20px;
      padding: 20px;
      background-color: #f2f2f2;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .team-member img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .team-member h3 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .team-member p {
      font-size: 16px;
      color: #888;
    }

    /* Responsive styles */
    @media screen and (max-width: 768px) {
      .team-member {
        width: 90%;
      }
    }
  </style>
</head>
<body>
  <section class="team">
  <div class="team-member">
      <img src="images/p.jpg" alt="Person 1">
      <h3>Front-end Developer (Fikadu)</h3>
      <p>Fikadu is our front-end developer who specializes in implementing the user interface using HTML and CSS. He is responsible for designing and coding the web pages</p>
    </div>
    <div class="team-member">
      <img src="images/p.jpg" alt="Person 2">
      <h3>Back-end Developer (Yeshimebet)</h3>
      <p>Yeshimebet is our back-end developer who takes care of the server-side programming using PHP. She focuses on database management, user authentication, and implementing server-side functionalities</p>
    </div>
    <div class="team-member">
      <img src="images/p.jpg" alt="Person 3">
      <h3>Database Administrator (Gossaye)</h3>
      <p>Gossaye is our database administrator, and he plays a crucial role in managing the database for our library management system</p>
    </div>
    <div class="team-member">
      <img src="images/p.jpg" alt="Person 4">
      <h3>Quality Assurance Tester (Urge)</h3>
      <p>Urge is our dedicated quality assurance tester. He rigorously tests our system to identify any bugs, errors, or usability issues</p>
    </div>
    <div class="team-member">
      <img src="images/p.jpg" alt="Person 5">
      <h3>Team Coordinator and Support (Abreham)</h3>
      <p>Abreham takes on the role of team coordinator. He facilitates communication among team members. Additionally, Abreham provides support and assistance to the team</p>
    </div>
  </section>
</body>
</html>
<?php
include 'footer.php';
?>

