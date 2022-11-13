<?php
class classMethod{

    public function sortTable(){
        $table = array();
        for($i = 0; $i <=10; $i++){
            array_push($table, rand(1, 100));
        }
        //Sorting the array
        asort($table);
        echo '<pre>'; print_r($table); echo '</pre>';
    }

    public function returnLastCARACTER($string)
    {
        echo "Le dernier caractère est: ", substr($string,-1);
    }


    public function dataBase(){

        // Connect to database
        echo "Tentative de connexion à la base de données en cours...";
        echo '<br>';
        $servername ="localhost";
        $username = "root";
        $password = "Jessie02.";
        $dbname = "test_php";
        echo "Les données entrées sont corectes...";
        echo '<br>';
        $conn = new mysqli($servername, $username, $password, $dbname);

        echo "Connexion établie";
        echo '<br>';

        // Check connection
        echo "Contrôle de la connexion";
        echo '<br>';
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            echo 'Connection error';
        }
        echo "Connexion réussie";
        echo '<br>';


        // sql to create table
        echo "Création d'une table";
        echo '<br>';
        $ScriptSql = "Drop table if exists People";
        $conn->query($ScriptSql);

        $ScriptSql = "CREATE TABLE People (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL
        )";
        $conn->query($ScriptSql);




        // Insert into the table
        $ScriptSql = "INSERT INTO People (firstname, lastname) VALUES ('John', 'Doe')";
        $conn->query($ScriptSql);

        // Read from table
        $ScriptSql = "SELECT id, firstname, lastname FROM People";
        $result = $conn->query($ScriptSql);
        $content = "";

        // Return what was read
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $content = $content . "id: " . $row["id"]. '<br>' . "Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            }
        } else {
            $content =  "0 results";
        }
        return $content;
    }


    public function mergeArray($array1,$array2){
        $array3 = array();
        $array3 = array_merge($array1,$array2);
        print_r($array3);

    }

    public function readcontent(){
        $content = file_get_contents("https://www.google.com");
        file_put_contents("google.txt", $content);
    }

    public function jpegImageCreation() {
        $im = imagecreate(400, 400);
        $background_color = imagecolorallocate($im, 0, 0, 255);
        $circle_color = imagecolorallocate($im, 255, 0, 0);
        imagefilledellipse($im, 200, 200, 300, 300, $circle_color);
        $image_text = "I LOVE PHP AND 3.01 PW";
        imagestring($im, 100, 100, 200, $image_text, imagecolorallocate($im, 255, 255, 255));
        imagejpeg($im, 'image.jpg');
        echo '<img src="image.jpg", alt="I LOVE PHP AND 3.01 PW">';
    }

    public function informationsFile(){
        echo "The name of current file name: ",$_SERVER['SCRIPT_FILENAME'];
        echo "<br/>";
        echo "The name of current class: ",get_class($this);
        echo "<br/>";
        echo "The name of current method: ",__METHOD__;
    }

    public function getType($parameter){
        $thistype = getType($parameter);
        echo "Le type du paramètre entré est: ", $thistype;
    }


    public function httpGetTest() {
        echo "Test : ", $_GET['test'];
    }

    public function informations(){

        echo "The name of current host: ",$_SERVER['SERVER_ADMIN'];
        echo "<br/>";
        echo "The server: ",$_SERVER['SERVER_NAME'];
        echo "<br/>";
        echo "The client ip: ",$_SERVER['SERVER_ADDR'];
        echo "<br/>";
        echo"The request method: ",$_SERVER['REQUEST_METHOD'];
        echo "<br/>";
    }


    public function echo_memory_usage()
    {
        $mem_usage = memory_get_usage(true);
        $mem_usage2 = memory_get_usage();

        if ($mem_usage2 < 1024)
            echo "La mémoire utilisé est de: ",$mem_usage2 . " bytes";
        elseif ($mem_usage2 < 1048576)
            echo "La mémoire utilisé est de: ",round($mem_usage2 / 1024, 2) . " kilobytes";
        else
            echo "La mémoire utilisé est de: ",round($mem_usage2 / 1048576, 2) . " megabytes";

        echo "<br/>";

        if ($mem_usage < 1024)
            echo "La mémoire maximum utilisable est de: ",$mem_usage . " bytes";
        elseif ($mem_usage < 1048576)
            echo "La mémoire maximum utilisable est de: ",round($mem_usage / 1024, 2) . " kilobytes";
        else
            echo "La mémoire maximum utilisable est de: ",round($mem_usage / 1048576, 2) . " megabytes";

        echo "<br/>";

    }
}

?>