<?php

/* layout.html.twig */
class __TwigTemplate_6720b812943e6ec32356cbff913792606b2b48e3cb2133078a842458171f31e0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Contact</title>
    <!-- Bootstrap core CSS -->

    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">

    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/style.css\" rel=\"stylesheet\">

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"></script>
    <script src=\"js/tchat.js\"></script>
</head>
<body>


<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <a class=\"navbar-brand\" href=\"index.php?p=chat.index\">Gestion des contacts</a>
    </div>

    ";
        // line 31
        if (($context["userid"] ?? null)) {
            // line 32
            echo "        <span style=\"color: #FFFFFF; margin-right: 20px;\">Connecté en tant que: ";
            echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
            echo "</span>
        <a href=\"index.php?p=user.logout&username='";
            // line 33
            echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
            echo "'\" class=\"btn btn-primary\">Déconnexion</a>
    ";
        }
        // line 35
        echo "
</nav>



<main role=\"main\" class=\"container\">
    <div class=\"starter-template\" style=\"padding-top: 100px;\">
        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "    </div>
</main>



</body>
</html>
";
    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 42,  79 => 43,  77 => 42,  68 => 35,  63 => 33,  58 => 32,  56 => 31,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Contact</title>
    <!-- Bootstrap core CSS -->

    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">

    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/style.css\" rel=\"stylesheet\">

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\"></script>
    <script src=\"js/tchat.js\"></script>
</head>
<body>


<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <a class=\"navbar-brand\" href=\"index.php?p=chat.index\">Gestion des contacts</a>
    </div>

    {% if userid %}
        <span style=\"color: #FFFFFF; margin-right: 20px;\">Connecté en tant que: {{ username }}</span>
        <a href=\"index.php?p=user.logout&username='{{ username }}'\" class=\"btn btn-primary\">Déconnexion</a>
    {% endif %}

</nav>



<main role=\"main\" class=\"container\">
    <div class=\"starter-template\" style=\"padding-top: 100px;\">
        {% block body %}{% endblock %}
    </div>
</main>



</body>
</html>
", "layout.html.twig", "/home/raharoson/PROJET/php/poo.com/app/Views/layout.html.twig");
    }
}
