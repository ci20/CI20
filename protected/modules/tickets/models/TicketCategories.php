<?php

/**
 * This is the model class for table "ci_ticket_categories".
 *
 * The followings are the available columns in table 'ci_ticket_categories':
 * @property integer $categoryid
 * @property string $categoryname
 *
 * The followings are the available model relations:
 * @property TicketSubjects[] $ciTicketSubjects
 * @property TroubleTickets[] $troubleTickets
 */
class TicketCategories extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TicketCategories the static model class
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
		return 'ci_ticket_categories';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('categoryname', 'required'),
			array('categoryname', 'length', 'max'=>75),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('categoryid, categoryname', 'safe', 'on'=>'search'),
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
			'ciTicketSubjects' => array(self::MANY_MANY, 'TicketSubjects', 'ci_category_subject_bridge(categoryid, subjectid)'),
			'troubleTickets' => array(self::HAS_MANY, 'TroubleTickets', 'categoryid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'categoryid' => 'Categoryid',
			'categoryname' => 'Categoryname',
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

		$criteria->compare('categoryid',$this->categoryid);
		$criteria->compare('categoryname',$this->categoryname,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}