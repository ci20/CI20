<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class UserCreateWidget extends CWidget
{
	private $model;
	private $departments;
	
	public function init()
	{
		$this->model = new UserInfo;
		$this->departments = new Departments;
	}
	
	public function getModel()
	{
		return $this->model;
	}
	
	public function getDepartments()
	{
		return $this->departments;
	}
	
	public function run()
	{
		$this->render('userCreateWidget');
	}
}
