<?php
// If it's going to need the database, then it's 
// probably smart to require it before we start.
require_once(LIB_PATH.DS.'database.php');

class Faculty extends DatabaseObject {
	
	protected static $table_name="faculties";
	public $db_fields=array('id', 'faculty_name', 'faculty_visible');

	public $id;
	public $faculty_name;
	public $faculty_visible;			
}
?>