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

/* __string_template__6aac902c5c9d9cfd5b716a7604eca5efa395be7e240b47adca353e926ab68a33 */
class __TwigTemplate_ac85b443664270e69042ddddef2da99ab25a828d2ad8b3c109ba41fe8142f3e3 extends \Twig\Template
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
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.negative_balance_reached.message", ["[amount]" => ($context["amount"] ?? null), "[date]" => ($context["date"] ?? null)]);
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_debt_payout.suspended_status_reached.message", ["[amount]" => ($context["amount"] ?? null), "[vendor_plan_lowers_allowed_balance]" => ($context["vendor_plan_lowers_allowed_balance"] ?? null)]);
            echo " ";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__6aac902c5c9d9cfd5b716a7604eca5efa395be7e240b47adca353e926ab68a33";
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
        return new Source("{% if date %} {{ __(\"vendor_debt_payout.negative_balance_reached.message\", {\"[amount]\": amount, \"[date]\": date}) }} {% else %} {{ __(\"vendor_debt_payout.suspended_status_reached.message\", {\"[amount]\": amount, \"[vendor_plan_lowers_allowed_balance]\": vendor_plan_lowers_allowed_balance}) }} {% endif %}", "__string_template__6aac902c5c9d9cfd5b716a7604eca5efa395be7e240b47adca353e926ab68a33", "");
    }
}
