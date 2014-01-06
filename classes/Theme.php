<?php
/*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class ThemeCore extends ObjectModel
{
	public $name;
	public $directory;
	public $responsive;
	public $default_left_column;
	public $default_right_column;

	/** @var int access rights of created folders (octal) */
	public static $access_rights = 0775;
	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'theme',
		'primary' => 'id_theme',
		'fields' => array(
			'name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 64, 'required' => true),
			'directory' => array('type' => self::TYPE_STRING, 'validate' => 'isDirName', 'size' => 64, 'required' => true),
			'responsive' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
			'default_left_column' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
			'default_right_column' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
		),
	);

	public static function getThemes()
	{
		$themes = new Collection('Theme');
		$themes->orderBy('name');
		return $themes;
	}

	/**
	 * return an array of all available theme (installed or not)
	 * 
	 * @param boolean $installed_only
	 * @return array string (directory)
	 */
	public static function getAvailable($installed_only = true)
	{
		static $dirlist = array();
		$available_theme = array();

		if (empty($dirlist))
		{
			$themes = scandir(_PS_ALL_THEMES_DIR_);
			foreach ($themes as $theme)
				if (is_dir(_PS_ALL_THEMES_DIR_.DIRECTORY_SEPARATOR.$theme) && $theme[0] != '.')
					$dirlist[] = $theme;
		}

		if ($installed_only)
		{
			$themes = Theme::getThemes();
			foreach ($themes as $theme_obj)
				$themes_dir[] = $theme_obj->directory;
			foreach ($dirlist as $theme)
				if (false !== array_search($theme, $themes_dir))
					$available_theme[] = $theme;
		}
		else
			$available_theme = $dirlist;

		return $available_theme;

	}

	/**
	 * check if a theme is used by a shop
	 * 
	 * @return boolean
	 */
	public function isUsed()
	{
		return Db::getInstance()->getValue('SELECT count(*) 
			FROM '._DB_PREFIX_.'shop WHERE id_theme = '.(int)$this->id);
	}

	/**
	 * add only theme if the directory exists
	 * 
	 * @param bool $null_values
	 * @param bool $autodate
	 * @return boolean Insertion result
	 */
	public function add($autodate = true, $null_values = false)
	{
		if (!is_dir(_PS_ALL_THEMES_DIR_.$this->directory))
			return false;

		return parent::add($autodate, $null_values);
	}


	/**
	 * update the table PREFIX_theme_meta for the current theme
	 * @param array $metas
	 * @param bool  $full_update If true, all the meta of the theme will be deleted prior the insert, otherwise only the current $metas will be deleted
	 *
	 */
	public function updateMetas($metas, $full_update = false)
	{

		if ($full_update)
			Db::getInstance()->delete(_DB_PREFIX_ . 'theme_meta', 'id_theme=' . $this->id);

		$values = array();
		if ($this->id > 0)
		{
			foreach ($metas as $meta)
			{
				if (!$full_update)
					Db::getInstance()->delete(_DB_PREFIX_ . 'theme_meta', 'id_theme=' . $this->id . ' AND id_meta=' . $meta['id_meta']);

				$values[] = array(
					'id_theme'     => $this->id,
					'id_meta'      => $meta['id_meta'],
					'left_column'  => (int)$meta['left'],
					'right_column' => (int)$meta['right']
				);


			}
			Db::getInstance()->insert('theme_meta', $values);
		}
	}
	
	public function hasLeftColumn($page = null)
	{
		return (bool)Db::getInstance()->getValue('
			SELECT left_column
			FROM '._DB_PREFIX_.'theme t
			LEFT JOIN '._DB_PREFIX_.'theme_meta tm ON (t.id_theme = tm.id_theme)
			LEFT JOIN '._DB_PREFIX_.'meta m ON (m.id_meta = tm.id_meta)
			WHERE t.id_theme='.(int)$this->id.' AND m.page=\''.pSQL($page).'\'
		');
	}
	
	public function hasRightColumn($page = null)
	{
		return (bool)Db::getInstance()->getValue('
			SELECT right_column
			FROM '._DB_PREFIX_.'theme t
			LEFT JOIN '._DB_PREFIX_.'theme_meta tm ON (t.id_theme = tm.id_theme)
			LEFT JOIN '._DB_PREFIX_.'meta m ON (m.id_meta = tm.id_meta)
			WHERE t.id_theme='.(int)$this->id.' AND m.page=\''.pSQL($page).'\'
		');
	}

	/**
	 * @return array|bool
	 */
	public function getMetas()
	{
		if ($this->id > 0)
		{
			return Db::getInstance()->executeS('SELECT * FROM '._DB_PREFIX_.'theme_meta WHERE id_theme='.$this->id);
		}
		return false;
	}

	/**
	 * @return bool
	 */
	public function removeMetas()
	{
		if ($this->id > 0)
		{
			return Db::getInstance()->delete(_DB_PREFIX_ . 'theme_meta', 'id_theme=' . $this->id);
		}
		return false;
	}
}