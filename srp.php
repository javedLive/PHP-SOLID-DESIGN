<?php
/*
	Single Responsibility Principle where a class have only one responsibility
*/
	class User{
		public function getName(){
			return "Javed";
		}

		public function getEmail(){
			return 'javed@yahoo.com';
		}

/* sendEmail isn't functionality of User Class as class User mail task is to represent User 
so Violation of Single Responsibility Principle
	We gonna create another class name Emailer and give that the sendEmail() responsibility

		public function sendEmail(){
			mail($this->getEmail(),'Hello!', "You are welcome to visit");
		}		*/
	}

	class Emailer{
		public function sendEmail($user){
			mail($user->getEmail(),'Hello!', "You are welcome to visit");
		}
	}
?>