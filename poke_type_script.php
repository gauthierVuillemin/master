<?php
	// create curl resource
	$ch = curl_init();
    // set url
	curl_setopt($ch, CURLOPT_URL, "http://145.239.32.254:8081/pokemon/types");
    //return the transfer as a string
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // $output contains the output string
	$output = curl_exec($ch);
    // close curl resource to free up system resources
	curl_close($ch);

	$tabApi = json_decode($output);

	foreach ($tabApi as $pokemon)
	{
		echo $pokemon->nom $pokemon->id $pokemon->caractéristique
	}