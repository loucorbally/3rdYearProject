

		<?php
       $servername = "localhost";
       $username = "id5427975_lampgenie";
       $password = "College18";
       $dbname = "id5427975_lampgenie";
       $client_name = 'client_name';
        $client_email = 'client_email';
        $client_contact = 'client_contact'; 
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        // Escape user inputs for security
        
        $client_name = $_POST['client_name'];

        $client_email = $_POST['client_email'];

        $client_contact = $_POST['client_contact'];


        echo $client_contact;
         
        
        // attempt insert query execution
        
        mysqli_query($conn, "INSERT INTO client (client_name, client_email, client_contact) VALUES ('$client_name', '$client_email', '$client_contact')");

        
        if(mysqli_affected_rows($conn)>0){
        
            echo "Records added successfully.";
        
        } else{
        
            
            echo "ERROR: Could not able to execute" . mysqli_error($conn);
        
        }


        
        
        // close connection
        
        mysqli_close($conn);
        
        ?>
</body>	
</html>