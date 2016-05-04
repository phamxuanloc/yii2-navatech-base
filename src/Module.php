<?php
/**
 * Created by Navatech.
 * @project yii2-basic
 * @author  Phuong
 * @email   phuong17889[at]gmail.com
 * @date    5/4/2016
 * @time    3:43 PM
 */
namespace navatech\base;

use Yii;

class Module extends \yii\base\Module {

	/**
	 * Check if has navatech\multilanguage
	 * @return bool
	 */
	public static function hasMultiLanguage() {
		return class_exists('navatech\\language\\helpers\\MultiLanguageHelpers');
	}

	/**
	 * Check if has navatech\setting
	 * @return bool
	 */
	public static function hasSetting() {
		return class_exists('navatech\\setting\\Module');
	}

	/**
	 * Check if has navatech\role
	 * @return bool
	 */
	public static function hasUserRole() {
		return class_exists('navatech\\role\\Module');
	}

	/**
	 * check which Yii kit? basic or advanced
	 * @return bool
	 */
	public static function isAdvanced() {
		return Yii::getAlias('@common', false) !== false;
	}

	/**
	 * check which Yii kit? basic or advanced
	 * @return bool
	 */
	public static function isBasic() {
		return !self::isAdvanced();
	}

	/**
	 * @return string current base path
	 */
	public static function getAppPath() {
		if (self::isAdvanced()) {
			return dirname(Yii::getAlias('@common', false));
		} else {
			return Yii::$app->basePath;
		}
	}
}