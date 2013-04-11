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
            passwd = SHA1('{$p['passwd']}')";

        $this->db->query($sql);

        return $this->db->insert_id();
    }
}
