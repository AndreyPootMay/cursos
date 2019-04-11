<?php

namespace console\models\helpers;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;

public static function getCatalogsMenu()
{
	$connection = \Yii::$app->db;
	
	$sql = 'SELECT catalog_type, plural_name, order_menu
	FROM catalogs_type ORDER_BY order_menu, catalog_type';

	$command = $connection->createCommand($sql);
	$models = $command->queryAll();


	$items = $menu = [];

	if ($models) {
		foreach ($models as $model) {
			if($model['catalog_type'] > 0) {
				$items[] = [
					'label' => Yii::t('app', $model['plural_name']),
					'url' => ['/catalogs/index', 'type' => $model['catalog_type']],
					'options' => []
				];
			}
		}
	}

	$menu = $items;

	return $menu;
}


?>
