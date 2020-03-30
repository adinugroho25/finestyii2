<?php

namespace app\models;

use Yii;
use linslin\yii2\curl;
use yii\bootstrap\Button;
use yii\helpers\Html;
/**
 * This is the model class for table "suser".
 *
 * @property int $id
 * @property string $nik
 */
class Suser extends \yii\db\ActiveRecord
{
    private $passwordInput;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nik'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'nik' => 'Nik',
        ];
    }

    public function getProfiles()
    {
        return $this->hasMany(Profile::class,['id'=>'idProfile'])->viaTable('{{%userProfile}}',['idUser'=>'id'])->orderBy('id ASC');
    }
    
    public function getProfilesImploded()
    {
        $profiles = [];
        foreach((array) $this->profiles as $profile){
//            $profiles[] = Button::widget([
//                            'label' => $profile->name,
//                            'options' => ['class' => 'btn btn-default btn-xs'],
//                        ]);
            $profiles[] = Html::a(
                $profile->name,
                ['admin/user/test/','id'=>$profile->id],
                [
                    'class'=>'link_selector btn btn-default btn-xs',
                    'data-pjax'=> '#modalProfileContent'
                ]
            );
        }
//        debug(implode(' ', $profiles));
        return implode(' ', $profiles);
    }
    
    public function getAllMenuId()
    {
        $listMenuId = [];
        if (!empty($this->profiles)){
            foreach ($this->profiles as $key => $profile) {
                if (!empty($profile->menus)){
                    foreach ($profile->menus as $key1 => $menu) {
                        $listMenuId[] = $menu->id;
                    }
                }
            }
        }
        
        return $listMenuId;
    }
    
    protected function getToken()
    {
        $curl = new curl\Curl();
        $response = $curl
            ->setOption(CURLOPT_POST, 1)
            ->setOption(
            CURLOPT_POSTFIELDS, 
            http_build_query([
                'username' => $this->nik,
                'password' => 'mpresensi'
            ]))
            ->setOption(CURLOPT_SSL_VERIFYHOST, 0)
            ->setOption(CURLOPT_SSL_VERIFYPEER, 0)
            ->setOption(CURLOPT_RETURNTRANSFER, 1)
            ->post('https://apifactory.telkom.co.id:8243/hcm/auth/v1/token');
        $response = json_decode($response, true);
        if ($response['status'] == 'success')
            return $response['data']['jwt']['token'];
        else 
            return false;
    }
    
    public function getProfilePegawai()
    {
        $curl = new curl\Curl();
        $responseRaw = $curl
            ->setOption(CURLOPT_SSL_VERIFYHOST, 0)
            ->setOption(CURLOPT_SSL_VERIFYPEER, 0)
            ->setOption(CURLOPT_RETURNTRANSFER, 1)
            ->setOption(
            CURLOPT_HTTPHEADER, 
            [
                'X-Authorization:Bearer '.$this->getToken(),
                'Content-Type:application/json'
            ])
            ->get('http://apifactory.telkom.co.id:8280/hcm/pwb/v1/profile/'.$this->nik);
        $response = json_decode($responseRaw, true);
//        debug($response);
        
        if ($response['status'] == 'success')
            return $response['data'];
        else 
            return false;
//        var_dump($this->getToken(),$this->nik);exit;
//        $token = curl_init(); 
//        curl_setopt($token, CURLOPT_URL, 'http://apifactory.telkom.co.id:8280/hcm/pwb/v1/profile/'.$this->nik); 
//        curl_setopt($token, CURLOPT_SSL_VERIFYHOST, 0);
//        curl_setopt($token, CURLOPT_SSL_VERIFYPEER, 0);
//        curl_setopt($token, CURLOPT_RETURNTRANSFER, 1); 
//        curl_setopt($token, CURLOPT_HTTPHEADER, [
//                'X-Authorization:Bearer '.$this->getToken(),
//                'Content-Type:application/json'
//            ]);
//        $postToken = curl_exec($token); 
//        $err = curl_error($token);
//        curl_close($token);
//        $response = json_decode($postToken, true);
    }
    
    public function getProfilePegawaiText()
    {
        return writeDown($this->profilePegawai);
    }
}
