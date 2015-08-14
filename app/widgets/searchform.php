<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Searchform extends Widget {

	function __construct($config = array())
	{
		if (count($config) > 0) {
            $this->initialize($config);
        }
	}

    public function initialize($config = array())
    {
        foreach ($config as $key => $val)
        {
            if (isset($this->$key)) {
                $method = 'set_' . $key;
                if (method_exists($this, $method)) {
                    $this->$method($val);
                } else {
                    $this->$key = $val;
                }
            }
        }
        return $this;
    }

    public function run()
	{
		$html = "";
        $html .= form_open('search', array('class' => 'form-inline', 'role' => 'form'));
        $html .= "<div class=\"form-group\">";
        $html .= "    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Pesquisar ...\" />";
        $html .= "</div>";
        $html .= "<button type=\"submit\" class=\"btn btn-primary\">Ok</button>";
        
        $html .= form_close();

        return $html;
	}

}