<?php

/**
 * This is the model class for table "province".
 *
 * The followings are the available columns in table 'province':
 * @property integer $id
 * @property string $province_name
 * @property string $province_image
 *
 * The followings are the available model relations:
 * @property DataSouthnationpark[] $dataSouthnationparks
 */
class Province extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'province';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('province_name', 'required'),
			array('province_name', 'unique'),
			array('province_name', 'length', 'max'=>100),
			array('province_image', 'file', 'types'=>'jpg, gif, png, jpeg', 'allowEmpty' => true), // rule for file upload
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, province_name, province_image', 'safe', 'on'=>'search'),
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
			'dataSouthnationparks' => array(self::HAS_MANY, 'DataSouthnationpark', 'province_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ลำดับ',
			'province_name' => 'จังหวัด',
			'province_image' => 'สัญลักษณ์',
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
		$criteria=new CDbCriteria(array('order'=>'id DESC','limit'=>10));
		$criteria->compare('province_name',$this->province_name,true);
		$criteria->compare('province_image',$this->province_image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
				'pagination'=>array(
							
						'pageSize'=>10,
				),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Province the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}