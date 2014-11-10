<?php
################################################################################################
#  DIY Module Builder for Opencart 1.5.1.x From HostJars http://opencart.hostjars.com    	   #
################################################################################################
class ModelModuleMyModule extends Model {
	
	/*
	 * Most modules do not require their own database access. If you do want to store some new data that doesn't fit into the existing
	 * database tables, you could create them here like the example function below.
	 * 
	 * This file is basically just included for completeness of the DIY module. There are some uses for it, but these are more advanced and
	 * by the time you get to those I doubt you'll be needing my help :)
	 */
	
	// This function is how my blog module creates it's tables to store blog entries. You would call this function in your controller in a
	// function called install(). The install() function is called automatically by OC versions 1.4.9.x, and maybe 1.4.8.x when a module is
	// installed in admin.
	public function createModuleTables() {
		$query = $this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "blog (blog_id INT(11) AUTO_INCREMENT, sort_order INT(3), status INT(1), date DATE, PRIMARY KEY (blog_id))");
		$query = $this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "blog_description (blog_id INT(11), language_id INT(11), title VARCHAR(64), description text, PRIMARY KEY (blog_id, language_id))");
		$query = $this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "blog_to_store (blog_id INT(11), store_id INT(11), PRIMARY KEY (blog_id, store_id))");
	}	
}
?>