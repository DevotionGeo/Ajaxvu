<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* CodeIgniter
*
* An open source application development framework for PHP 4.3.2 or newer
*
* @package CodeIgniter
* @author  Hossein Saleminejad
* @copyright  Copyright (c) 2014.
* @license http://codeigniter.com/user_guide/license.html
* @link http://codeigniter.com
* @since   Version 0.1
* @filesource
*/
class Ajaxvu {

	var $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
	}

	function view($file, $data)
	{
		if($this->CI->input->is_ajax_request())
		{
			$this->CI->output->set_output(json_encode($data, JSON_HEX_QUOT | JSON_HEX_TAG));
		}
		else
		{
			$this->CI->load->view($file, $data);
		}
	}

}


/* End of file Ajaxvu.php */
/* Location: ./application/libraries/Ajaxvu.php */
