<?php
// If it's going to need the database, then it's 
// probably smart to require it before we start.
require_once(LIB_PATH.DS.'database.php');

class ApplicantStatus extends DatabaseObject {
	
    protected static $table_name="applicant_status";
    public $db_fields=array('id', 'application_no', 'application_id', 'admin_id', 'status_id', 'created_at', 'updated_at', 'tracking_id', 'delivery_company_id', 'status_flag', 'visible');
	
	public $id;
	public $application_no;
    public $application_id;
    public $admin_id;
    public $status_id;
    public $created_at;
    public $updated_at;
    public $tracking_id;
    public $delivery_company_id;
    public $status_flag;
    public $visible;
}
?>