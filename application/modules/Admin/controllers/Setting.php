<?php

/*
 * 功能：后台中心－首页
 * Author:资料空白
 * Date:20180509
 */

class SettingController extends AdminBasicController
{

    public function init()
    {
        parent::init();
    }

    public function indexAction()
    {
        if ($this->AdminUser==FALSE AND empty($this->AdminUser)) {
            $this->redirect("/admin/login");
            return FALSE;
        }

		$data = array();
		$this->getView()->assign($data);
    }


}