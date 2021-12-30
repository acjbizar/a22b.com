<?php

// ACJ 1-5-2013
define('AUTHOR', 'Alexander Christiaan Jacob');
define('BASE', is_local() ? 'http://localhost/ask.alexanderchristiaanjacob.com/' : 'http://ask.alexanderchristiaanjacob.com/');

// ACJ 1-5-2013
// Request methods.
if(!defined('GET')) define('GET', 'get');
if(!defined('POST')) define('POST', 'post');
if(!defined('METHOD')) define('METHOD', isset($_SERVER['REQUEST_METHOD']) ? strtolower($_SERVER['REQUEST_METHOD']) : GET);

switch(METHOD):
case GET:

    $p = new Page;
    $p->body .= build_form();
    $p->body .= build_qna();
    $p->parse();

break;
case POST:

    if(isset($_POST['question']))
    {
        $db = new mysqli('db.acjs.net', 'acjbizar', '4ppelflap', 'acjs');
        $db->query('SET NAMES \'utf8\';');
        $q = 'INSERT INTO `qa` (`asked`, `q`) VALUES (' . time() . ', \'' . $db->real_escape_string($_POST['question']) . '\');';
        $r = $db->query($q) or die($db->error);
    }

    unset($_POST);
    header('Location: ' . BASE);
    exit;

break;
endswitch;

// ACJ 2-10-2012
// Main classes, inherited by other classes.
abstract class aThing
{
    // ACJ 3-10-2012
    public function __destruct()
    {
        unset($this);
    }

    // ACJ 2-10-2012
    // Return false when property is not set.
    public function __get($key)
    {
        return FALSE;
    }

    // ACJ 2-10-2012
    // Be able to set any property.
    public function __set($key, $value = NULL)
    {
        $this->$key = $value;
    }

    // ACJ 2-10-2012
    // Be able to print any object.
    public function __toString()
    {
        return print_r($this, TRUE);
    }

    // ACJ 3-10-2012
    // Alias for $object->key.
    public function get($key)
    {
        return $this;
    }

    // ACJ 3-10-2012
    // Alias for $object->$key = $value.
    public function set($key, $value = NULL)
    {
        $this->$key = $value;
    }
}

// ACJ 3-10-2012, 8-10-2012
class Form extends aThing
{
    // ACJ 3-10-2012, 8-10-2012
    public function __toString()
    {
        $r = '<form action="' . $this->action . '" autocomplete="off" method="' . $this->method . '">';
        $r .= $this->body;
        $r .= '</form>';

        return $r;
    }

    // ACJ 1-5-2013
    public function hidden($key, $value = NULL)
    {
        $this->body .= '<input name="' . $key . '" type="hidden" value="' . $value . '">';
    }
}

// ACJ 1-5-2013
// Page class.
class Page extends aThing
{
    // ACJ 1-5-2013
    public $status = 200;

    // ACJ 1-5-2013
    public function __toString()
    {
        $r = '<!doctype html>';
        $r .= '<html dir="ltr" lang="en">';
        $r .= '<head>';
        $r .= '<meta charset="utf-8">';
        $r .= '<meta property="fb:admins" content="509248955">';
        $r .= '<meta name="apple-mobile-web-app-capable" content="yes">';
        $r .= '<meta name="apple-mobile-web-app-title" content="Ask ACJ">';
        $r .= '<meta name="application-name" content="Ask ACJ">';
        $r .= '<meta name="description" property="og:description" content="' . $this->description . '">';
        $r .= '<meta name="keywords" content="ask, question, answer">';
        $r .= '<meta property="og:title" content="Ask ' . AUTHOR . '">';
        $r .= '<meta property="og:type" content="website">';
        $r .= '<meta property="og:url" content="' . BASE . '">';
        $r .= '<meta name="viewport" content="initial-scale=1.0,width=device-width">';
        $r .= '<title>Ask ' . AUTHOR . '</title>';
        $r .= '<link rel="author" href="http://alexanderchristiaanjacob.com/" title="' . AUTHOR . '">';
        $r .= '<link rel="canonical" href="' . BASE . '">';
        $r .= '<style>';
        $r .= '*{border:0;font-family:inherit;font-size:1em;font-style:inherit;font-weight:normal;margin:0;outline:0;padding:0;text-decoration:none}';
        //
        $r .= 'a{color:#fff}';
        $r .= 'b,strong{font-weight:bold}';
        $r .= 'button,input,textarea{vertical-align:bottom}';
        $r .= 'button{background:#333;border-radius:.125em;box-shadow:0 .03125em .03125em rgba(0,0,0,.5);color:#fff;font-family:Calibri,sans-serif,serif;font-size:2em;height:1.5em;line-height:1.5;padding:0 .5em;text-transform:uppercase}';
        $r .= 'cite,dfn,i,var{font-style:italic}';
        $r .= 'form{background:#eee;padding:1.5em 2em}';
        $r .= 'h1{background:#000;color:#fff;font-size:1.5em;font-style:italic;line-height:1;padding:18px}';
        $r .= 'html{font:normal 100%/1.5 serif,sans-serif}';
        $r .= 'input,textarea{background:#fff;box-shadow:inset 0 .125em .0625em -.0625em rgba(0,0,0,.5)}';
        $r .= 'input{text-indent:.25em}';
        $r .= 'li{margin:0 0 0 2em}';
        $r .= 'textarea{padding:0 .25em}';
        //
        $r .= '#qna{font-size:3em;line-height:1}';
        //
        $r .= '#qna li{border-left:.125em solid #c33;padding:.75em 0 .75em .7375em}';
        $r .= '</style>';
        $r .= '<script src="//use.typekit.net/mcl4hff.js"></script>';
        $r .= '<script>';
        $r .= 'try{Typekit.load();}catch(e){}';
        $r .= build_google_analytics();
        $r .= '</script>';
        $r .= '</head>';
        $r .= '<body>';
        $r .= '<header>';
        $r .= '<h1>Ask <a href="http://alexanderchristiaanjacob.com/">' . AUTHOR . '</a></h1>';
        $r .= '</header>';
        $r .= $this->body;
        $r .= '</body>';
        $r .= '</html>';

        return $r;
    }

    // ACJ 1-5-2013
    public function parse()
    {
        status($this->status);
        header('Content-Language: en');
        header('Content-Type: text/html; charset=utf-8');

        echo $this;
    }
}

// ACJ 1-5-2013
function build_form()
{
    $f = new Form;
    $f->action = BASE;
    $f->body = '<div><textarea cols="48" name="question" required rows="4"></textarea> <button type="submit">Submit</button></div>';
    $f->method = POST;

    return $f;
}

// ACJ 1-5-2013
function build_google_analytics()
{
    $r = <<<JS
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36264471-3']);
  _gaq.push(['_setDomainName', 'alexanderchristiaanjacob.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
JS;

    return $r;
}

// ACJ 1-5-2013
function build_qna()
{
    $db = new mysqli('db.acjs.net', 'acjbizar', '4ppelflap', 'acjs');
    $db->query('SET NAMES \'utf8\';');
    $q = 'SELECT * FROM `qa` WHERE `deleted` IS NULL ORDER BY `id` DESC;';
    $rows = $db->query($q) or die($db->error);

    if($rows->num_rows > 0)
    {
        $r = '<ol id="qna" reversed>';

        while($row = $rows->fetch_object())
        {
            $r .= '<li id="q-' . $row->id . '"><blockquote>' . htmlspecialchars($row->q) . '</blockquote></li>';
        }

        $rows->close();

        $r .= '</ol>';

        return $r;
    }
}

// ACJ 2-10-2012
function status($code = 200)
{
    // ACJ 2-10-2012
    // Status definitions <http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html>
    $statuses = array(
        200 => 'OK',
        201 => 'Created',
        201 => 'Accepted',
        203 => 'Non-Authoritative Information',
        301 => 'Moved Permanently',
        302 => 'Found',
        304 => 'Not Modified',
        307 => 'Temporary Redirect',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        408 => 'Request Timeout',
        410 => 'Gone',
        413 => 'Request Entity Too Large',
        414 => 'Request-URI Too Long',
        415 => 'Unsupported Media Type',
        500 => 'Internal Server Error',
        503 => 'Service Unavailable',
        505 => 'HTTP Version Not Supported'
    );

    // If status is defined, throw header.
    if(array_key_exists($code, $statuses))
    {
        if(isset($_SERVER['SERVER_PROTOCOL'])) header($_SERVER['SERVER_PROTOCOL'] . ' ' . $code . ' ' . $statuses[$code]);

        // FastCGI.
        header('Status: ' . $code . ' ' . $statuses[$code]);
    }
}

// ACJ 13-11-2012
function is_even($n = 0)
{
    return !is_odd($n);
}

// ACJ 13-11-2012
function is_local()
{
    return (isset($_SERVER['SERVER_ADDR']) AND $_SERVER['SERVER_ADDR'] === '127.0.0.1');
}

// ACJ 13-11-2012
function is_odd($n = 0)
{
    return ($n &1);
}
