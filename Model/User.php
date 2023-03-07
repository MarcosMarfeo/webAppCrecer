<?php
namespace App\Model;

use App\Helper\Connections;
use App\Model\Model;


class User extends Model
{

    public $id;
    public $name;
    public $uniq_id;
    public $password;
    public $profile;

    static public function all()
    {
        $conex = new Connections();
        $sql = 'SELECT * FROM users';
        $res = $conex->select(Connections::SELECT, $sql);

        return $res;
    }

    static public function getAllGuest()
    {
        $conex = new Connections();
        $sql = 'SELECT * FROM users';
        $res = $conex->select(Connections::SELECT, $sql);

        return $res;
    }


    public static function obtain($id = null) {
        $user = new User();
        $conex = new Connections();
        $sql = 'SELECT TOP 1 * FROM users WHERE id = ' . $id . '';
        $res = $conex->select(Connections::SELECT, $sql);
        if (isset($res[0])) {
            $user = self::setProperties($user, $res[0]);
        }

        return $user;
    }

    public static function obtainUniqId($uniq_id = null) {
        $user = new User();
        $conex = new Connections();
        $sql = 'SELECT TOP 1 * FROM users WHERE uniq_id = ' . $uniq_id . '';
        $res = $conex->select(Connections::SELECT, $sql);

        if (isset($res[0])) {
            $user = self::setProperties($user, $res[0]);
        }

        return $user;
    }

    public function insert()
    {
        $conex = new Connections();
        $sql = "INSERT INTO users
            (name, uniq_id, password, profile)
            VALUES
            (:name, :uniq_id, :password, :profile)";
        $res = $conex->select(Connections::INSERT, $sql,  [
            ':name' => $this->name,
            ':uniq_id' => $this->uniq_id,
            ':password' => $this->password,
            ':profile' => $this->profile
        ]);

        return $res;
    }

    public function delete()
    {

    }

    public function update()
    {

    }

    public function validate()
    {

    }

    public static function setProperties(User $user, array $data) {

        $user->id = $data['id'];
        $user->name = $data['name'];
        $user->uniq_id = $data['uniq_id'];
        $user->password = $data['password'];
        $user->profile = $data['profile'];

        return $user;
    }
}