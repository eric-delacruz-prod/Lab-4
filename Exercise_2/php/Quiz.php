<?php
//access the global array called $_POST to get the values from the text fields


$score = 0;
$count = 0;

$user1 = $_POST["q1"];
if($user1 == "Nebraska") {
   $score = $score + 20;
   $count++;
}

$user2 = $_POST["q2"];
if($user2 == "Topeka") {
   $score = $score + 20;
   $count++;

}

$user3 = $_POST["q3"];
if($user3 == "University of Kansas") {
   $score = $score + 20;
   $count++;
}

$user4 = $_POST["q4"];
if($user4 == "Western Meadowlark") {
   $score = $score + 20;
   $count++;
}

$user5 = $_POST["q5"];
if($user5 == "EECS 448") {
   $score = $score + 20;
   $count++;
}

echo "<h1> Results</h1>";

echo "Question 1: Which state is above Kansas?" . "<br>";
echo "You answered: " . $user1 . "<br>";
echo "Correct answer: Nebraska" . "<br><br>";

echo "Question 2: What is the capital of Kansas?" . "<br>";
echo "You answered: " . $user2 . "<br>";
echo "Correct answer: Topeka" . "<br><br>";

echo "Question 3: Which University is located in Lawrence, Kansas?" . "<br>";
echo "You answered: " . $user3 . "<br>";
echo "Correct answer: University of Kansas" . "<br><br>";

echo "Question 4: What is the Kansas state bird?" . "<br>";
echo "You answered:" . $user4 . "<br>";
echo "Correct answer: Western Meadowlark" . "<br><br>";

echo "Question 5: What class is this quiz for?" . "<br>";
echo "You answered: " . $user5 . "<br>";
echo "Correct answer: EECS 448" . "<br><br>";

echo "<p>" . $count . "/5 </p>";
echo "<p>" . $score . "%</p>";

?>