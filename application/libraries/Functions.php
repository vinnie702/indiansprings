<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Functions
{

    /**
     * Checks if user is logged into backend
     *
     * @return boolean TRUE if logged in
     */
    public function checkLoggedIn()
    {
        $ci =& get_instance();

        $ci->load->helper('url');

        if(!isset($_COOKIE['memberid']))
        {
            header("Location: /members/login?site-error=" . urlencode("You are not logged in") . "&ref=" . uri_string());
            exit;
        }
    }

    /*
     * cleans an entire array
     */
    public function recursiveClean($array)
    {
        $ci =& get_instance();

        if (!empty($array))
        {
            foreach ($array as $k => $v)
            {
                if(is_array($v))
                {
                    $array[$k] = $ci->functions->recursiveClean($v);
                }
                else
                {
                    $array[$k] = $ci->db->escape_str($v);
                }
            }
        }

        return $array;
    }


    /**
     * Removes certain programming tags like PHP, JS, and certain HTML
     *
     * @param String $s 
     *
     * @return String
     */
    public function removeCode($s)
    {
        $s = str_ireplace("<?php" , '', $s);
        $s = str_ireplace("<?" , '', $s);
        $s = str_ireplace("?>" , '', $s);
        $s = str_ireplace("<script" , '', $s);
        $s = str_ireplace("</script>" , '', $s);
        $s = str_ireplace("type='application/javascript'" , '', $s);
        $s = str_ireplace("type=\"application/javascript\"" , '', $s);
        $s = str_ireplace("type='text/javascript'" , '', $s);
        $s = str_ireplace("type=\"text/javascript\"" , '', $s);


    return $s;
    }

    /**
     * Saves stack trace error in error log
     */
    public function sendStackTrace($e, $errorNum = 0)
    {
        $body = "Stack Trace Error:\n\n";
        $body .= "URL: {$_SERVER["SERVER_NAME"]}{$_SERVER["REQUEST_URI"]}\n";
        $body .= "Referer: {$_SERVER['HTTP_REFERER']}\n";

        if (!empty($errorNum))$body .= "Error Number: {$errorNum}\n\n";

        $body .= "User ID: {$_COOKIE['userid']}\n\n";
        $body .= "Message: " . $e->getMessage() . "\n\n";
        $body .= $e;

        error_log($body);

    }

    /**
     * Gets a code group
     *
     * @param int $group 
     * @param String $orderBy
     *
     * @return array->object
     */
    public function getCodes($group, $orderBy = null)
    {
        $ci =& get_instance();

        $group = intval($group);

        if (empty($group)) throw new Exception("Group is empty!");

        if (!empty($orderBy))
        {
            $orderBy = $ci->db->escape_str($orderBy);

            $sqlOrderBy = "ORDER BY " . $orderBy;
        }
        else
        {
            $sqlOrderBy = "ORDER BY display ASC";
        }

        $sql = "SELECT * FROM codes WHERE `group` = {$group} AND `code` <> 0 " . $sqlOrderBy;

        $query = $ci->db->query($sql);

        $results = $query->result();

    return $results;
    }

    /**
     * gets the child group for a paticular code
     *
     * @param INT $group 
     * @param INT $code  
     *
     * @return INT
     */
    public function getCodeChild($group, $code)
    {
        $ci =& get_instance();

        $group = intval($group);
        $code = intval($code);

        if (empty($group)) throw new Exception("group is empty!");
        if (empty($code)) throw new Exception("code is empty!");

        $sql = "SELECT childGroup FROM codes WHERE `group` = {$group} and `code` = {$code} AND active = 1";

        $query = $ci->db->query($sql);

        $results = $query->result();

    return (int) $results[0]->childGroup;
    }

    /**
     * returns array of all 50 states
     *
     * @return array [abb]=>[state name]
     */
    public function getStates()
    {
        $state_list = array(
        'AL'=>"Alabama",
        'AK'=>"Alaska",
        'AZ'=>"Arizona",
        'AR'=>"Arkansas",
        'CA'=>"California",
        'CO'=>"Colorado",
        'CT'=>"Connecticut",
        'DE'=>"Delaware",
        'DC'=>"District Of Columbia",
        'FL'=>"Florida",
        'GA'=>"Georgia",
        'HI'=>"Hawaii",
        'ID'=>"Idaho",
        'IL'=>"Illinois",
        'IN'=>"Indiana",
        'IA'=>"Iowa",
        'KS'=>"Kansas",
        'KY'=>"Kentucky",
        'LA'=>"Louisiana",
        'ME'=>"Maine",
        'MD'=>"Maryland",
        'MA'=>"Massachusetts",
        'MI'=>"Michigan",
        'MN'=>"Minnesota",
        'MS'=>"Mississippi",
        'MO'=>"Missouri",
        'MT'=>"Montana",
        'NE'=>"Nebraska",
        'NV'=>"Nevada",
        'NH'=>"New Hampshire",
        'NJ'=>"New Jersey",
        'NM'=>"New Mexico",
        'NY'=>"New York",
        'NC'=>"North Carolina",
        'ND'=>"North Dakota",
        'OH'=>"Ohio",
        'OK'=>"Oklahoma",
        'OR'=>"Oregon",
        'PA'=>"Pennsylvania",
        'RI'=>"Rhode Island",
        'SC'=>"South Carolina",
        'SD'=>"South Dakota",
        'TN'=>"Tennessee",
        'TX'=>"Texas",
        'UT'=>"Utah",
        'VT'=>"Vermont",
        'VA'=>"Virginia",
        'WA'=>"Washington",
        'WV'=>"West Virginia",
        'WI'=>"Wisconsin",
        'WY'=>"Wyoming"
        );

        return $state_list;
    }
}
