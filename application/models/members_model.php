<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * TODO: short description.
 *
 * TODO: long description.
 *
 */
class members_model extends CI_Model
{

    /**
     * TODO: short description.
     *
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Checks if an email address is in use
     *
     * @return boolean
     */
    public function checkEmailInUse($email)
    {
        $email = $this->db->escape_str($email);

        if (empty($email)) throw new Exception("Email is empty!");

        $sql = "SELECT COUNT(*) cnt FROM members WHERE email = '{$email}'";

        $query = $this->db->query($sql);

        $results = $query->result();

        if ((int) $results[0]->cnt > 0) return true;

    return false;
    }

    /**
     * TODO: short description.
     *
     * @param mixed $p 
     *
     * @return INT
     */
    public function createUser($p)
    {
        $p = $this->functions->recursiveClean($p);

        $sql = "INSERT INTO members SET
            datestamp = NOW(),
            firstName = '{$p['firstName']}',
            lastName = '{$p['lastName']}',
            email = '{$p['email']}',
           passwd = SHA1('{$p['password']}'),
            address = '{$p['address']}',
            address2 = '{$p['address2']}',
            city = '{$p['city']}',
            state = '{$p['state']}',
            zipCode = '{$p['zipCode']}',
            phone = '{$p['phone']}',
            `status` = 1";

        $this->db->query($sql);

    return $this->db->insert_id();
    }

    /**
    *
    *   Check login function below
    *
    **/

    public function check_login($email, $password)
    {
        $email = $this->db->escape_str($email);
        $password = $this->db->escape_str($password);

        $sql = "SELECT * FROM members WHERE `email` = '{$email}' AND passwd = SHA1('{$password}') AND `status` = '1'";

        $query = $this->db->query($sql);

        $results = $query->result();

        return $results[0];
    }
}
