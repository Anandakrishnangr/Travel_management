<?php

$s=mail("ananthakrishnan.gr.kdl@gmail.com","sample","cont","from:imperial.ak.livetotravel@gmail.com");
if($s){
	echo "success";/*echo$s;*//*print_r(error_get_last());*/
}
else{
echo "failed";/*print_r(error_get_last());*/
}

/*print_r(error_get_last());*/
?>