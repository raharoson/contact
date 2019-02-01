<?php

/* user/login.html.twig */
class __TwigTemplate_b88bbe3148d92b443fcee2fb2947fb5bba56940a56caf51fe75770df636920f2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/login.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "
    ";
        // line 5
        if (($context["failed"] ?? null)) {
            // line 6
            echo "    <div class=\"alert alert-danger\">Identifiant ou mot de passe incorrect!</div>';
    ";
        }
        // line 8
        echo "
    <div class=\"card\">
        <div class=\"card-header\">Authentification</div>
        <div class=\"card-body\">
            <form id=\"myform\" method=\"post\">
                <div class='form-group'>
                    <label>Utilisateur</label>
                    <input type=\"text\" class=\"form-control\" name=\"username\" required>
                </div>
                <div class='form-group'>
                    <label>Mot de passe</label>
                    <input type=\"password\" class=\"form-control\" name=\"password\" required>
                </div>
                <button class=\"btn btn-primary\">Connecter</button>
                <a href=\"index.php?p=user.add\" class=\"btn btn-primary\">Nouvel utilisateur</a>
            </form>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  40 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}

    {% if failed %}
    <div class=\"alert alert-danger\">Identifiant ou mot de passe incorrect!</div>';
    {% endif %}

    <div class=\"card\">
        <div class=\"card-header\">Authentification</div>
        <div class=\"card-body\">
            <form id=\"myform\" method=\"post\">
                <div class='form-group'>
                    <label>Utilisateur</label>
                    <input type=\"text\" class=\"form-control\" name=\"username\" required>
                </div>
                <div class='form-group'>
                    <label>Mot de passe</label>
                    <input type=\"password\" class=\"form-control\" name=\"password\" required>
                </div>
                <button class=\"btn btn-primary\">Connecter</button>
                <a href=\"index.php?p=user.add\" class=\"btn btn-primary\">Nouvel utilisateur</a>
            </form>
        </div>
    </div>

{% endblock %}", "user/login.html.twig", "/home/raharoson/PROJET/php/poo.com/app/Views/user/login.html.twig");
    }
}
