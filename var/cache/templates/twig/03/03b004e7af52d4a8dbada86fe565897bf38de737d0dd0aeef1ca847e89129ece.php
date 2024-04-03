<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__52fb1ba542db29896db17e942fac4daa6559d99c71e41a3b6c36ef21774dbd48 */
class __TwigTemplate_b24c845d92c6e64eac4386b9c26fa1c91b6c3ff78d5bf134b696fb21642eb0c8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($context["date"] ?? null)) {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.negative_balance_reached.subject");
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.suspended_status_reached.subject");
            echo " ";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__52fb1ba542db29896db17e942fac4daa6559d99c71e41a3b6c36ef21774dbd48";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if date %} {{ __(\"vendor_debt_payout.negative_balance_reached.subject\") }} {% else %} {{ __(\"vendor_debt_payout.suspended_status_reached.subject\") }} {% endif %}", "__string_template__52fb1ba542db29896db17e942fac4daa6559d99c71e41a3b6c36ef21774dbd48", "");
    }
}
