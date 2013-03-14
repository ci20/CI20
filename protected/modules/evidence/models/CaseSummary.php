<?php

/**
 * This is the model class for table "ci_case_summary".
 *
 * The followings are the available columns in table 'ci_case_summary':
 * @property integer $summaryid
 * @property integer $defid
 * @property string $caseno
 * @property string $location
 * @property string $dispodate
 * @property string $hearingdate
 * @property string $hearingtype
 * @property string $page
 * @property string $sentence
 * @property string $indate
 * @property string $outdate
 * @property string $destructiondate
 * @property string $recip
 * @property string $comment
 * @property integer $dna
 * @property integer $bio
 * @property integer $drug
 * @property integer $firearm
 * @property integer $money
 * @property integer $other
 *
 * The followings are the available model relations:
 * @property Attorney[] $ciAttorneys
 * @property CrtCase $caseno0
 * @property Defendant $def
 */
class CaseSummary extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CaseSummary the static model class
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
		return 'ci_case_summary';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('defid, caseno', 'required'),
			array('defid, dna, bio, drug, firearm, money, other', 'numerical', 'integerOnly'=>true),
			array('caseno, hearingtype, recip', 'length', 'max'=>50),
			array('location, sentence', 'length', 'max'=>100),
			array('page', 'length', 'max'=>6),
			array('comment', 'length', 'max'=>255),
			array('dispodate, hearingdate, indate, outdate, destructiondate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('summaryid, defid, caseno, location, dispodate, hearingdate, hearingtype, page, sentence, indate, outdate, destructiondate, recip, comment, dna, bio, drug, firearm, money, other', 'safe', 'on'=>'search'),
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
			'ciAttorneys' => array(self::MANY_MANY, 'Attorney', 'ci_case_attorneys(summaryid, attyid)'),
			'caseno0' => array(self::BELONGS_TO, 'CrtCase', 'caseno'),
			'def' => array(self::BELONGS_TO, 'Defendant', 'defid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'summaryid' => 'Summaryid',
			'defid' => 'Defid',
			'caseno' => 'Caseno',
			'location' => 'Location',
			'dispodate' => 'Dispodate',
			'hearingdate' => 'Hearingdate',
			'hearingtype' => 'Hearingtype',
			'page' => 'Page',
			'sentence' => 'Sentence',
			'indate' => 'Indate',
			'outdate' => 'Outdate',
			'destructiondate' => 'Destructiondate',
			'recip' => 'Recip',
			'comment' => 'Comment',
			'dna' => 'Dna',
			'bio' => 'Bio',
			'drug' => 'Drug',
			'firearm' => 'Firearm',
			'money' => 'Money',
			'other' => 'Other',
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

		$criteria->compare('summaryid',$this->summaryid);
		$criteria->compare('defid',$this->defid);
		$criteria->compare('caseno',$this->caseno,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('dispodate',$this->dispodate,true);
		$criteria->compare('hearingdate',$this->hearingdate,true);
		$criteria->compare('hearingtype',$this->hearingtype,true);
		$criteria->compare('page',$this->page,true);
		$criteria->compare('sentence',$this->sentence,true);
		$criteria->compare('indate',$this->indate,true);
		$criteria->compare('outdate',$this->outdate,true);
		$criteria->compare('destructiondate',$this->destructiondate,true);
		$criteria->compare('recip',$this->recip,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('dna',$this->dna);
		$criteria->compare('bio',$this->bio);
		$criteria->compare('drug',$this->drug);
		$criteria->compare('firearm',$this->firearm);
		$criteria->compare('money',$this->money);
		$criteria->compare('other',$this->other);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}