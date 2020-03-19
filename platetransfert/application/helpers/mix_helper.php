<?php
defined('BASEPATH') OR exit('No direct script access allowed');


if(!function_exists('assets_url'))
{
    function assets_url($dir = '')
    {
        $path  = str_replace('index.php/','',base_url());
        $path = $path.'assets/';
        return $path.$dir;
    }
}

if(!function_exists('ROOTPATH'))
{
    function ROOTPATH($dir = '')
    {
        $path  = str_replace('system\\','',BASEPATH);
        $path = str_replace('\\','/',$path);
        return $path.$dir;


    }
}

if(!function_exists('limit_string'))
{
    function limit_string($string,$max_character)
    {
        $str = '';
        if(!empty($string) and !empty ($max_character))
        {
            for($i = 0;$i<$max_character;$i++)
            {
                if(!empty($string[$i]))
                {
                    $str.=$string[$i];
                }
            }

            if(strlen($string) > $max_character)
            {
                return $str.'...';
            }
            else
            {
                return $str;
            }

        }
    }
}

if(!function_exists('format_spec'))
{
    function format_spec($spec = '')
    {
        $spec = strtolower($spec);
        return strtolower(str_replace(' ','_',$spec));
    }
}

if(!function_exists(/** @lang returns an alternative text if the variable passed in parameter is empty. return empty string by default if the variable is empty */
    'text_transform'))
{
    function text_transform($text , $case = 'lowercase')
    {
        if(!empty($case))
        {
            switch ($case)
            {
                case'strtolower':case'lowercase': return strtolower($text);
                    break;
                case'strtoupper':case'uppercase': return strtoupper($text);
                    break;
                case'ucfirst':case'sentence_case': return ucfirst($text);
                    break;
                case'ucwords':case'capitalise_each_words': return ucwords($text);
                    break;
                default : return strtolower($text);
            }
        }

    }
}

if(!function_exists('show_message'))
{
    function show_message($type = 'success' , $message = '',$autor = '' )
    {

        if(!empty($message))
        {
            ?>
            <script>
                $(function()
                    {
                        $(function() {
                            toastr.<?php echo $type;?>('<?php echo $message?>', '<?php echo $autor?>');
                        });
                    }
                )
            </script>
            <?php
        }

    }
}


if(!function_exists('img_url'))
{
    function img_url($path = '')
    {
        return base_url('assets/images/'.$path);
    }
}

if(!function_exists('keep_form_data'))
{
    function keep_form_data($data)
    {
        foreach($data as $items=>$value)
        {
            $input[$items] = $value;
        }

        return $input;
    }
}

if(!function_exists('trim_form_data'))
{
    function trim_form_data($data , $case = 'lowercase')
    {
        $input = [];
        foreach($data as $items=>$value)
        {
            if(!empty(trim($value)))
            {
                $input[$items] = trim($value);
                $input[$items] = strip_tags($value);
                if(!empty($case))
                {
                   text_transform($input[$items], $case);
                }
            }
            else{
                unset($_POST[$items]);
            }
        }

        return $input;
    }
}

if(!function_exists('strip_tags_form_data'))
{
    function strip_tags_form_data($data)
    {
        $input = [];
        foreach($data as $items=>$value)
        {
            if(!empty(trim($value)))
            {
                $input[$items] = strip_tags($value);
            }
        }

        return $input;
    }
}

if(!function_exists(/** @lang returns an alternative text if the variable passed in parameter is empty. return empty string by default if the variable is empty */
    'alternate'))
{
    function alternate($object , $property , $alternative_value = '')
    {
       return (!empty($object))?$object->$property:$alternative_value;
    }
}

if(!function_exists('random_id'))
{
    function random_id()
    {
//        $alphabets = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//       return time().rand(0,369).$alphabets[rand(0,25)].rand(11,99).$alphabets[rand(0,25)].rand(99,1000).rand(1001,1500).$alphabets[rand(0,25)];
        return substr(time() . mt_rand(1000, 10000), 0, 12);
    }
}

if(!function_exists('percentage_of')){
    function percentage_of($percentage = '' , $amount){
        return ((float)$percentage * (float)$amount) / 100;
    }
}


if(!function_exists('php_to_js_array'))
{
    function php_to_js_array($php_array = array(), $js_arr_name = 'response')
    {
        echo '"';
        if(!empty($php_array))
        {
            echo "var {$js_arr_name} ={};"
            ?>
            <?php
            foreach ($php_array as $k => $v)
            {
                if(!is_array($v))
                {
                    ?>  <?php echo $js_arr_name;?>.<?php echo $k;?> = '<?php echo $v;?>'; <?php
                }
                else
                {
                    php_to_js_array2($v,$js_arr_name.'.'.$k);
                }
            }
            ?>
            <?php
        }
        echo '"';
    }

    function php_to_js_array2($php_array = array(), $k_name = 'response_2')
    {
        if(!empty($php_array))
        {
            echo $k_name .' = {};';
            ?>
            <?php
            foreach ($php_array as $k => $v)
            {
                if(!is_array($v))
                {
                    ?>  <?php echo $k_name;?>.<?php echo $k;?> = '<?php echo $v;?>'; <?php
                }
                else
                {
                    php_to_js_array2($v,$k_name.'.'.$k);
                }
            }
            ?>


            <?php
        }
    }
}

if(!function_exists('remove_extension'))
{
    function remove_extension($file_name = '',$extenssion = '')
    {
        if(!empty($file_name) AND empty($extenssion))
        {
            $file_name = str_replace('.png','',$file_name);
            $file_name = str_replace('.jpg','',$file_name);
            $file_name = str_replace('.jpeg','',$file_name);
            $file_name = str_replace('.PNG','',$file_name);
            $file_name = str_replace('.JPG','',$file_name);
            $file_name = str_replace('.webp','',$file_name);
            $file_name = str_replace('.GIF','',$file_name);
            $file_name = str_replace('.gif','',$file_name);
            $file_name = str_replace('.JPG','',$file_name);

            return $file_name;
        }

        else if (!empty($extenssion) AND !empty($file_name))
        {
            $file_name = str_replace($extenssion,'',$file_name);
        }


    }
}
if(!function_exists('remove_skill'))
{
    /**
     * @param null $skill_list
     * @param string $skill_id
     * @return bool|string
     * this function takes a skill list in form of a string or an an array ,  remove the specify skill_id from the skill list and then returns a skill list in form of a string
     */
    function remove_skill($skill_list = null , $skill_id = '')
    {
        //if skill_list is an array we automatically give it to skills otherwise we convert it to an array and then we give it back to the skills variable
        $skills  = (is_array($skill_list))?$skill_list:explode('~',$skill_list) ;


        if(!empty($skill_id) and !empty($skills))
        {
            //retrouver l'indice du skill grace a la finction array_search. puis avec l'indice du skill on retire la valeur de l'array en utilisant la fonction unset qui retire l'indice et la valeur de l'array...
            //ensuite on reconstruit le string des skills avec les valeur rester et on retroune le skill a la fonction
            unset($skills[array_search($skill_id,$skills)]);

            $remaing_element = implode('~',$skills);

            return $remaing_element;

        }
        else{return false;}
    }
}

if(!function_exists('add_skill'))
{
    function add_skill($skill_list = null ,$new_skill_id)
    {

        $skills  = (is_array($skill_list))?$skill_list:explode('~',$skill_list) ;


        if(!empty($new_skill_id) and !empty($skills))
        {
            if(is_array($new_skill_id))
            {
                foreach($new_skill_id as $skill_id){
                    array_push($skills , $skill_id);
                }
            }
            else array_push($skills , $new_skill_id);

            $obtain_elements = implode('~',$skills);

            return $obtain_elements;

        }
        else{return false;}
    }
}

if(!function_exists('str_decode'))
{
    function str_decode($file, $key_val_separator = ':' , $element_separator = ',')
    {

        if(strpos($file,'.txt'))
        {
            $f = file_get_contents($file);
        }
        else{
            $f = $file;
        }
        $keys = explode($element_separator,$f);
        $values = [];
        $keys_container = [];
        foreach($keys as $k)
        {
            if(count(explode($key_val_separator,trim($k))) > 1)
            {
                array_push($keys_container, explode($key_val_separator,trim($k)));
            }
            else
            {
                array_push($values,$k);
            }

        }

        foreach($keys_container as $key)
        {
            if(!empty($key[0]) and is_array($key))
            {
                $values[trim($key[0])] = trim((!empty($key[1]) || $key[1] == 0)?$key[1]:'');
            }
            else
            {
                array_push($values,$key);
            }

        }

        return $values;
    }
}

if(!function_exists('str_encode')){
    function str_encode($items = []){
        $value = '';
        if(!empty($items)){
            foreach ($items as $k=>$v){
                $value.=$k.':'.$v.',';
            }

            $value = set_last_char($value , ' ');

        }
        return trim($value);
    }
}

if(!function_exists('update_skill_list')){
    function update_skill_level_list($skill_levels = null ,$skill_data=[] , $encode = true)
    {

        $skill_level_list  = (is_array($skill_levels))?$skill_levels:str_decode($skill_levels);

        if(!empty($skill_data)){


            foreach ($skill_data as $where_skill_id=>$new_skill_value){
                $skill_level_list[$where_skill_id] = $new_skill_value;
            }


        }

        return ($encode)?str_encode($skill_level_list) : $skill_level_list;

    }
}

//===================================================================\\
if(!function_exists('get_last_char'))
{
    function get_last_char($string = '' )
    {
        return $string[strlen($string)-1];
    }
}

if(!function_exists('is_passed_date'))
{
    function is_passed_date($date)
    {
        $actual_date = date('d-m-Y',time());
        $given_date = date('d-m-Y',$date);

        if($given_date == $actual_date) return 'aujourd’hui';
        else
        {
            //same year
            if(date('Y',time()) == date('Y',$date))
            {
                //same month
                if(date('m',time()) == date('m',$date))
                {
                    // date is passed
                    if(date('d',time()) > date('d',$date))
                    {
                        return true;
                    }
                    else{
                        return false;
                    }
                }

                else
                {
                    //different_month
                    //passed month
                    if(date('m',time()) > date('m',$date))
                    {
                        return true;
                    }
                    else{
                        return false;
                    }
                }
            }
            //different year
            else{

                //passed year
                if(date('Y',time()) > date('Y',$date)){
                    return true;
                }else return false;
            }
        }

    }
}


//===================================================================\\
if(!function_exists('set_last_char'))
{
    function set_last_char($string = '',$new_char = '' )
    {
        $string[strlen($string)-1] = $new_char;
        return $string;
    }
}

if(!function_exists('post'))
{
    function post($value='')
    {
        $CI =& get_instance();
        return $CI->input->post($value);
    }
}

if ( ! function_exists('slugify'))
{
    function slugify($string, $replace = array(), $delimiter = '-', $locale = 'en_US.UTF-8', $encoding = 'UTF-8') {
        if (!extension_loaded('iconv')) {
            throw new Exception('iconv module not loaded');
        }
        // Save the old locale and set the new locale
        $oldLocale = setlocale(LC_ALL, '0');
        setlocale(LC_ALL, $locale);
        $clean = iconv($encoding, 'ASCII//TRANSLIT', $string);
        if (!empty($replace)) {
            $clean = str_replace((array) $replace, ' ', $clean);
        }
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower($clean);
        $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
        $clean = trim($clean, $delimiter);
        // Revert back to the old locale
        // setlocale(LC_ALL, $oldLocale);
        return $clean;
    }
}

function display($msg){
    $CI =& get_instance();
    $data['msg'] = $msg;
    $CI->load->view('display',$data);
}

function group_priviliges($value='')
{
    $CI =& get_instance();

    $gp_id = $CI->session->userdata("group_id");

    $gp_result = $CI->common_model->user_head_privilege($gp_id);

    foreach($gp_result as $key => $head_pre)
    {
        $gp_result[$key]->sub = $CI->common_model->user_sub_privilege($gp_id,$head_pre->perm_id);
    }

    return $gp_result;
}
//===================================================================\\