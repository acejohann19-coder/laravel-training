<?php 

$name = "Ace Basinillo";
$age = 24;

$users = [
	["name" => "Michael", "email" => "michael@example.com"],
	["name" => "Denzel", "email" => "denz@example.com"],
	["name" => "Jeffrey", "email" => "jeffrey@example.com"]
];


foreach ($users as $user) {
	echo $user["name"] . "<br>";
}



function getUserCount($users) {
	return count ($users);
}


echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Name</th><th>Email</th></tr>";

foreach ($users as $user) {
    echo "<tr>";
    echo "<td>{$user['name']}</td>";
    echo "<td>{$user['email']}</td>";
    echo "</tr>";
}

echo "</table>";


class User {
	public $name;
	public $email;

public function __construct($name, $email) {
	$this->name = $name;
	$this->email = $email;
}

public function display() {
	return $this->name . " (" . $this->email . ")";
	}
}


$user1 = new User("David", "david@example.com");
echo "<br>" . $user1->display();


