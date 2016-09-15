<?php

class Bapak {

public $nama = "Bapak";

function Hallo() {
	return "Hallo, saya $this->nama <br>";
}
}

class Anak extends Bapak {
function Hai() {
	return "hai dari kelas anak";
}
}
$test = new Anak ();
echo $test->Hallo();
echo "<br>";
echo $test->Hai();
?>