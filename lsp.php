<?php
/*	Liskov Substitution Principle 
“objects in a program should be replaceable with instances 
of their subtypes without altering the correctness of that program.”
	with the instance of User class, we can also access the
	 Social User class as well.

	So in a system if we want to acess User class with the instace  
	but can't access the SocialUser class then it violates the Liskov Substitution Principle

Note the difference between the relationships: Object is a copy of the class.
Instance is a variable that holds the memory address of the object. 
You can also have multiple objects of the same class and then
 multiple instances of each of those objects.Jul 

*/


	class User
	{
		public function getName(){
			return "Javed";
		}

		public function getEmail(){
			return 'javed@yahoo.com';
		}

	}

	class SocialUser extends User
	{
		public function getRequestToken(){
			return null;
		}

		public function getAccessToken(){
			return '';
		}

		public function getServiceId(){
			return 'Twitter';
		}
	}
?>

