<?php
Class JWebModule extends CWebModule
{
	
	public function getStoragePath() {
		return Yii::app()->storagePath;
	}
}