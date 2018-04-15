<?php
           // if(isset($_POST['id'])){
			//scan "uploads" folder and display them accordingly
           $folder = "uploads/".$_POST['id'];
		   if (!file_exists($folder)) {
				exit();
			}
           $results = scandir("uploads/".$_POST['id']);
           foreach ($results as $result) {
            if ($result === '.' or $result === '..') continue;
            
            if (is_file($folder . '/' . $result)) {
				echo
				'<div class="list">
						<a href="'.$folder . '/' . $result.'" alt="'.$folder . '/' . $result.'" value="'. $result.'">'.$result.'</a>
                            <a href="http://thesis.in.cs.ucy.ac.cy/mhc/remove.php?name='.$result.'&id='.$_POST['id'].'" class="btn btn-danger btn-xs" role="button">Remove</a>
				</div>';
            }
           }
			//}
?>