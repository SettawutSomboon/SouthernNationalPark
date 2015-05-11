<?php

/**
 * This is the model class for table "data_southnationpark".
 *
 * The followings are the available columns in table 'data_southnationpark':
 * @property integer s$id
 * @property string $park_name
 * @property string $general
 * @property string $topography
 * @property string $climate
 * @property string $plant
 * @property string $animal
 * @property string $image
 * @property string $address
 * @property string $phone
 * @property double $latitude
 * @property double $longtitude
 * @property integer $province_id
 * @property string $activity
 * 
 *
 * The followings are the available model relations:
 * @property Province $province
 */
class DataSouthnationpark extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data_southnationpark';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('park_name, general, activity,topography, climate, plant, animal,address, phone, latitude, longtitude, province_id,category_id', 'required'),
			array('park_name,latitude, longtitude,phone,address', 'unique'),
			array('province_id', 'numerical', 'integerOnly'=>true),
			array('category_id', 'numerical', 'integerOnly'=>true),
			array('latitude, longtitude,phone', 'numerical'),
			array('park_name', 'length', 'max'=>100),
			//array('general, topography, climate, plant, animal', 'length', 'max'=>1000),
			//array('image', 'file', 'types'=>'jpg, gif, png, jpeg', 'allowEmpty' => true), // rule for file upload
			array('phone', 'length', 'max'=>10),	
			//array('phone', 'length', 'min'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, park_name, general,topography, climate, plant, animal, image, address,phone, latitude, longtitude, province_id,category_id', 'safe', 'on'=>'search'),
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
			'province' => array(self::BELONGS_TO, 'Province', 'province_id'),
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
			'imageData' => array(self::HAS_ONE, 'Images', 'data_southnationpark_id'),
				
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'park_name' => 'ชื่ออุทยานแห่งชาติ',
			'activity' =>  'กิจกรรม',
			'general' => 'ข้อมูลทั่วไป',
			'topography' => 'ลักษณะภูมิประเทศ',
			'climate' => 'ลักษณะภูมิอากาศ',
			'plant' => 'พืชพรรณ',
			'animal' => 'สัตว์ป่า',
			'image' => 'รูปภาพ',
			'phone' => 'เบอร์โทร',
			'address'=> 'ที่ตั้ง',
			'latitude' => 'ละติจูต',
			'longtitude' => 'ลองติจูต',
			'province_id' => 'จังหวัด',
			'category_id'=> 'ประเภทอุทยานแห่งชาติ',
			
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
		
		$criteria=new CDbCriteria(array('order'=>'id DESC','limit'=>10));

		$criteria->compare('id',$this->id);
		$criteria->compare('park_name',$this->park_name,true);
		$criteria->compare('activity',$this->activity,true);
		$criteria->compare('general',$this->general,true);
		$criteria->compare('topography',$this->topography,true);
		$criteria->compare('climate',$this->climate,true);
		$criteria->compare('plant',$this->plant,true);
		$criteria->compare('animal',$this->animal,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('longtitude',$this->longtitude);
		$criteria->compare('province_id',$this->province_id);
		$criteria->compare('category_id',$this->category_id);
		

		
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
				'pagination'=>array(
							
						'pageSize'=>20,
				),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DataSouthnationpark the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
}
