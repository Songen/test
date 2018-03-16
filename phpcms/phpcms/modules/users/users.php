<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
	class users extends admin
	{
		public function __construct() {
		parent::__construct();
		$this->db = pc_base::load_model('users_model');
	} 

		public function init(){
			 // 获取数据
				$res = $this->db->select();
				// var_dump($res);
			 // 显示模板
			 	include $this->admin_tpl('users_list');
		}
		// 删除用户
		public function del(){
			$id =$GET['id'];
		}
	}
?>