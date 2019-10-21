<?php

	echo "tset1";
	include 'Contact.php'
	include 'DBManager.php'


	$contact = new Contact();

	$contact->{'forename'} = forename;
	$contact->{'surname'} = surname;
	$contact->{'email'} = email;
	$contact->{'message'} = message;

	addContactInfo($contact);
?>
