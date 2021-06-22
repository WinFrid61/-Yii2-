<?php


namespace app\controllers;


use yii\web\Controller;
use Yii;
use yii\filters\AccessControl;
use yii\data\Pagination;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Organization;
use app\models\Transport;
use app\models\Driver;
use app\models\Transport_num;
use app\models\Num_serial;
use app\models\Org_dtp_street;
use app\models\Transport_osmotr;
use app\models\Dtp;
use app\models\Dtp_rozisk_reason;
use app\models\Dtp_type;
use app\models\Rozisk;
use app\models\Zap1;
use app\models\Zap2;
use app\models\Zap3;
use app\models\Zap5;
use app\models\Zap8;
use app\models\Zap10;
use app\models\LoginForm;
use app\models\User;
use app\models\SignupForm;

class PoliceController extends Controller
{
public $layout = 'police';

public function actionIndex()
{
	return $this->render('index');
}
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
      public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goBack();
    }
	
		public function actionSignup()
    {
        $model = new SignupForm();
 
        if ($model->load(Yii::$app->request->post())) {
            if ($users2 = $model->signup()) {
                if (Yii::$app->getUser()->login($users2)) {
                    return $this->goHome();
                }
            }
        }
 
        return $this->render('signup', [
            'model' => $model,
        ]);
    }
public function actionLab5()
{

	return $this->render('lab5');

}

public function actionZapros()
{

	return $this->render('zapros');

}

public function actionZap1()
{
    $model = new Zap1();
    $ser =  Num_serial::find()->all();
    $serial = ['Не выбрано' => 'Не выбрано'];
    foreach ($ser as $s)
    $serial[$s["Serial_Id"]] = $s["Serial"]; 
	
    $query = Organization::find();
    if($model->load(Yii::$app->request->post()))
    {
			if($model->serial != "Не выбрано" && $model->startDate == "" && $model->endDate == "")
        {
            $massa = [];
            $massa["num_Serial.Serial_Id"] = $model->serial;
            $query = Organization::find()->joinWith('driver')->joinWith('driver.transport')->joinWith('driver.transport.transport_num')
			->joinWith('driver.transport.transport_num.num_Serial')->where($massa);
        }
		else
			if($model->serial == "Не выбрано" && $model->startDate != "")
        {
            $massa = [];
            $massa["num_Serial.Serial_Id"] = $model->serial;
            $query = Organization::find()->joinWith('driver')->joinWith('driver.transport')->joinWith('driver.transport.transport_num')
			->joinWith('driver.transport.transport_num.num_Serial')->where(['>=', 'Num_date', $model->startDate]);
        }
		else
			if($model->serial == "Не выбрано" && $model->endDate != "")
        {
            $massa = [];
            $massa["num_Serial.Serial_Id"] = $model->serial;
            $query = Organization::find()->joinWith('driver')->joinWith('driver.transport')->joinWith('driver.transport.transport_num')
			->joinWith('driver.transport.transport_num.num_Serial')->where(['<=', 'Num_date', $model->endDate]);
        }
		else
			if($model->serial == "Не выбрано" && $model->startDate != "" && $model->endDate != "")
        {
            $query = Organization::find()->joinWith('driver')->joinWith('driver.transport')->joinWith('driver.transport.transport_num')
			->joinWith('driver.transport.transport_num.num_Serial')->where(['>=', 'Num_date', $model->startDate])
                ->andWhere(['<=', 'Num_date', $model->endDate]);
        }
		else
			Yii::$app->session->setFlash('error', 'Ошибка. Выберите либо номер серии, либо диапазон, за который были выданы номера.');
    }
		$tabl = $query
			->orderBy('Id DESC')
			->distinct()
			->all();
        $counter = $query->count();
		
        return $this->render('zap1', [
			'tabl' => $tabl,
            'counter' => $counter,
            'serial' => $serial,
            'model'=>$model,
        ]);
    }

public function actionZap2()
{
	$model = new Zap2();
    $num =  Transport_num::find()->all();
    $number = ['Не выбрано' => 'Не выбрано'];
    foreach ($num as $n)
    $number[$n["Num_Id"]] = $n["Num"];
	
    $query = Driver::find();
    if($model->load(Yii::$app->request->post()))
    {
			if($model->number != "Не выбрано")
        {
            $massa = [];
            $massa["Transport_num.Num_Id"] = $model->number;
            $query = Driver::find()->joinWith('transport.transport_num')->where($massa);
        }
		else
			Yii::$app->session->setFlash('error', 'Ошибка. Выберите гос. номер транспорта');
    }
		$tabl = $query
			->all();
        return $this->render('zap2', [
			'tabl' => $tabl,
            'number' => $number,
            'model'=>$model,
        ]);
    }

public function actionZap3()
{
	$model = new Zap3();
	$num =  Transport_num::find()->all();
    $number = ['Не выбрано' => 'Не выбрано'];
    foreach ($num as $n)
    $number[$n["Num_Id"]] = $n["Num"];
	
    $query = Transport::find();
    if($model->load(Yii::$app->request->post()))
    {
			if($model->number != "Не выбрано")
        {
            $massa = [];
            $massa["Transport.Num_id"] = $model->number;
            $query = Transport::find()->joinWith('transport_num')->joinWith('dtp')->joinWith('transport_osmotr')->where($massa);
        }
		else
			Yii::$app->session->setFlash('error', 'Ошибка. Выберите гос. номер транспорта');
    }
		$tabl = $query
			->all();
        return $this->render('zap3', [
			'tabl' => $tabl,
            'number' => $number,
            'model'=>$model,
        ]);
    }

public function actionZap4()
{
    $query = Driver::find()->joinWith('transport.transport_osmotr')->where(['=', 'Proideno', 'Не прошёл']);
		$tabl = $query
			->orderBy('Surname')
			->all();
			
		$counter = $query->count();
        return $this->render('zap4', [
			'tabl' => $tabl,
			'counter' => $counter,
        ]);

}

public function actionZap5()
{
    $model = new Zap5();
    $tip =  Dtp_type::find()->all();
    $type = ['Не выбрано' => 'Не выбрано'];
    foreach ($tip as $t)
    $type[$t["Type_Id"]] = $t["Type"];
	
    $query = Dtp::find();
    if($model->load(Yii::$app->request->post()))
    {
			if($model->type != "Не выбрано" && $model->startDate == "" && $model->endDate == "")
        {
            $massa = [];
            $massa["dtp_type.Type_Id"] = $model->type;
            $query = Dtp::find()->joinWith('dtp_type')->joinWith('dtp_rozisk_reason')->joinWith('org_dtp_street')->where($massa);
        }
		else
			if($model->type != "Не выбрано" && $model->startDate != "" && $model->endDate == "")
        {
            $massa = [];
            $massa["dtp_type.Type_Id"] = $model->type;
            $query = Dtp::find()->joinWith('dtp_type')->joinWith('dtp_rozisk_reason')->joinWith('org_dtp_street')->where($massa)->andwhere(['>=', 'DTP_date', $model->startDate]);
        }
		else
			if($model->type != "Не выбрано" && $model->startDate == "" && $model->endDate != "")
        {
            $massa = [];
            $massa["dtp_type.Type_Id"] = $model->type;
            $query = Dtp::find()->joinWith('dtp_type')->joinWith('dtp_rozisk_reason')->joinWith('org_dtp_street')->where($massa)->andwhere(['<=', 'DTP_date', $model->endDate]);
        }
		else
			if($model->type != "Не выбрано" && $model->startDate != "" && $model->endDate != "")
        {
            $massa = [];
            $massa["dtp_type.Type_Id"] = $model->type;
            $query = Dtp::find()->joinWith('dtp_type')->joinWith('dtp_rozisk_reason')->joinWith('org_dtp_street')->where($massa)->andwhere(['>=', 'DTP_date', $model->startDate])
			->andwhere(['<=', 'DTP_date', $model->endDate]);
        }
		else
			if($model->type == "Не выбрано" && $model->startDate != "")
        {
            $massa = [];
            $massa["dtp_type.Type_Id"] = $model->type;
            $query = Dtp::find()->joinWith('dtp_type')->joinWith('dtp_rozisk_reason')->joinWith('org_dtp_street')->where(['>=', 'DTP_date', $model->startDate]);
        }
		else
			if($model->type == "Не выбрано" && $model->endDate != "")
        {
            $massa = [];
            $massa["dtp_type.Type_Id"] = $model->type;
            $query = Dtp::find()->joinWith('dtp_type')->joinWith('dtp_rozisk_reason')->joinWith('org_dtp_street')->where(['<=', 'DTP_date', $model->endDate]);
        }
		else
			if($model->type == "Не выбрано" && $model->startDate != "" && $model->endDate != "")
        {
           $query = Dtp::find()->joinWith('dtp_type')->joinWith('dtp_rozisk_reason')->joinWith('org_dtp_street')->where(['>=', 'DTP_date', $model->startDate])
                ->andWhere(['<=', 'Num_date', $model->endDate]);

        }
		else
			Yii::$app->session->setFlash('error', 'Ошибка. Выберите тип ДТП/период.');
    }
		$tabl = $query
			->orderBy('DTP_date')
			->all();
        $counter = $query->count();
        return $this->render('zap5', [
			'tabl' => $tabl,
            'counter' => $counter,
            'type' => $type,
            'model'=>$model,
        ]);
    }

public function actionZap6()
{
		$query1 = new \yii\db\Query;
            $tabl = $query1->select('dtp.DTP_date as date, dtp_rozisk_reason.Reason as reas, dtp.Desc as desc, dtp_type.Type as type, org_dtp_street.Street as street')
				->from('dtp')
                ->innerjoin('dtp_rozisk_reason', 'dtp_rozisk_reason.Reason_Id = dtp.Reason_Id')
                ->innerjoin('dtp_type', 'dtp_type.Type_Id = dtp.Type_Id')
                ->innerjoin('org_dtp_street', 'org_dtp_street.Id = dtp.Street_Id')
				->orderBy('date')
                ->createCommand()
                ->queryAll();
				
		$query2 = new \yii\db\Query;
            $reason = $query2->select('count(dtp.DTP_Id) as count, dtp_rozisk_reason.Reason as rname')
				->from('dtp_rozisk_reason')
                ->innerjoin('dtp', 'dtp_rozisk_reason.Reason_Id = dtp.Reason_Id')
				->groupBy('dtp_rozisk_reason.Reason_Id')
                ->createCommand()
                ->queryAll();
				
				$reasonm = max($reason);
				
		// $query1 = Dtp::find();
		// $tabl = $query1
			// ->orderBy('DTP_date')
			// ->all();
			
		$query3 = new \yii\db\Query;
            $str = $query3->select('count(dtp.DTP_Id) as count, org_dtp_street.Street as sname')
				->from('org_dtp_street')
                ->innerjoin('dtp', 'org_dtp_street.Id = dtp.Street_Id')
				->groupBy('org_dtp_street.Street')
                ->createCommand()
                ->queryAll();
				
				$strm = max($str);

		$counter = $query1->count();
        return $this->render('zap6', [
			'tabl' => $tabl,
			'counter' => $counter,
			'strm' => $strm,
			'reasonm' => $reasonm,
        ]);
}

public function actionZap7()
{
	$prozent = Dtp::find()->count();
    $query = Dtp::find()->where(['=', 'Reason_id', '1']);
	
		$tabl = $query
			->orderBy('DTP_date')
			->all();
			
		$counter = $query->count();
        return $this->render('zap7', [
			'tabl' => $tabl,
			'counter' => $counter,
			'prozent' => $prozent,
        ]);

}

public function actionZap8()
{
	$model = new Zap8();
	$roz =  dtp_rozisk_reason::find()->where(['=', 'Reason_Id', '7'])->orwhere(['=', 'Reason_Id', '8'])
	->orwhere(['=', 'Reason_Id', '9'])->orwhere(['=', 'Reason_Id', '10'])->orwhere(['=', 'Reason_Id', '11'])->all();
    $rozisk = ['Не выбрано' => 'Не выбрано'];
    foreach ($roz as $r)
    $rozisk[$r["Reason_Id"]] = $r["Reason"];
	
    $query = rozisk::find();
    if($model->load(Yii::$app->request->post()))
    {
			if($model->rozisk != "Не выбрано")
        {
            $massa = [];
            $massa["rozisk.Reason_Id"] = $model->rozisk;
            $query = rozisk::find()->joinWith('dtp_rozisk_reason')->where($massa);
        }
		else
            $query = rozisk::find();
    }
		$counter = $query->count();
		$tabl = $query
			->orderBy('Rozisk_date')
			->all();
        return $this->render('zap8', [
			'tabl' => $tabl,
            'rozisk' => $rozisk,
			'counter' => $counter,
			'model' => $model,
        ]);
    }

public function actionZap9()
{	
    $query = rozisk::find();
		$counter = rozisk::find()->count();
		$counter2 = rozisk::find()->where(['=', 'Nashli', 'Да'])->count();
		$tabl = $query
			->orderBy('Rozisk_date')
			->all();
        return $this->render('zap9', [
			'tabl' => $tabl,
			'counter' => $counter,
			'counter2' => $counter2,
        ]);
    }

public function actionZap10()
{
    $model = new Zap10();
    $query = Rozisk::find()->where(['=', 'Reason_Id', '11']);
    if($model->load(Yii::$app->request->post()))
    {
			if($model->startDate != "" && $model->endDate != "")
        {
            $query = Rozisk::find()->where(['=', 'Reason_Id', '11'])->andwhere(['>=', 'Rozisk_date', $model->startDate])->andwhere(['<=', 'Rozisk_date', $model->endDate]);
        }
		else
			if($model->startDate != "" && $model->endDate == "")
        {
            $query = Rozisk::find()->where(['=', 'Reason_Id', '11'])->andwhere(['>=', 'Rozisk_date', $model->startDate]);
        }
		else
			if($model->startDate == "" && $model->endDate != "")
        {
			 $query = Rozisk::find()->where(['=', 'Reason_Id', '11'])->andwhere(['<=', 'Rozisk_date', $model->endDate]);
        }
		else
			Yii::$app->session->setFlash('error', 'Ошибка. Укажите период.');
    }
		$tabl = $query
			->orderBy('Rozisk_date')
			->all();
        $counter = $query->count();
        return $this->render('zap10', [
			'tabl' => $tabl,
            'counter' => $counter,
            'model'=>$model,
        ]);
    }

public function actionZap11()
{

	$query1 = new \yii\db\Query;
            $tabl = $query1->select('rozisk.Rozisk_Date as date, transport.Firm as marka, org_dtp_street.Street as street, rozisk.Nashli as nashli')
				->from('rozisk')
                ->innerjoin('dtp_rozisk_reason', 'dtp_rozisk_reason.Reason_Id = rozisk.Reason_Id')
                ->innerjoin('transport', 'transport.Transport_Id = rozisk.Transport_Id')
                ->innerjoin('org_dtp_street', 'org_dtp_street.Id = rozisk.Street_Id')
				->where('rozisk.Reason_Id = 11')
				->orderBy('date')
                ->createCommand()
                ->queryAll();
				
		$query2 = new \yii\db\Query;
            $mark = $query2->select('count(rozisk.Rozisk_Id) as count, transport.Firm as fname')
				->from('rozisk')
                ->innerjoin('transport', 'rozisk.Transport_Id = transport.Transport_id')
				->where('rozisk.Reason_Id = 11')
				->groupBy('transport.Firm')
                ->createCommand()
                ->queryAll();
				
				$markm = max($mark);
			
		$query3 = new \yii\db\Query;
            $signal = $query3->select('count(rozisk.Rozisk_Id) as count, transport_signal.Type as sname')
				->from('rozisk')
                ->innerjoin('transport', 'rozisk.Transport_Id = transport.Transport_id')
                ->innerjoin('transport_signal', 'transport.Signal_Id = transport_signal.Signal_Id')
				->where('rozisk.Reason_Id = 11')
				->groupBy('transport_signal.Type')
                ->createCommand()
                ->queryAll();
				
				$signalm = min($signal);

		$counter = $query1->count();
		$counter2 = $query1->andwhere(['=', 'Nashli', 'Да'])->count();
        return $this->render('zap11', [
			'tabl' => $tabl,
			'counter' => $counter,
			'counter2' => $counter2,
			'markm' => $markm,
			'signalm' => $signalm,
        ]);
}
}
