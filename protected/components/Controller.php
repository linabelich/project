<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	/**
	 * ƒанные дл€ вывода
	 *
	 * @var array
	 */
	private $data = [];

	/**
	 * ћетод дл€ добавлени€ новых значений в данные дл€ вывода
	 *
	 * @param string $name
	 * @param string $value
	 */
	public function set($name, $value)
	{
		$this->data[$name] = $value;
	}

	/**
	 * ћетод дл€ удалени€ значений из данных дл€ вывода
	 *
	 * @param string $name
	 */
	public function delete($name)
	{
		unset($this->data[$name]);
	}

}
