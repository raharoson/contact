<?php

/* user/add.html.twig */
class __TwigTemplate_88fa31330f7af6761a4e5f149dab8e67ee7996634d90eb7331ea846273bac388 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/add.html.twig", 1);
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
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 5
            echo "        <div class=\"alert alert-success\">L'utilisateur a été ajouté</div>
    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if (($context["message"] ?? null)) {
            // line 9
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</div>
    ";
        }
        // line 11
        echo "    <div class=\"card\">
        <div class=\"card-header\">S'enregister</div>
        <div class=\"card-body\">
            <form id=\"myform\" method=\"post\">
                <div class='form-group'>
                    <label>Utilisateur</label>
                    <input type=\"text\" class=\"form-control\" name=\"username\" required>
                </div>
                <div class='form-group'>
                    <label>Mot de passe</label>
                    <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" required>
                </div>
                <div class='form-group'>
                    <label>Confirmer mot de passe</label>
                    <input id=\"confirm_password\" type=\"password\" class=\"form-control\" required>
                </div>
                <button class=\"btn btn-primary\">Enregistrer</button>
                <a href=\"index.php?p=user.login\" class=\"btn btn-primary\">Annuler</a>
            </form>
        </div>
    </div>
    <script>
        \$(\"#myform\").validate({
            rules: {
                password: \"required\",
                confirm_password: {
                    equalTo: \"#password\"
                }
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "user/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  47 => 9,  45 => 8,  42 => 7,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    {% if success %}
        <div class=\"alert alert-success\">L'utilisateur a été ajouté</div>
    {% endif %}

    {% if message %}
        <div class=\"alert alert-danger\">{{ message }}</div>
    {% endif %}
    <div class=\"card\">
        <div class=\"card-header\">S'enregister</div>
        <div class=\"card-body\">
            <form id=\"myform\" method=\"post\">
                <div class='form-group'>
                    <label>Utilisateur</label>
                    <input type=\"text\" class=\"form-control\" name=\"username\" required>
                </div>
                <div class='form-group'>
                    <label>Mot de passe</label>
                    <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" required>
                </div>
                <div class='form-group'>
                    <label>Confirmer mot de passe</label>
                    <input id=\"confirm_password\" type=\"password\" class=\"form-control\" required>
                </div>
                <button class=\"btn btn-primary\">Enregistrer</button>
                <a href=\"index.php?p=user.login\" class=\"btn btn-primary\">Annuler</a>
            </form>
        </div>
    </div>
    <script>
        \$(\"#myform\").validate({
            rules: {
                password: \"required\",
                confirm_password: {
                    equalTo: \"#password\"
                }
            }
        });
    </script>
{% endblock %}", "user/add.html.twig", "/home/raharoson/PROJET/php/poo.com/app/Views/user/add.html.twig");
    }
}
