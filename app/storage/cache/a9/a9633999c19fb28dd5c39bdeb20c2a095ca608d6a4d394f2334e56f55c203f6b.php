<?php

/* include/footer.twig */
class __TwigTemplate_0ae37f62c33250cebdc91d16a09d3cebd3c47c09adb80df27c499a3b6e7bff6f extends Twig_Template
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
