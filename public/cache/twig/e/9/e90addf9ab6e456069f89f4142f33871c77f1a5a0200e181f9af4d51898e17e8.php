<?php

/* class.twig */
class __TwigTemplate_e90addf9ab6e456069f89f4142f33871c77f1a5a0200e181f9af4d51898e17e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.twig", "class.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_class' => array($this, 'block_body_class'),
            'page_id' => array($this, 'block_page_id'),
            'below_menu' => array($this, 'block_below_menu'),
            'page_content' => array($this, 'block_page_content'),
            'class_signature' => array($this, 'block_class_signature'),
            'method_signature' => array($this, 'block_method_signature'),
            'method_parameters_signature' => array($this, 'block_method_parameters_signature'),
            'parameters' => array($this, 'block_parameters'),
            'return' => array($this, 'block_return'),
            'exceptions' => array($this, 'block_exceptions'),
            'see' => array($this, 'block_see'),
            'constants' => array($this, 'block_constants'),
            'properties' => array($this, 'block_properties'),
            'methods' => array($this, 'block_methods'),
            'methods_details' => array($this, 'block_methods_details'),
            'method' => array($this, 'block_method'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["__internal_1a3443f0beaa291535ec8cba0458fb5af863e4295c9c9f3860033773299912b4"] = $this->loadTemplate("macros.twig", "class.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "name", array()), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body_class($context, array $blocks = array())
    {
        echo "class";
    }

    // line 5
    public function block_page_id($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("class:" . strtr($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "name", array()), array("\\" => "_"))), "html", null, true);
    }

    // line 7
    public function block_below_menu($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "namespace", array())) {
            // line 9
            echo "        <div class=\"namespace-breadcrumbs\">
            <ol class=\"breadcrumb\">
                <li><span class=\"label label-default\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "categoryName", array()), "html", null, true);
            echo "</span></li>
                ";
            // line 12
            echo $context["__internal_1a3443f0beaa291535ec8cba0458fb5af863e4295c9c9f3860033773299912b4"]->getbreadcrumbs($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "namespace", array()));
            echo "
                <li>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortname", array()), "html", null, true);
            echo "</li>
            </ol>
        </div>
    ";
        }
    }

    // line 19
    public function block_page_content($context, array $blocks = array())
    {
        // line 20
        echo "
    <div class=\"page-header\">
        <h1>";
        // line 22
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "name", array()), "\\")), "html", null, true);
        echo "</h1>
    </div>

    <p>";
        // line 25
        $this->displayBlock("class_signature", $context, $blocks);
        echo "</p>

    ";
        // line 27
        if (($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortdesc", array()) || $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "longdesc", array()))) {
            // line 28
            echo "        <div class=\"description\">
            ";
            // line 29
            if ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortdesc", array())) {
                // line 30
                echo "<p>";
                echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                echo "</p>";
            }
            // line 32
            echo "            ";
            if ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "longdesc", array())) {
                // line 33
                echo "<p>";
                echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "longdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                echo "</p>";
            }
            // line 35
            echo "        </div>
    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((isset($context["traits"]) ? $context["traits"] : $this->getContext($context, "traits"))) {
            // line 39
            echo "        <h2>Traits</h2>

        ";
            // line 41
            echo $context["__internal_1a3443f0beaa291535ec8cba0458fb5af863e4295c9c9f3860033773299912b4"]->getrender_classes((isset($context["traits"]) ? $context["traits"] : $this->getContext($context, "traits")));
            echo "
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if ((isset($context["constants"]) ? $context["constants"] : $this->getContext($context, "constants"))) {
            // line 45
            echo "        <h2>Constants</h2>

        ";
            // line 47
            $this->displayBlock("constants", $context, $blocks);
            echo "
    ";
        }
        // line 49
        echo "
    ";
        // line 50
        if ((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties"))) {
            // line 51
            echo "        <h2>Properties</h2>

        ";
            // line 53
            $this->displayBlock("properties", $context, $blocks);
            echo "
    ";
        }
        // line 55
        echo "
    ";
        // line 56
        if ((isset($context["methods"]) ? $context["methods"] : $this->getContext($context, "methods"))) {
            // line 57
            echo "        <h2>Methods</h2>

        ";
            // line 59
            $this->displayBlock("methods", $context, $blocks);
            echo "

        <h2>Details</h2>

        ";
            // line 63
            $this->displayBlock("methods_details", $context, $blocks);
            echo "
    ";
        }
        // line 65
        echo "
";
    }

    // line 68
    public function block_class_signature($context, array $blocks = array())
    {
        // line 69
        if (( !$this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "interface", array()) && $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "abstract", array()))) {
            echo "abstract ";
        }
        // line 70
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "categoryName", array()), "html", null, true);
        echo "
    <strong>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortname", array()), "html", null, true);
        echo "</strong>";
        // line 72
        if ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "parent", array())) {
            // line 73
            echo "        extends ";
            echo $context["__internal_1a3443f0beaa291535ec8cba0458fb5af863e4295c9c9f3860033773299912b4"]->getclass_link($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "parent", array()));
        }
        // line 75
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "interfaces", array())) > 0)) {
            // line 76
            echo "        implements
        ";
            // line 77
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "interfaces", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["interface"]) {
                // line 78
                echo $context["__internal_1a3443f0beaa291535ec8cba0458fb5af863e4295c9c9f3860033773299912b4"]->getclass_link($context["interface"]);
                // line 79
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interface'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    // line 84
    public function block_method_signature($context, array $blocks = array())
    {
        // line 85
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "final", array())) {
            echo "final";
        }
        // line 86
        echo "    ";
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "abstract", array())) {
            echo "abstract";
        }
        // line 87
        echo "    ";
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "static", array())) {
            echo "static";
        }
        // line 88
        echo "    ";
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "protected", array())) {
            echo "protected";
        }
        // line 89
        echo "    ";
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "private", array())) {
            echo "private";
        }
        // line 90
        echo "    ";
        echo $context["__internal_1a3443f0beaa291535ec8cba0458fb5af863e4295c9c9f3860033773299912b4"]->gethint_link($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "hint", array()));
        echo "
    <strong>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "name", array()), "html", null, true);
        echo "</strong>";
        $this->displayBlock("method_parameters_signature", $context, $blocks);
    }

    // line 94
    public function block_method_parameters_signature($context, array $blocks = array())
    {
        // line 95
        $context["__internal_8adc9314d22d73675a7e09f0ea264611614ff3e3ba8257ab9c386a36bb7bf72c"] = $this->loadTemplate("macros.twig", "class.twig", 95);
        // line 96
        echo $context["__internal_8adc9314d22d73675a7e09f0ea264611614ff3e3ba8257ab9c386a36bb7bf72c"]->getmethod_parameters_signature((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
    }

    // line 99
    public function block_parameters($context, array $blocks = array())
    {
        // line 100
        echo "    <table class=\"table table-condensed\">
        ";
        // line 101
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "parameters", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parameter"]) {
            // line 102
            echo "            <tr>
                <td>";
            // line 103
            if ($this->getAttribute($context["parameter"], "hint", array())) {
                echo $context["__internal_1a3443f0beaa291535ec8cba0458fb5af863e4295c9c9f3860033773299912b4"]->gethint_link($this->getAttribute($context["parameter"], "hint", array()));
            }
            echo "</td>
                <td>\$";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["parameter"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 105
            echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["parameter"], "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "    </table>
";
    }

    // line 111
    public function block_return($context, array $blocks = array())
    {
        // line 112
        echo "    <table class=\"table table-condensed\">
        <tr>
            <td>";
        // line 114
        echo $context["__internal_1a3443f0beaa291535ec8cba0458fb5af863e4295c9c9f3860033773299912b4"]->gethint_link($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "hint", array()));
        echo "</td>
            <td>";
        // line 115
        echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "hintDesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
        echo "</td>
        </tr>
    </table>
";
    }

    // line 120
    public function block_exceptions($context, array $blocks = array())
    {
        // line 121
        echo "    <table class=\"table table-condensed\">
        ";
        // line 122
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "exceptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["exception"]) {
            // line 123
            echo "            <tr>
                <td>";
            // line 124
            echo $context["__internal_1a3443f0beaa291535ec8cba0458fb5af863e4295c9c9f3860033773299912b4"]->getclass_link($this->getAttribute($context["exception"], 0, array(), "array"));
            echo "</td>
                <td>";
            // line 125
            echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["exception"], 1, array(), "array"), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exception'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "    </table>
";
    }

    // line 131
    public function block_see($context, array $blocks = array())
    {
        // line 132
        echo "    <table class=\"table table-condensed\">
        ";
        // line 133
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "tags", array(0 => "see"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 134
            echo "            <tr>
                <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], 0, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 136
            echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, $context["tag"], 1, null), " "), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "    </table>
";
    }

    // line 142
    public function block_constants($context, array $blocks = array())
    {
        // line 143
        echo "    <table class=\"table table-condensed\">
        ";
        // line 144
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["constants"]) ? $context["constants"] : $this->getContext($context, "constants")));
        foreach ($context['_seq'] as $context["_key"] => $context["constant"]) {
            // line 145
            echo "            <tr>
                <td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["constant"], "name", array()), "html", null, true);
            echo "</td>
                <td class=\"last\">
                    <p><em>";
            // line 148
            echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["constant"], "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
            echo "</em></p>
                    <p>";
            // line 149
            echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["constant"], "longdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
            echo "</p>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "    </table>
";
    }

    // line 156
    public function block_properties($context, array $blocks = array())
    {
        // line 157
        echo "    <table class=\"table table-condensed\">
        ";
        // line 158
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 159
            echo "            <tr>
                <td class=\"type\" id=\"property_";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "name", array()), "html", null, true);
            echo "\">
                    ";
            // line 161
            if ($this->getAttribute($context["property"], "static", array())) {
                echo "static";
            }
            // line 162
            echo "                    ";
            if ($this->getAttribute($context["property"], "protected", array())) {
                echo "protected";
            }
            // line 163
            echo "                    ";
            if ($this->getAttribute($context["property"], "private", array())) {
                echo "private";
            }
            // line 164
            echo "                    ";
            echo $context["__internal_1a3443f0beaa291535ec8cba0458fb5af863e4295c9c9f3860033773299912b4"]->gethint_link($this->getAttribute($context["property"], "hint", array()));
            echo "
                </td>
                <td>\$";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "name", array()), "html", null, true);
            echo "</td>
                <td class=\"last\">";
            // line 167
            echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["property"], "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
            echo "</td>
                <td>";
            // line 169
            if ( !($this->getAttribute($context["property"], "class", array()) === (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) {
                // line 170
                echo "<small>from&nbsp;";
                echo $context["__internal_1a3443f0beaa291535ec8cba0458fb5af863e4295c9c9f3860033773299912b4"]->getproperty_link($context["property"], false, true);
                echo "</small>";
            }
            // line 172
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "    </table>
";
    }

    // line 178
    public function block_methods($context, array $blocks = array())
    {
        // line 179
        echo "    <div class=\"container-fluid underlined\">
        ";
        // line 180
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["methods"]) ? $context["methods"] : $this->getContext($context, "methods")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 181
            echo "            <div class=\"row\">
                <div class=\"col-md-2 type\">
                    ";
            // line 183
            if ($this->getAttribute($context["method"], "static", array())) {
                echo "static&nbsp;";
            }
            echo $context["__internal_1a3443f0beaa291535ec8cba0458fb5af863e4295c9c9f3860033773299912b4"]->gethint_link($this->getAttribute($context["method"], "hint", array()));
            echo "
                </div>
                <div class=\"col-md-8 type\">
                    <a href=\"#method_";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "name", array()), "html", null, true);
            echo "</a>";
            $this->displayBlock("method_parameters_signature", $context, $blocks);
            echo "
                    ";
            // line 187
            if ( !$this->getAttribute($context["method"], "shortdesc", array())) {
                // line 188
                echo "                        <p class=\"no-description\">No description</p>
                    ";
            } else {
                // line 190
                echo "                        <p>";
                echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["method"], "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                echo "</p>";
            }
            // line 192
            echo "                </div>
                <div class=\"col-md-2\">";
            // line 194
            if ( !($this->getAttribute($context["method"], "class", array()) === (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) {
                // line 195
                echo "<small>from&nbsp;";
                echo $context["__internal_1a3443f0beaa291535ec8cba0458fb5af863e4295c9c9f3860033773299912b4"]->getmethod_link($context["method"], false, true);
                echo "</small>";
            }
            // line 197
            echo "</div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "    </div>
";
    }

    // line 203
    public function block_methods_details($context, array $blocks = array())
    {
        // line 204
        echo "    <div id=\"method-details\">
        ";
        // line 205
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["methods"]) ? $context["methods"] : $this->getContext($context, "methods")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 206
            echo "            <div class=\"method-item\">
                ";
            // line 207
            $this->displayBlock("method", $context, $blocks);
            echo "
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "    </div>
";
    }

    // line 213
    public function block_method($context, array $blocks = array())
    {
        // line 214
        echo "    <h3 id=\"method_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "name", array()), "html", null, true);
        echo "\">
        <div class=\"location\">";
        // line 215
        if ( !($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "class", array()) === (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) {
            echo "in ";
            echo $context["__internal_1a3443f0beaa291535ec8cba0458fb5af863e4295c9c9f3860033773299912b4"]->getmethod_link((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), false, true);
            echo " ";
        }
        echo "at line ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "line", array()), "html", null, true);
        echo "</div>
        <code>";
        // line 216
        $this->displayBlock("method_signature", $context, $blocks);
        echo "</code>
    </h3>
    <div class=\"details\">
        ";
        // line 219
        if (($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "shortdesc", array()) || $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "longdesc", array()))) {
            // line 220
            echo "            <div class=\"method-description\">
                ";
            // line 221
            if (( !$this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "shortdesc", array()) &&  !$this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "longdesc", array()))) {
                // line 222
                echo "                    <p class=\"no-description\">No description</p>
                ";
            } else {
                // line 224
                echo "                    ";
                if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "shortdesc", array())) {
                    // line 225
                    echo "<p>";
                    echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "shortdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                    echo "</p>";
                }
                // line 227
                echo "                    ";
                if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "longdesc", array())) {
                    // line 228
                    echo "<p>";
                    echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "longdesc", array()), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")));
                    echo "</p>";
                }
            }
            // line 231
            echo "            </div>
        ";
        }
        // line 233
        echo "        <div class=\"tags\">
            ";
        // line 234
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "parameters", array())) {
            // line 235
            echo "                <h4>Parameters</h4>

                ";
            // line 237
            $this->displayBlock("parameters", $context, $blocks);
            echo "
            ";
        }
        // line 239
        echo "
            ";
        // line 240
        if (($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "hintDesc", array()) || $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "hint", array()))) {
            // line 241
            echo "                <h4>Return Value</h4>

                ";
            // line 243
            $this->displayBlock("return", $context, $blocks);
            echo "
            ";
        }
        // line 245
        echo "
            ";
        // line 246
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "exceptions", array())) {
            // line 247
            echo "                <h4>Exceptions</h4>

                ";
            // line 249
            $this->displayBlock("exceptions", $context, $blocks);
            echo "
            ";
        }
        // line 251
        echo "
            ";
        // line 252
        if ($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "tags", array(0 => "see"), "method")) {
            // line 253
            echo "                <h4>See also</h4>

                ";
            // line 255
            $this->displayBlock("see", $context, $blocks);
            echo "
            ";
        }
        // line 257
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "class.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  781 => 257,  776 => 255,  772 => 253,  770 => 252,  767 => 251,  762 => 249,  758 => 247,  756 => 246,  753 => 245,  748 => 243,  744 => 241,  742 => 240,  739 => 239,  734 => 237,  730 => 235,  728 => 234,  725 => 233,  721 => 231,  715 => 228,  712 => 227,  707 => 225,  704 => 224,  700 => 222,  698 => 221,  695 => 220,  693 => 219,  687 => 216,  677 => 215,  672 => 214,  669 => 213,  664 => 210,  647 => 207,  644 => 206,  627 => 205,  624 => 204,  621 => 203,  616 => 200,  600 => 197,  595 => 195,  593 => 194,  590 => 192,  585 => 190,  581 => 188,  579 => 187,  571 => 186,  562 => 183,  558 => 181,  541 => 180,  538 => 179,  535 => 178,  530 => 175,  522 => 172,  517 => 170,  515 => 169,  511 => 167,  507 => 166,  501 => 164,  496 => 163,  491 => 162,  487 => 161,  483 => 160,  480 => 159,  476 => 158,  473 => 157,  470 => 156,  465 => 153,  455 => 149,  451 => 148,  446 => 146,  443 => 145,  439 => 144,  436 => 143,  433 => 142,  428 => 139,  419 => 136,  415 => 135,  412 => 134,  408 => 133,  405 => 132,  402 => 131,  397 => 128,  388 => 125,  384 => 124,  381 => 123,  377 => 122,  374 => 121,  371 => 120,  363 => 115,  359 => 114,  355 => 112,  352 => 111,  347 => 108,  338 => 105,  334 => 104,  328 => 103,  325 => 102,  321 => 101,  318 => 100,  315 => 99,  311 => 96,  309 => 95,  306 => 94,  300 => 91,  295 => 90,  290 => 89,  285 => 88,  280 => 87,  275 => 86,  271 => 85,  268 => 84,  249 => 79,  247 => 78,  230 => 77,  227 => 76,  225 => 75,  221 => 73,  219 => 72,  216 => 71,  211 => 70,  207 => 69,  204 => 68,  199 => 65,  194 => 63,  187 => 59,  183 => 57,  181 => 56,  178 => 55,  173 => 53,  169 => 51,  167 => 50,  164 => 49,  159 => 47,  155 => 45,  153 => 44,  150 => 43,  145 => 41,  141 => 39,  139 => 38,  136 => 37,  132 => 35,  127 => 33,  124 => 32,  119 => 30,  117 => 29,  114 => 28,  112 => 27,  107 => 25,  101 => 22,  97 => 20,  94 => 19,  85 => 13,  81 => 12,  77 => 11,  73 => 9,  70 => 8,  67 => 7,  61 => 5,  55 => 4,  47 => 3,  43 => 1,  41 => 2,  11 => 1,);
    }
}
