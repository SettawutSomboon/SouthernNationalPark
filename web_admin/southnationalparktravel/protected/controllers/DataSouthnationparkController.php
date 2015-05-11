<?php

class DataSouthnationparkController extends Controller
{
/**
* @var string the default layout for the views. Defaults to '//layouts/column2', meaning
* using two-column layout. See 'protected/views/layouts/column2.php'.
*/
public $layout='//layouts/column2';

/**
* @return array action filters
*/
public function filters()
{
return array(
'accessControl', // perform access control for CRUD operations
);
}

/**
* Specifies the access control rules.
* This method is used by the 'accessControl' filter.
* @return array access control rules
*/

/*
public function accessRules()
{
	
return array(
		
		
array('allow',  // allow all users to perform 'index' and 'view' actions
'actions'=>array('index','view'),
'users'=>array('*'),
),
array('allow', // allow authenticated user to perform 'create' and 'update' actions
'actions'=>array('create','update'),
'users'=>array('@',),
),
array('allow', // allow admin user to perform 'admin' and 'delete' actions
'actions'=>array('admin','delete'),
'users'=>array('admin'),
),
array('deny',  // deny all users
'users'=>array('*'),
),


);

}
*/
/**
* Displays a particular model.
* @param integer $id the ID of the model to be displayed
*/
 public function actionView($id)
    {
        $model = DataSouthnationpark::model()->findByPk($id);
        $this->render('view', array(
            'model' => $model
        ));
    }


public function actionView_index($id)
{
	$model = DataSouthnationpark::model()->findByPK($id);

	$this->render('view_index', array(
			'model'=>$model,
	));
	
	
	
}
/**
* Creates a new model.
* If creation is successful, the browser will be redirected to the 'view' page.
*/












public function actionCreate()
{
		$model = new DataSouthnationpark();
         
        
       	$this->performAjaxValidation($model);

		if(isset($_POST['DataSouthnationpark']))
		{
				$model->attributes=$_POST['DataSouthnationpark'];	
				$valid = $model->validate();
			
				if($valid){
					if($model->save(false))
					{
						if($photos = CUploadedFile::getInstances($model,'image'))
						{
							$path =Yii::getPathOfAlias('webroot').'/images/';
							
							foreach ($photos as $k=>$photo)
							{
								if($photo != null)
								{
									//$oldimage = $model->getLastIndexImage($model->id);
									//if($oldimage > 0)
										//$k = $oldimage++;
									$filename = uniqid(mt_rand()).'.'.$photo->getExtensionName();
									
								
									if($photo->saveAs($path.$filename))
									{
																
										$img_add = new Images();
								
										$model->image=$filename;
										$img_add->name=$filename;
										$img_add->file=$path.$filename;
										// 							if(key($photos) == $k)
											// 								$img_add->level = 2;
										$img_add->data_southnationpark_id=$model->id;
										$img_add->save(false);
										$model->save(false);
									}
								}
						
							}
							$this->redirect(array('view','id'=>$model->id));
						}
					}
				}
        }
      	$this->render('create', array('model' => $model));
}





 
 /*
 
public function actionCreate()
{
$model=new DataSouthnationpark;


// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['DataSouthnationpark']))
{
	$rnd = rand(0,9999);
	$model->attributes=$_POST['DataSouthnationpark'];
	
		
$valid = $model->validate();
			
			if($valid){
				
				//$user->create_date  = date('Y-m-d H:i:s');
				//$model->create_at = date('Y-m-d h:i:s');
				// keep file to $image
					if($image = CUploadedFile::getInstance($model,'image'))
					{
						// path for file upload
						$path = Yii::getPathOfAlias('webroot').'/images/';		
						// use image name as username
						$filename = $rnd.'.'.$image->getExtensionName();
						// uploaded image to path
						$image->saveAs($path.$filename);
						
					}
					else
						// this for no image file upload
						$filename = 'noimage.jpg';
						// set another user attribute
						$model->image = $filename;
						// insert userProfile	

					if($model->save(false))
						// success and redirect to login page
						$this->redirect(array('view','id'=>$model->id));
				}
			
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	*/
	
/*

public function actionCreate()
{
	$model=new DataSouthnationpark;
	// Uncomment the following line if AJAX validation is needed
	$this->performAjaxValidation($model);

	if(isset($_POST['DataSouthnationpark']))
	{
		$model->attributes=$_POST['DataSouthnationpark'];
		$images = CUploadedFile::getInstancesByName('image');

		if(isset($images) && count($images)> 0)
		{
			foreach ($images as $image=>$pic)
			{
				if ($pic->saveAs(Yii::getPathOfAlias('webroot').'/images/'.$pic->name,0777))
				{
					$model->setIsNewRecord(true);
					$model->id = null;
					$model->image = $pic->name;
					$model->save();
				}
			}
			if($model->save(false))
						// success and redirect to login page
						$this->redirect(array('view','id'=>$model->id));
				
		}
	}

	$this->render('create',array(
			'model'=>$model,
	));
}
*/

/**
* Updates a particular model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id the ID of the model to be updated
*/
public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
	
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
	
			$this->performAjaxValidation($model);

		if(isset($_POST['DataSouthnationpark']))
		{
				$model->attributes=$_POST['DataSouthnationpark'];	
				$valid = $model->validate();
			
				if($valid){
					if($model->save(false))
					{
						if($photos = CUploadedFile::getInstances($model,'image'))
						{
							$path =Yii::getPathOfAlias('webroot').'/images/';
							
							foreach ($photos as $k=>$photo)
							{
								if($photo != null)
								{
									//$oldimage = $model->getLastIndexImage($model->id);
									//if($oldimage > 0)
										//$k = $oldimage++;
									$filename = uniqid(mt_rand()).'.'.$photo->getExtensionName();
									
								
									if($photo->saveAs($path.$filename))
									{
																
										$img_add = new Images();
								
										$model->image=$filename;
										$img_add->name=$filename;
										$img_add->file=$path.$filename;
										// 							if(key($photos) == $k)
											// 								$img_add->level = 2;
										$img_add->data_southnationpark_id=$model->id;
										$img_add->save(false);
										$model->save(false);
									}
								}
						
							}
							$this->redirect(array('view','id'=>$model->id));
						}
					}
				}
        }
      	$this->render('update', array('model' => $model));
	}
	
		

/**
* Deletes a particular model.
* If deletion is successful, the browser will be redirected to the 'admin' page.
* @param integer $id the ID of the model to be deleted
*/
	
	/*
public function actionDelete($id)
{
if(Yii::app()->request->isPostRequest)
{
// we only allow deletion via POST request
$this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
if(!isset($_GET['ajax']))
$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
}
else
throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
}

*/
	
	
	
/**
* Lists all models.
*/

	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$images = Images::model()->findAllByAttributes(array('data_southnationpark_id'=>$id));
				
			foreach ($images as $image)
			{
				$image->delete();
			}
				
			$this->loadModel($id)->delete();
	
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

public function actionIndex()
{

$dataProvider=new CActiveDataProvider('DataSouthnationpark');
$this->render('index',array(
'dataProvider'=>$dataProvider,
));

}

/**
* Manages all models.
*/
public function actionAdmin()
{
$model=new DataSouthnationpark('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['DataSouthnationpark']))
$model->attributes=$_GET['DataSouthnationpark'];

$this->render('admin',array(
'model'=>$model,
));
}

/**
* Returns the data model based on the primary key given in the GET variable.
* If the data model is not found, an HTTP exception will be raised.
* @param integer the ID of the model to be loaded
*/
public function loadModel($id)
{
$model=DataSouthnationpark::model()->findByPk($id);
if($model===null)
throw new CHttpException(404,'The requested page does not exist.');
return $model;
}

/**
* Performs the AJAX validation.
* @param CModel the model to be validated
*/
protected function performAjaxValidation($model)
{
if(isset($_POST['ajax']) && $_POST['ajax']==='data-southnationpark-form')
{
echo CActiveForm::validate($model);
Yii::app()->end();
}
}
}
