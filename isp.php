<?php
/*Interface Segration Principle
	
	In this scenerio suppose in IUser interface there is two method getName() & getEmail
	But for some reason we need another function called Log()

	But in User class while implement IUser we don't require Log() from interface, so what
	we do is we define another intefaction and Use that interface with the existing one 
	including comma(,) Like LoggableUser

*/

interface IUser
{
	public function getName();
	public function getEmail();

//	public function Log();
}

interface Loggable{
	public function Log();
}

class User implements IUser
{
		public function getName()
		{
			return "Javed";
		}

		public function getEmail()
		{
			return 'javed@yahoo.com';
		}

/*		public function Log()
		{

		}	*/
}

class LoggableUser implements IUser, Loggable
{
		public function getName()
		{
			return "Javed";
		}

		public function getEmail()
		{
			return 'javed@yahoo.com';
		}

		public function Log()
		{

		}
}

?>