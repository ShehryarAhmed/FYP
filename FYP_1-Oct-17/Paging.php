<!-- <?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "todo";
			$rec_limit = 10;
			// $conn = new mysqli($servername, $username, $password,$db);

			// $sql = "SELECT COUNT(*) FROM tasks";
		    // $retval= $conn->query($sql);
			$conn = mysql_connect($servername,$username,$password);
			mysql_select_db($db);
			$sql = "SELECT count(taskId) FROM tasks";
			$retval = mysql_query($sql,$conn);
			if(! $retval ) {
				die('Could not get data: ' . mysql_error());
			 }
			 echo MYSQL_NUM;
			 $row = mysql_fetch_array($retval, MYSQL_NUM );
			 $rec_count = $row[0];
			 echo "dsdad". $rec_count ."sdad";

			 if( isset($_GET{'page'} ) ) {
				$page = $_GET{'page'} + 1;
				echo "PAGE ".$page;
				$offset = $rec_limit * $page ;
				echo "OFFSET ".$offset;
				
			 }else {
				$page = 0;
				$offset = 0;
			 }
			//  echo $rec_count;
			$left_rec = $rec_count - ($page * $rec_limit);
			echo "left_rec ".$left_rec. " .";
			$sql1 = "SELECT taskId,taskTitle,taskTime From tasks LIMIT $offset,$rec_limit";
			$getq = mysql_query($sql1,$conn);
			if(!$getq){
				die('Cloud Not get data : '.mysql_error);
			}
			while($row = mysql_fetch_array($getq,MYSQL_ASSOC)){
				echo "TaskID  ".$row['taskId']." ";
			}
			if( $page > 0 ) {
				$last = $page - 2;
				echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a>";
				echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
			 }else if( $page == 0 ) {
				echo "<a href = \"$_SERVER[PHP_SELF]?page = $page\">Next 10 Records</a>";
			 }else if( $left_rec < $rec_limit ) {
				$last = $page - 2;
				echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a>";
			 }
			mysql_close($conn);
			?>
	 -->
	 <html>
   
   <head>
      <title>Paging Using PHP</title>
   </head>
   
   <body>
      <?php
        $servername = "localhost";
		$username = "root";
		$password = "";
		$db = "todo";
         
         $rec_limit = 10;
         $conn = mysql_connect($servername, $username, $password);
         
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         mysql_select_db($db);
         
         /* Get total number of records */
         $sql = "SELECT count(taskID) FROM tasks";
         $retval = mysql_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());
         }
         $row = mysql_fetch_array($retval, MYSQL_NUM );
         $rec_count = $row[0];
         
         if( isset($_GET{'page'} ) ) {
            $page = $_GET{'page'} + 1;
            $offset = $rec_limit * $page ;
         }else {
            $page = 0;
            $offset = 0;
         }
         
         $left_rec = $rec_count - ($page * $rec_limit);
         $sql = "SELECT taskId ". 
            "FROM tasks ".
            "LIMIT $offset, $rec_limit";
            
         $retval = mysql_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());
         }
         
         while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
            echo "TaskId :{$row['taskId']}  <br> ";
         }
         
         if( $page > 0 ) {
            $last = $page - 2;
            echo "<a href = \"$_SERVER[PHP_SELF]?page = $last\">Last 10 Records</a> |";
            echo "<a href = \"$_SERVER[PHP_SELF]?page = $page\">Next 10 Records</a>";
         }else if( $page == 0 ) {
            echo "<a href = \"$_SERVER[PHP_SELF]?page = $page\">Next 10 Records</a>";
         }else if( $left_rec < $rec_limit ) {
            $last = $page - 2;
            echo "<a href = \"$_SERVER[PHP_SELF]?page = $last\">Last 10 Records</a>";
         }
         
         mysql_close($conn);
      ?>
      
   </body>