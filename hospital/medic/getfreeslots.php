<?php 
	include 'connection.php';
	
	$did=$_GET['did'];
	$bdate=$_GET['date'];
	$sr=mysqli_query($con,"SELECT * FROM `leave` where d_id='$did' and `date`='$bdate'");
            $nums=mysqli_num_rows($sr);
    if($nums > 0)
        { ?>
     <span style="color: red; font-weight: bold;">
          Sorry! Its a leave on <?php echo date('d-m-Y',strtotime($bdate)); ?> for the selected doctor<br>
     	  Select some other date
     </span>
    <?php  }
         else
          {
				$sql=mysqli_query($con,"SELECT * FROM schedule where d_id='$did' group by sid");
				while($rows=mysqli_fetch_array($sql))
				{
					$starttime=$rows['stime'];
					$endtime=$rows['etime'];
					$duration = '15';  // split by 15 mins

					$array_of_time = array ();
					$start_time    = strtotime ($starttime); //change to strtotime
					$end_time      = strtotime ($endtime); //change to strtotime

					$add_mins  = $duration * 60;

					while ($start_time <= $end_time) // loop between time
					{
					   $array_of_time[] = date ("h:i", $start_time);
					   $start_time += $add_mins; // to check endtie=me
					}
					echo '<pre>';
					foreach ($array_of_time as $key => $value) {
						//if the time is already booked, it sholudn't be displayed in free slot
						$sq=mysqli_query($con,"SELECT * FROM appointment where (did='$did' and bookingfor='$bdate' and booktime='$value' and status!='cancelled') and (did='$did' and bookingfor='$bdate' and booktime='$value' and status!='prescribed')");
					    $row=mysqli_num_rows($sq);
					    if($row <=0 )
					       {
					    		echo '<input type="radio" name="apptime" value="'.$value.'">'.$value.'<br>';
					    	}
					}
					echo '</pre>';
			  }
        }
?>