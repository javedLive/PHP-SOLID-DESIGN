<?php
/* Open/ Closed Principle
	Open for extension but closed for modification
*/

	class User
	{
		public function getName(){
			return "Javed";
		}

		public function getEmail(){
			return 'javed@yahoo.com';
		}


/*
		suppose we need to add some functionality with the existing class 
		then adding those function with the existing class can violate the Open/Closed Principle 
		We can add new Class and Extend that ..

		public function getRequestToken(){
			return null;
		}

		public function getAccessToken(){
			return '';
		}

		public function getServiceId(){
			return 'Twitter';
		}	*/
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