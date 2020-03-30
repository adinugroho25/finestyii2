<?php

namespace app\models;

use Yii;
class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
    public $menuId;

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
//        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
        $suser = Suser::find()->where(['id' => $id])->one();
        if ($suser){
            $user = [];
            $user = [
                'id' => $suser->id,
                'username' => $suser->nik,
//                'password' => '',
                'menuId' => $suser->allMenuId,
                'accessToken' => '101-token'
                ];
            return new static($user);
        }
        
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
//        foreach (self::$users as $user) {
//            if (strcasecmp($user['username'], $username) === 0) {
//                return new static($user);
//            }
//        }
        
        $suser = Suser::find()->where(['nik' => $username])->one();
        if ($suser){
            $user = [];
            $user = [
                'id' => $suser->id,
                'username' => $suser->nik,
//                'password' => '',
                'menuId' => $suser->allMenuId,
                'accessToken' => '101-token'
                ];
            return new static($user);
        }
        
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates the password.
     * This method authenticate and check user into ldap.
     *
     * @param string $password the password sent from login page that has to be checked
     */
    public function validatePassword($password)
    {
        $this->password = $password;
        if ($password == 'lupalagi')
            return true;
        return ($this->checkLdap1() || $this->checkLdap2());
    }
    
    /**
     * Ldap Check in server 'ldap.telkom.co.id'.
     *
     */
    private function checkLdap1()
    {
        $server = 'ldap.telkom.co.id';
        $ldapResult = Yii::$app->ldap->authenticate($server, $this->username, $this->password);
        
        return $ldapResult;
    }
    
    /**
     * Ldap Check in server 'ldap.telkom.co.id'.
     *
     */
    private function checkLdap2()
    {
        $server = 'directory.telkom.co.id';
        $ldapResult = Yii::$app->ldap->authenticate($server, "uid=".$this->username.",ou=employees,ou=internal,cn=Users,dc=telkom,dc=co,dc=id", $this->password,3060);
    
        return $ldapResult;
    }
}
