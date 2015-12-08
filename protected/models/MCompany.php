<?php

/**
 * This is the model class for table "j_company".
 *
 * The followings are the available columns in table 'j_company':
 * @property integer $id
 * @property string $name
 * @property string $sort_name
 * @property string $image_id
 * @property integer $created_by
 * @property string $created
 * @property integer $status
 */
class MCompany extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'j_company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, sort_name, image_id, created_by, created, status', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('name, image_id', 'length', 'max'=>255),
			array('sort_name', 'length', 'max'=>100),
			array('created', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, sort_name, image_id, created_by, created, status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
				"image"=>array(self::BELONGS_TO,"MImage","image_id")
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'sort_name' => 'Sort Name',
			'image_id' => 'Image',
			'created_by' => 'Created By',
			'created' => 'Created',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('sort_name',$this->sort_name,true);
		$criteria->compare('image_id',$this->image_id,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MCompany the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
