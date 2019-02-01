<?php

/* contact/create.html.twig */
class __TwigTemplate_ca72f9d291edd955e6f06622a79b5217b31bc22560272cb13e15be84f60cca41 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "contact/create.html.twig", 1);
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
                <div class=\"col-sm-8\"><h2>Nouveau contact</h2></div>
            </div>
            <div class=\"card-body\">
                <form id=\"form-create-contact\" method=\"post\" action=\"index.php?p=contact.create\">
                    <div class='form-group'>
                        <label>Nom</label>
                        <input type=\"text\" class=\"form-control\" id=\"contact_nom\" name=\"nom\" required>
                    </div>
                    <div class='form-group'>
                        <label>Prénom</label>
                        <input type=\"text\" class=\"form-control\" id=\"contact_prenom\" name=\"prenom\" required>
                    </div>
                    <div class='form-group'>
                        <label>Email</label>
                        <div class=\"row\">
                            <div class=\"col-sm-8\">
                                <input type=\"text\" class=\"form-control\" id=\"contact_email\" name=\"email\" required>
                            </div>
                            <div class=\"col-sm-4\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"btn-check-email\">Vérifier email</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-8\"></div>
                        <div class=\"col-sm-4\">
                            <a href=\"index.php?p=contact.list\" class=\"btn btn-info add-new\"><i class=\"fa fa-plus\"></i>Annuler</a>
                            <a href=\"#\" class=\"btn btn-info add-new\" id=\"btn-submit-form-contact\"><i class=\"fa fa-plus\"></i>Ajouter</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        \$(function(){
            //Verifier si l'email est valide
            \$(\"#btn-check-email\").on(\"click\", function(e){
                \$(\"#contact_email\").css('color', 'black');
                \$.ajax({
                    url: \"";
        // line 48
        echo twig_escape_filter($this->env, ($context["urlrest"] ?? null), "html", null, true);
        echo "\" + \"?email=\" + \$(\"#contact_email\").val(),
                    type: \"GET\",
                    success: function(data, textStatus, jqXHR){
                        if(data.code_status == 0){
                            alert(data.message);
                            \$(\"#contact_email\").css('color', 'red');
                        } else {
                            alert(data.message);
                        }
                    }
                });
                e.preventDefault();
            });

            //Verifier si le nom de contact est palindrome
            \$(\"#btn-submit-form-contact\").on(\"click\", function(e){
                \$.ajax({
                    url: \"index.php?p=contact.checkpalindrome\",
                    type: \"POST\",
                    data: {nom: \$(\"#contact_nom\").val()},
                    success: function(data, textStatus, jqXHR){
                        if(data.code_status == 0){
                            alert(data.message);
                            \$(\"#contact_nom\").css('color', 'red');
                            return false;
                        } else {
                            \$(\"#form-create-contact\").submit();
                        }
                    }
                });
                e.preventDefault();
            });

            //Soumettre la formulaire
            \$(\"#form-create-contact\").on(\"submit\", function(e){
                var postData = \$(this).serializeArray();
                var formUrl = \$(this).attr(\"action\");
                \$.ajax({
                    url: formUrl,
                    type: \"POST\",
                    data: postData,
                    success: function(data, textStatus, jqXHR){
                        window.location.href = \"index.php?p=contact.list\";
                    },
                    error: function(jqXHR, status, error) {
                        console.log(status + \": \" + error);
                    }
                });
                e.preventDefault();
            });

        })

        //Validation de la formulaire
        \$(\"#form-create-contact\").validate({
            rules: {
                contact_name : \"required\",
                contact_prenom: \"required\",
                contact_adresse: \"required\"
            }
        });
        
    </script>

";
    }

    public function getTemplateName()
    {
        return "contact/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 48,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"card card-wrapper\">
            <div class=\"card-header\">
                <div class=\"col-sm-8\"><h2>Nouveau contact</h2></div>
            </div>
            <div class=\"card-body\">
                <form id=\"form-create-contact\" method=\"post\" action=\"index.php?p=contact.create\">
                    <div class='form-group'>
                        <label>Nom</label>
                        <input type=\"text\" class=\"form-control\" id=\"contact_nom\" name=\"nom\" required>
                    </div>
                    <div class='form-group'>
                        <label>Prénom</label>
                        <input type=\"text\" class=\"form-control\" id=\"contact_prenom\" name=\"prenom\" required>
                    </div>
                    <div class='form-group'>
                        <label>Email</label>
                        <div class=\"row\">
                            <div class=\"col-sm-8\">
                                <input type=\"text\" class=\"form-control\" id=\"contact_email\" name=\"email\" required>
                            </div>
                            <div class=\"col-sm-4\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm\" id=\"btn-check-email\">Vérifier email</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-8\"></div>
                        <div class=\"col-sm-4\">
                            <a href=\"index.php?p=contact.list\" class=\"btn btn-info add-new\"><i class=\"fa fa-plus\"></i>Annuler</a>
                            <a href=\"#\" class=\"btn btn-info add-new\" id=\"btn-submit-form-contact\"><i class=\"fa fa-plus\"></i>Ajouter</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        \$(function(){
            //Verifier si l'email est valide
            \$(\"#btn-check-email\").on(\"click\", function(e){
                \$(\"#contact_email\").css('color', 'black');
                \$.ajax({
                    url: \"{{ urlrest }}\" + \"?email=\" + \$(\"#contact_email\").val(),
                    type: \"GET\",
                    success: function(data, textStatus, jqXHR){
                        if(data.code_status == 0){
                            alert(data.message);
                            \$(\"#contact_email\").css('color', 'red');
                        } else {
                            alert(data.message);
                        }
                    }
                });
                e.preventDefault();
            });

            //Verifier si le nom de contact est palindrome
            \$(\"#btn-submit-form-contact\").on(\"click\", function(e){
                \$.ajax({
                    url: \"index.php?p=contact.checkpalindrome\",
                    type: \"POST\",
                    data: {nom: \$(\"#contact_nom\").val()},
                    success: function(data, textStatus, jqXHR){
                        if(data.code_status == 0){
                            alert(data.message);
                            \$(\"#contact_nom\").css('color', 'red');
                            return false;
                        } else {
                            \$(\"#form-create-contact\").submit();
                        }
                    }
                });
                e.preventDefault();
            });

            //Soumettre la formulaire
            \$(\"#form-create-contact\").on(\"submit\", function(e){
                var postData = \$(this).serializeArray();
                var formUrl = \$(this).attr(\"action\");
                \$.ajax({
                    url: formUrl,
                    type: \"POST\",
                    data: postData,
                    success: function(data, textStatus, jqXHR){
                        window.location.href = \"index.php?p=contact.list\";
                    },
                    error: function(jqXHR, status, error) {
                        console.log(status + \": \" + error);
                    }
                });
                e.preventDefault();
            });

        })

        //Validation de la formulaire
        \$(\"#form-create-contact\").validate({
            rules: {
                contact_name : \"required\",
                contact_prenom: \"required\",
                contact_adresse: \"required\"
            }
        });
        
    </script>

{% endblock %}", "contact/create.html.twig", "/home/raharoson/PROJET/php/poo.com/app/Views/contact/create.html.twig");
    }
}
