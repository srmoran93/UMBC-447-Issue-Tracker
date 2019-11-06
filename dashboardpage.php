<html>
	<head>
		<title>Dashboard Manager</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>

            h1{
                color: white; 
            }
            
            
            table, td{

              border-collapse: collapse;

            }    

            table, td, th {  
              text-align: left;
                border: 1px solid black;

            }

            table {
              border-collapse: collapse;
              width: 100%;
            }

            th {
                background-color: orange;
              color: white;
                }

            tr:nth-child(even){
                background-color: lightgray
            }

            tr {
                background-color: aliceblue

            }

            th, td {
              padding: 15px;
            }

            body {font-family: Arial, Helvetica, sans-serif;
                    background-color: #6495ed;}
            * {box-sizing: border-box;}
            
        </style>
	</head>
	<body>
        <h1 ><center>DASHBOARD</center></h1>
		<table>
		<?php 
		
			/*
				---- DELETE THIS -----
				Kyle and James will be providing the function for connecting to the database.
			*/
			$conn = mysqli_connect('localhost', 'root', '', 'issue_tracker');
			if ($conn->connect_error){
				die('Connection failed:'.$conn->connect_error);				
			}			
			$sql = 'SELECT * FROM dashboard';
			$result = $conn->query($sql);
			
			
			
			
			
			/*
				Set up a table that will make use of the SQL query retrieved from the database.
				This will display a dashboard with the ticket's id, title, status, service agent, and
				comment history.
				
				----- NOTE ------ 
				We want to do something about the history column. Could be links. But it needs to be a way
				that the code returns a page with the ticket history.
			*/
			echo"<table boarder = 1>";
			echo"<tr>
			<th>Id</th>
			<th>Issue Title</th>
			<th>Status</th>
			<th>ServiceAgent</th>
            <th>ServiceAgent Email</th>
            <th>Date</th>
			<th>Comment History</th>
			</tr>";
            
            
            /*commented out because it wasnt working
			while($row = mysqli_fetch_assoc($result)){
				echo"<tr>
                <th>{$row['tid']}</th>
				<th>{$row['title']}</th>
				<th>{$row['description']}</th>
				<th>{$row['status']}</th>
				<th>{$row['poc_name']}</th>
                <th>{$row['poc_email']}</th>
                <th>{$row['modified_date']}</th>
				</tr>";
                */
            
            
				/*
                //Sams code, changed to above in accordance with tickets table
                
                <td>{$row['id']}</td>
				<td>{$row['title']}</td>
				<td>{$row['status']}</td>
				<td>{$row['service_agent']}</td>
				<td>{$row['history']}</td>
				</tr>";	
			}
			echo"</table>";	
            */
			$conn->close();
		?>
	
		</table>

	</body>
</html>