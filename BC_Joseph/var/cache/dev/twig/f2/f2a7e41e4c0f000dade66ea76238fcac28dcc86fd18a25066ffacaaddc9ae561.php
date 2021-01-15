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

/* garage/_delete_form.html.twig */
class __TwigTemplate_ef95a7aa3bb8ea19d9ffdb5d000d878122598ae9e1cfde3f04fe8e0be4d2164b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "garage/_delete_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "garage/_delete_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("garage_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["garage"]) || array_key_exists("garage", $context) ? $context["garage"] : (function () { throw new RuntimeError('Variable "garage" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["garage"]) || array_key_exists("garage", $context) ? $context["garage"] : (function () { throw new RuntimeError('Variable "garage" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3))), "html", null, true);
        echo "\">
    <button class=\"btn\">Delete</button>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "garage/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ path('garage_delete', {'id': garage.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ garage.id) }}\">
    <button class=\"btn\">Delete</button>
</form>
", "garage/_delete_form.html.twig", "/Applications/MAMP/htdocs/SYMPHONY/myBC/myBC/templates/garage/_delete_form.html.twig");
    }
}
