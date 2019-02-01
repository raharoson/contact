<?php

/* contact/edit.html.twig */
class __TwigTemplate_af5f32bc8ef87cad2cd36de73bae3b3dc9a789944e86705ce4d186d82c524c98 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "contact/edit.html.twig", 1);
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
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Editer contact
                        <a href=\"#\" class=\"btn btn-primary btn-sm btn-add-contact\" data-toggle=\"modal\" data-target=\"#myModal\">Nouvelle adresse</a>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\" action=\"index.php?p=contact.update\">
                            <div class='form-group'>
                                <label>Nom</label>
                                <input type=\"text\" class=\"form-control\" id=\"contact_nom\" name=\"nom\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "nom", []), "html", null, true);
        echo "\" required>
                            </div>
                            <div class='form-group'>
                                <label>Prénom</label>
                                <input type=\"text\" class=\"form-control\" id=\"contact_prenom\" name=\"prenom\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "prenom", []), "html", null, true);
        echo "\" required>
                            </div>
                            <div class='form-group'>
                                <label>Email</label>
                                <div class=\"row\">
                                    <div class=\"col-sm-8\">
                                        <input type=\"text\" class=\"form-control\" id=\"contact_email\" name=\"email\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "email", []), "html", null, true);
        echo "\" required>
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
                                    <button type=\"submit\" class=\"btn btn-info add-new\"><i class=\"fa fa-plus\"></i>Enregister</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-sm-4\">
                ";
        // line 45
        $context["i"] = 1;
        // line 46
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["adresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
            // line 47
            echo "                <div class=\"card bg-light mb-2\">
                    <div class=\"card-header bg-success text-white\">
                        Adresse ";
            // line 49
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-8\">
                                <p class=\"adresse\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "numrue", []), "html", null, true);
            echo "</p>
                                <p class=\"adresse\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "codepostal", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "ville", []), "html", null, true);
            echo "</p>
                                <p class=\"adresse\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "pays", []), "html", null, true);
            echo "</p>
                                <p class=\"adresse\">Tel. ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "telephone", []), "html", null, true);
            echo "</p>
                            </div>
                            <div class=\"col-sm-4\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#myModal";
            // line 60
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "\">Editer</a>

                                <!-- The Modal -->

                                <div class=\"modal\" id=\"myModal";
            // line 64
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">

                                            <!-- Modal Header -->
                                            <div class=\"modal-header\">
                                                <h4 class=\"modal-title\">Adresse ";
            // line 70
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "</h4>
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class=\"modal-body\">
                                                <form role=\"form\"  class=\"form-adresse\" id=\"form-adresse-";
            // line 76
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "\" method=\"POST\" action=\"index.php?p=adresse.update\" contactid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "contactid", []), "html", null, true);
            echo "\">
                                                    <input type=\"hidden\" class=\"form-control\" name=\"id\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "id", []), "html", null, true);
            echo "\">
                                                    <div class='form-group'>
                                                        <label>Adresse</label>
                                                        <input type=\"text\" class=\"form-control input-uppercase\" name=\"numrue\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "numrue", []), "html", null, true);
            echo "\" required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label>Code postal</label>
                                                        <input type=\"text\" class=\"form-control\" name=\"codepostal\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "codepostal", []), "html", null, true);
            echo "\" required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label>Ville</label>
                                                        <input type=\"text\" class=\"form-control input-uppercase\" name=\"ville\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "ville", []), "html", null, true);
            echo "\" required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label>Pays</label>
                                                        <input type=\"text\" class=\"form-control input-uppercase\" name=\"pays\" value=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "pays", []), "html", null, true);
            echo "\" required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label>Telephone</label>
                                                        <input type=\"text\" class=\"form-control\" name=\"telephone\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "telephone", []), "html", null, true);
            echo "\" required>
                                                    </div>
                                                </form>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-danger btn-sm\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"button\" class=\"btn btn-primary btn-sm btn-update-adresse\" data-dismiss=\"modal\" btn-adresse=\"";
            // line 104
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "\">Enregistrer</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 115
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 116
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "
                <div class=\"modal\" id=\"myModal\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">

                            <!-- Modal Header -->
                            <div class=\"modal-header\">
                                <h4 class=\"modal-title\">Nouvelle adresse</h4>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class=\"modal-body\">
                                <form role=\"form\" id=\"form-new-adresse\" method=\"POST\" action=\"index.php?p=adresse.create\">
                                    <input type=\"hidden\" class=\"form-control\" name=\"contactid\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", []), "html", null, true);
        echo "\">
                                    <div class='form-group'>
                                        <label>Adresse</label>
                                        <input type=\"text\" class=\"form-control input-uppercase\" name=\"numrue\" required>
                                    </div>
                                    <div class='form-group'>
                                        <label>Code postal</label>
                                        <input type=\"text\" class=\"form-control\" name=\"codepostal\" required>
                                    </div>
                                    <div class='form-group'>
                                        <label>Ville</label>
                                        <input type=\"text\" class=\"form-control input-uppercase\" name=\"ville\" required>
                                    </div>
                                    <div class='form-group'>
                                        <label>Pays</label>
                                        <input type=\"text\" class=\"form-control input-uppercase\" name=\"pays\" required>
                                    </div>
                                    <div class='form-group'>
                                        <label>Telephone</label>
                                        <input type=\"text\" class=\"form-control\" name=\"telephone\" required>
                                    </div>
                                </form>
                            </div>

                            <!-- Modal footer -->
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-danger btn-sm\" data-dismiss=\"modal\">Close</button>
                                <button id=\"btn-add-adresse\" type=\"button\" class=\"btn btn-primary btn-sm\" data-dismiss=\"modal\">Enregistrer</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        \$(function(){

            //Vérifier si l'email est valide
            \$(\"#btn-check-email\").on(\"click\", function(e){
                \$(\"#contact_email\").css('color', 'black');
                \$.ajax({
                    url: \"";
        // line 175
        echo twig_escape_filter($this->env, ($context["urlrest"] ?? null), "html", null, true);
        echo "\" + \"?email=\" + \$(\"#contact_email\").val(),
                    type: \"GET\",
                    success: function(data, textStatus, jqXHR){
                        if(data.code_status == 0){
                            alert(data.message);
                            \$(\"#contact_email\").css('color', 'red');
                            return false;
                        } else {
                            alert(data.message);
                        }
                    }
                });
                e.preventDefault();
            });

            //Modifier une adresse existante
            \$(\".form-adresse\").each(function(){
                \$(this).on(\"submit\", function(e){
                    var postData = \$(this).serializeArray();
                    var formUrl = \$(this).attr(\"action\");
                    \$.ajax({
                       url: formUrl,
                       type: \"POST\",
                       data: postData,
                       success: function(data, textStatus, jqXHR){
                           location.reload(false);
                       },
                       error: function(jqXHR, status, error) {
                           console.log(status + \": \" + error);
                       }
                    });
                    e.preventDefault();
                });
            });

            \$(\".btn-update-adresse\").each(function(){
                \$(this).on('click', function(){
                    //alert(\$(this).attr(\"btn-adresse\"));
                    \$(\"#form-adresse-\" + \$(this).attr(\"btn-adresse\")).submit();
                })
            });

            //Ajouter une nouvelle adresse
            \$(\"#form-new-adresse\").on(\"submit\", function(e){
                    var postData = \$(this).serializeArray();
                    var formUrl = \$(this).attr(\"action\");

                    \$.ajax({
                        url: formUrl,
                        type: \"POST\",
                        data: postData,
                        success: function(data, textStatus, jqXHR){
                            location.reload(false);
                        },
                        error: function(jqXHR, status, error) {
                            console.log(status + \": \" + error);
                        }
                    });
                    e.preventDefault();
                });


            \$(\"#btn-add-adresse\").on('click', function(){
                \$(\"#form-new-adresse\").submit();
            });


        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "contact/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 175,  240 => 131,  224 => 117,  218 => 116,  216 => 115,  202 => 104,  191 => 96,  184 => 92,  177 => 88,  170 => 84,  163 => 80,  157 => 77,  151 => 76,  142 => 70,  133 => 64,  126 => 60,  120 => 57,  116 => 56,  110 => 55,  106 => 54,  98 => 49,  94 => 47,  89 => 46,  87 => 45,  65 => 26,  56 => 20,  49 => 16,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Editer contact
                        <a href=\"#\" class=\"btn btn-primary btn-sm btn-add-contact\" data-toggle=\"modal\" data-target=\"#myModal\">Nouvelle adresse</a>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\" action=\"index.php?p=contact.update\">
                            <div class='form-group'>
                                <label>Nom</label>
                                <input type=\"text\" class=\"form-control\" id=\"contact_nom\" name=\"nom\" value=\"{{ contact.nom }}\" required>
                            </div>
                            <div class='form-group'>
                                <label>Prénom</label>
                                <input type=\"text\" class=\"form-control\" id=\"contact_prenom\" name=\"prenom\" value=\"{{ contact.prenom }}\" required>
                            </div>
                            <div class='form-group'>
                                <label>Email</label>
                                <div class=\"row\">
                                    <div class=\"col-sm-8\">
                                        <input type=\"text\" class=\"form-control\" id=\"contact_email\" name=\"email\" value=\"{{ contact.email }}\" required>
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
                                    <button type=\"submit\" class=\"btn btn-info add-new\"><i class=\"fa fa-plus\"></i>Enregister</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"col-12 col-sm-4\">
                {% set i=1 %}
                {% for adresse in adresses %}
                <div class=\"card bg-light mb-2\">
                    <div class=\"card-header bg-success text-white\">
                        Adresse {{ i }}
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-8\">
                                <p class=\"adresse\">{{ adresse.numrue }}</p>
                                <p class=\"adresse\">{{ adresse.codepostal }} {{ adresse.ville }}</p>
                                <p class=\"adresse\">{{ adresse.pays }}</p>
                                <p class=\"adresse\">Tel. {{ adresse.telephone }}</p>
                            </div>
                            <div class=\"col-sm-4\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#myModal{{ i }}\">Editer</a>

                                <!-- The Modal -->

                                <div class=\"modal\" id=\"myModal{{ i }}\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">

                                            <!-- Modal Header -->
                                            <div class=\"modal-header\">
                                                <h4 class=\"modal-title\">Adresse {{ i }}</h4>
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class=\"modal-body\">
                                                <form role=\"form\"  class=\"form-adresse\" id=\"form-adresse-{{ i }}\" method=\"POST\" action=\"index.php?p=adresse.update\" contactid=\"{{ adresse.contactid }}\">
                                                    <input type=\"hidden\" class=\"form-control\" name=\"id\" value=\"{{ adresse.id }}\">
                                                    <div class='form-group'>
                                                        <label>Adresse</label>
                                                        <input type=\"text\" class=\"form-control input-uppercase\" name=\"numrue\" value=\"{{ adresse.numrue }}\" required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label>Code postal</label>
                                                        <input type=\"text\" class=\"form-control\" name=\"codepostal\" value=\"{{ adresse.codepostal }}\" required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label>Ville</label>
                                                        <input type=\"text\" class=\"form-control input-uppercase\" name=\"ville\" value=\"{{ adresse.ville }}\" required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label>Pays</label>
                                                        <input type=\"text\" class=\"form-control input-uppercase\" name=\"pays\" value=\"{{ adresse.pays }}\" required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label>Telephone</label>
                                                        <input type=\"text\" class=\"form-control\" name=\"telephone\" value=\"{{ adresse.telephone }}\" required>
                                                    </div>
                                                </form>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-danger btn-sm\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"button\" class=\"btn btn-primary btn-sm btn-update-adresse\" data-dismiss=\"modal\" btn-adresse=\"{{ i }}\">Enregistrer</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {% set i = i + 1 %}
                {% endfor %}

                <div class=\"modal\" id=\"myModal\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">

                            <!-- Modal Header -->
                            <div class=\"modal-header\">
                                <h4 class=\"modal-title\">Nouvelle adresse</h4>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class=\"modal-body\">
                                <form role=\"form\" id=\"form-new-adresse\" method=\"POST\" action=\"index.php?p=adresse.create\">
                                    <input type=\"hidden\" class=\"form-control\" name=\"contactid\" value=\"{{ contact.id }}\">
                                    <div class='form-group'>
                                        <label>Adresse</label>
                                        <input type=\"text\" class=\"form-control input-uppercase\" name=\"numrue\" required>
                                    </div>
                                    <div class='form-group'>
                                        <label>Code postal</label>
                                        <input type=\"text\" class=\"form-control\" name=\"codepostal\" required>
                                    </div>
                                    <div class='form-group'>
                                        <label>Ville</label>
                                        <input type=\"text\" class=\"form-control input-uppercase\" name=\"ville\" required>
                                    </div>
                                    <div class='form-group'>
                                        <label>Pays</label>
                                        <input type=\"text\" class=\"form-control input-uppercase\" name=\"pays\" required>
                                    </div>
                                    <div class='form-group'>
                                        <label>Telephone</label>
                                        <input type=\"text\" class=\"form-control\" name=\"telephone\" required>
                                    </div>
                                </form>
                            </div>

                            <!-- Modal footer -->
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-danger btn-sm\" data-dismiss=\"modal\">Close</button>
                                <button id=\"btn-add-adresse\" type=\"button\" class=\"btn btn-primary btn-sm\" data-dismiss=\"modal\">Enregistrer</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        \$(function(){

            //Vérifier si l'email est valide
            \$(\"#btn-check-email\").on(\"click\", function(e){
                \$(\"#contact_email\").css('color', 'black');
                \$.ajax({
                    url: \"{{ urlrest }}\" + \"?email=\" + \$(\"#contact_email\").val(),
                    type: \"GET\",
                    success: function(data, textStatus, jqXHR){
                        if(data.code_status == 0){
                            alert(data.message);
                            \$(\"#contact_email\").css('color', 'red');
                            return false;
                        } else {
                            alert(data.message);
                        }
                    }
                });
                e.preventDefault();
            });

            //Modifier une adresse existante
            \$(\".form-adresse\").each(function(){
                \$(this).on(\"submit\", function(e){
                    var postData = \$(this).serializeArray();
                    var formUrl = \$(this).attr(\"action\");
                    \$.ajax({
                       url: formUrl,
                       type: \"POST\",
                       data: postData,
                       success: function(data, textStatus, jqXHR){
                           location.reload(false);
                       },
                       error: function(jqXHR, status, error) {
                           console.log(status + \": \" + error);
                       }
                    });
                    e.preventDefault();
                });
            });

            \$(\".btn-update-adresse\").each(function(){
                \$(this).on('click', function(){
                    //alert(\$(this).attr(\"btn-adresse\"));
                    \$(\"#form-adresse-\" + \$(this).attr(\"btn-adresse\")).submit();
                })
            });

            //Ajouter une nouvelle adresse
            \$(\"#form-new-adresse\").on(\"submit\", function(e){
                    var postData = \$(this).serializeArray();
                    var formUrl = \$(this).attr(\"action\");

                    \$.ajax({
                        url: formUrl,
                        type: \"POST\",
                        data: postData,
                        success: function(data, textStatus, jqXHR){
                            location.reload(false);
                        },
                        error: function(jqXHR, status, error) {
                            console.log(status + \": \" + error);
                        }
                    });
                    e.preventDefault();
                });


            \$(\"#btn-add-adresse\").on('click', function(){
                \$(\"#form-new-adresse\").submit();
            });


        })
    </script>
{% endblock %}", "contact/edit.html.twig", "/home/raharoson/PROJET/php/poo.com/app/Views/contact/edit.html.twig");
    }
}
