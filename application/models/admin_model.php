<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * TODO: short description.
 *
 * TODO: long description.
 *
 */
class admin_model extends CI_Model
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
     * TODO: short description.
     *
     * @param array $p - post array
     *
     * @return INT - Member ID
     */
    public function addNewUser ($p)
    {
        $p = $this->functions->recursiveClean($p);

        $sql = "INSERT INTO members SET
            firstName = '{$p['firstName']}',
            lastName = '{$p['lastName']}',
            email = '{$p['email']}',
            passwd = SHA1('{$p['passwd']}')
            address1 = '{$p['address1']}',
            address2 = '{$p['address2']}',
            city = '{$p['city']}',
            state = '{$p['state']}',
            zipCode = '{$p['zipCode']}',
            phone = '{$p['phone']}',;
 
        $this->db->query($sql);

        return $this->db->insert_id();
    }
}
