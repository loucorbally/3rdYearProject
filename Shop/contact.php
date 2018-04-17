    <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "LampGenie";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        // Escape user inputs for security
        
        $name = $_POST['name'];
        
        $email = $_POST['email'];
        
        $contact = $_POST ['contact'];

        
         
        
        // attempt insert query execution
        
        mysqli_query($conn, "INSERT INTO client ('name, email, contact) VALUES ('$name', '$email', '$contact')");

        
        if(mysqli_affected_rows($conn)>0){
        
            echo "Records added successfully.";
        
        } else{
        
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        
        }


        
        
        // close connection
        
        mysqli_close($conn);
        
        ?>