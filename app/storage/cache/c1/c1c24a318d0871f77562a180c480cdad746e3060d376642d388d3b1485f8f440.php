<?php

/* include/footer.twig */
class __TwigTemplate_7f5bee0f05cc34ab1fb79c226b79243fbe161bac266eea8b73d2c5928e60b4b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer>
    <p><small>Copyright &copy; Candy Clip All Rights Reserved.</small></p>
</footer>";
    }

    public function getTemplateName()
    {
        return "include/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
    <p><small>Copyright &copy; Candy Clip All Rights Reserved.</small></p>
</footer>", "include/footer.twig", "/Applications/XAMPP/xamppfiles/htdocs/candy/app/views/include/footer.twig");
    }
}
