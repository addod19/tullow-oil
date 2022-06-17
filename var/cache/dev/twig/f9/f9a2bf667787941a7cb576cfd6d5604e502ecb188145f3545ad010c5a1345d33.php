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

/* home/intro.html.twig */
class __TwigTemplate_74b22ce2455ef11a9c5884acf8984814d5785b03537fc21734c5ce86e0b2df4d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/intro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/intro.html.twig"));

        // line 1
        echo "<img class=\"img-fluid\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["cover"]) || array_key_exists("cover", $context) ? $context["cover"] : (function () { throw new RuntimeError('Variable "cover" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\"/>
<div class=\"col-12 p-3 p-md-5 text-center\">
    <h1>
        <a href=\"/\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</a>
    </h1>
    <figure>
        <blockquote class=\"blockquote\">
            <h3>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h3>
        </blockquote>
    </figure>
    <figcaption class=\"blockquote-footer\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["figcaption"]) || array_key_exists("figcaption", $context) ? $context["figcaption"] : (function () { throw new RuntimeError('Variable "figcaption" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</figcaption>
    <p>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</p>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  65 => 11,  59 => 8,  52 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<img class=\"img-fluid\" src=\"{{ cover }}\" alt=\"{{ title }}\"/>
<div class=\"col-12 p-3 p-md-5 text-center\">
    <h1>
        <a href=\"/\">{{ title }}</a>
    </h1>
    <figure>
        <blockquote class=\"blockquote\">
            <h3>{{ description }}</h3>
        </blockquote>
    </figure>
    <figcaption class=\"blockquote-footer\">{{ figcaption }}</figcaption>
    <p>{{ content }}</p>
</div>", "home/intro.html.twig", "/home/addo/project1/templates/home/intro.html.twig");
    }
}
