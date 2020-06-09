<?php

 $con=new PDO("jdbc:mysql://localhost:3306/autotest","cristi","cristi");
 
 $sql = "SELECT nume,prenume,punctaj FROM conturi ORDER BY punctaj DESC LIMIT 10";

 $statement = $con->prepare($sql);
 $statement->execute();

 $result = $statement->fetchAll();
 
 header( "Content-type: text/xml");
 echo "<?xml version='1.0' encoding='UTF-8'?>
 <rss version='2.0'>
 <channel>
 <title>scoreboard RSS</title>
 <link>/</link>
 <description>gives the name and score of participants </description>
 <language>en-us</language>";
 
foreach($result as $row){
    
}



 while($row = mysqli_fetch_array($con,$query)){
  $nume=$row["nume"];
  $prenume=$row["prenume"];
  $score=$row["punctaj"];
  
  echo "<item>
  <username>$nume $prenume</username>
  <score>$score</score>
  </item>";
 }
 echo "</channel></rss>";
 
?>
