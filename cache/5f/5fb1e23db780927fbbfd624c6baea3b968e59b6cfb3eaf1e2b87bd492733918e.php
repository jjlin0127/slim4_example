<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* html.twig */
class __TwigTemplate_8bb41669199e9808bee79105b2bd886ac434d1bf54597991910b35781ef4c889 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php
/*
** filename: login.php
** description: 範例PHP網路應用程式登入頁
** author: Brian Tao | brian.tao@informc.com
** modification history:
**** 2017.07.20: created
*/

include_once(\"../library/config.php\");
?>
<html>
<head>
  <title><?php echo \$config['sys_title']; ?></title>
  <link rel=\"stylesheet\" href=\"../css/global.css\" />    
</head>
<body>
<p>測試可用 0001/0001, 0002/0002, 0003/0003, 0004/0004 或 0005/0005</p>
<form name=\"formLogin\" id=\"formLogin\" method=\"POST\">
  帳號 <input type=\"text\" name=\"memId\" id=\"memId\">
  <br>
  密碼 <input type=\"password\" name=\"memPwd\" id=\"memPwd\">
  <br>
  <input type=\"submit\" value=\"登入\">
</form>
<!-- js最適放置為 body tag 結束前 -->
<script src=\"../js/jquery-3.2.1.min.js\"></script>
<script src=\"../js/login.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "html.twig", "C:\\Users\\luck4\\OneDrive\\桌面\\slim\\slim4\\application\\templates\\html.twig");
    }
}
