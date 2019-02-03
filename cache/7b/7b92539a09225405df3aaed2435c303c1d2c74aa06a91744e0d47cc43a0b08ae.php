<?php

/* contact/list.html.twig */
class __TwigTemplate_54167ebb5aa63d2a83989a1c1f3da912ce16c1eb424c34cb20ec24071732b6e7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "contact/list.html.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"card card-wrapper\">
            <div class=\"card-header\">
                Liste des contacts
                <a href=\"index.php?p=contact.create\" class=\"btn btn-primary btn-sm btn-add-contact\">Créer</a>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Editer</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contacts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 22
            echo "                    <tr>
                        <td class=\"col-sm\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "nom", []), "html", null, true);
            echo "</td>
                        <td class=\"col-sm\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", []), "html", null, true);
            echo "</td>
                        <td class=\"col-sm\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", []), "html", null, true);
            echo "</td>
                        <td class=\"col-sm\"><a href=\"index.php?p=contact.edit&id=";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", []), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Editer</a></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "contact/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  73 => 26,  69 => 25,  65 => 24,  61 => 23,  58 => 22,  54 => 21,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"card card-wrapper\">
            <div class=\"card-header\">
                Liste des contacts
                <a href=\"index.php?p=contact.create\" class=\"btn btn-primary btn-sm btn-add-contact\">Créer</a>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Editer</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for contact in contacts %}
                    <tr>
                        <td class=\"col-sm\">{{ contact.nom }}</td>
                        <td class=\"col-sm\">{{ contact.prenom }}</td>
                        <td class=\"col-sm\">{{ contact.email }}</td>
                        <td class=\"col-sm\"><a href=\"index.php?p=contact.edit&id={{ contact.id }}\" class=\"btn btn-primary btn-sm\">Editer</a></td>
                    </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "contact/list.html.twig", "/home/raharoson/PROJET/php/poo.com/app/Views/contact/list.html.twig");
    }
}
