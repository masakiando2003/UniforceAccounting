<?php

/**
 * This is the model class for table "accounts".
 *
 * The followings are the available columns in table 'accounts':
 * @property integer $accountId
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $fax
 * @property string $website
 * @property integer $industry
 * @property integer $accountType
 * @property integer $rating
 * @property string $billingAddress
 * @property string $billingCountry
 * @property string $shippingAddress
 * @property string $shippingCountry
 * @property string $description
 * @property string $createdTime
 * @property string $modifiedTime
 */
class Accounts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Accounts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'accounts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, phone, industry, accountType, rating, billingCountry, shippingCountry, createdTime, modifiedTime', 'required'),
			array('industry, accountType, rating', 'numerical', 'integerOnly'=>true),
			array('name, email, website', 'length', 'max'=>255),
			array('phone, fax, billingCountry, shippingCountry', 'length', 'max'=>80),
			array('billingAddress, shippingAddress, description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('accountId, name, email, phone, fax, website, industry, accountType, rating, billingAddress, billingCountry, shippingAddress, shippingCountry, description, createdTime, modifiedTime', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'accountId' => 'Account',
			'name' => 'Name',
			'email' => 'Email',
			'phone' => 'Phone',
			'fax' => 'Fax',
			'website' => 'Website',
			'industry' => 'Industry',
			'accountType' => 'Account Type',
			'rating' => 'Rating',
			'billingAddress' => 'Billing Address',
			'billingCountry' => 'Billing Country',
			'shippingAddress' => 'Shipping Address',
			'shippingCountry' => 'Shipping Country',
			'description' => 'Description',
			'createdTime' => 'Created Time',
			'modifiedTime' => 'Modified Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('accountId',$this->accountId);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('industry',$this->industry);
		$criteria->compare('accountType',$this->accountType);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('billingAddress',$this->billingAddress,true);
		$criteria->compare('billingCountry',$this->billingCountry,true);
		$criteria->compare('shippingAddress',$this->shippingAddress,true);
		$criteria->compare('shippingCountry',$this->shippingCountry,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('createdTime',$this->createdTime,true);
		$criteria->compare('modifiedTime',$this->modifiedTime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}