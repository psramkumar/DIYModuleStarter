<?php
################################################################################################
#  DIY Module Builder for Opencart 1.5.1.x From HostJars http://opencart.hostjars.com    	   #
################################################################################################
?><?php

class ControllerModuleMyModule extends Controller {
	protected function index() {
		//Load the language file for this module - catalog/language/module/my_module.php
		$this->language->load('module/my_module');

		//Get the title from the language file
      	$this->data['heading_title'] = $this->language->get('heading_title');

		//Load any required model files - catalog/product is a common one, or you can make your own DB access
		//methods in catalog/model/module/my_module.php
		$this->load->model('module/my_module');

		//Example functionality: pull through customer firstnames and make them available to the view.
		$this->data['customers'] = $this->model_module_my_module->getCustomerFirstnames();

		//Choose which template to display this module with
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/my_module.tpl')) {
			$this->template = $this->config->get('config_template') . '/template/module/my_module.tpl';
		} else {
			$this->template = 'default/template/module/my_module.tpl';
		}

		//Render the page with the chosen template
		$this->render();
	}
}
?>