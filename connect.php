<?php
	$link=mysqli_connect("d36485.mysql.zone.ee","d36485sa81796","Fl0w3rp0w3r","d36485sd91688");

	if (mysqli_connect_errno()){
	    echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		$action=$_POST["action"];
	if($action=="generatebullshit"){
		$random1 = rand(1, 33);
		$random2 = rand(1, 33);
		$random3 = rand(1, 33);
	    $query="SELECT verb FROM verbs WHERE id=".$random1."";
	    $query2="SELECT adjective FROM adjectives WHERE id=".$random2."";
	    $query3="SELECT noun FROM nouns WHERE id=".$random3."";
	    //echo $query;
	    $show=mysqli_query($link,$query) or die ("Error");
	    $show2=mysqli_query($link,$query2) or die ("Error");
	    $show3=mysqli_query($link,$query3) or die ("Error");
	    while($row=mysqli_fetch_array($show)){
	        echo $row['verb'];
	    }
	    while($row2=mysqli_fetch_array($show2)){
	        echo $row2['adjective'];
	    }
	    while($row3=mysqli_fetch_array($show3)){
	        echo $row3['noun'];
	    }
	}
	}
?>