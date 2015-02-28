<?php

/* macros.twig */
class __TwigTemplate_02bacc02d5de52e4ca5844c6e2295fec6b1734e4bfb7b30749744cf611c58a30 extends Twig_Template
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
        // line 4
        echo "
";
        // line 14
        echo "
";
        // line 20
        echo "
";
        // line 26
        echo "
";
        // line 40
        echo "
";
        // line 44
        echo "
";
        // line 56
        echo "
";
        // line 75
        echo "
";
    }

    // line 1
    public function getnamespace_link($__namespace__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "namespace" => $__namespace__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForNamespace($context, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), "html", null, true);
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 5
    public function getclass_link($__class__ = null, $__absolute__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "class" => $__class__,
            "absolute" => $__absolute__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            if ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "projectclass", array())) {
                // line 7
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForClass($context, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))), "html", null, true);
                echo "\">";
            } elseif ($this->getAttribute(            // line 8
(isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "phpclass", array())) {
                // line 9
                echo "<a href=\"http://php.net/";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\">";
            }
            // line 11
            echo $this->getAttribute($this, "abbr_class", array(0 => (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), 1 => ((array_key_exists("absolute", $context)) ? (_twig_default_filter((isset($context["absolute"]) ? $context["absolute"] : $this->getContext($context, "absolute")), false)) : (false))), "method");
            // line 12
            if (($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "projectclass", array()) || $this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "phpclass", array()))) {
                echo "</a>";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getmethod_link($__method__ = null, $__absolute__ = null, $__classonly__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $__method__,
            "absolute" => $__absolute__,
            "classonly" => $__classonly__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForMethod($context, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"))), "html", null, true);
            echo "\">";
            // line 17
            echo $this->getAttribute($this, "abbr_class", array(0 => $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "class", array())), "method");
            if ( !((array_key_exists("classonly", $context)) ? (_twig_default_filter((isset($context["classonly"]) ? $context["classonly"] : $this->getContext($context, "classonly")), false)) : (false))) {
                echo "::";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "name", array()), "html", null, true);
            }
            // line 18
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function getproperty_link($__property__ = null, $__absolute__ = null, $__classonly__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "property" => $__property__,
            "absolute" => $__absolute__,
            "classonly" => $__classonly__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForProperty($context, (isset($context["property"]) ? $context["property"] : $this->getContext($context, "property"))), "html", null, true);
            echo "\">";
            // line 23
            echo $this->getAttribute($this, "abbr_class", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "class", array())), "method");
            if ( !((array_key_exists("classonly", $context)) ? (_twig_default_filter((isset($context["classonly"]) ? $context["classonly"] : $this->getContext($context, "classonly")), true)) : (true))) {
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "name", array()), "html", null, true);
            }
            // line 24
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 27
    public function gethint_link($__hints__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "hints" => $__hints__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 28
            if ((isset($context["hints"]) ? $context["hints"] : $this->getContext($context, "hints"))) {
                // line 29
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["hints"]) ? $context["hints"] : $this->getContext($context, "hints")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["hint"]) {
                    // line 30
                    if ($this->getAttribute($context["hint"], "class", array())) {
                        // line 31
                        echo $this->getAttribute($this, "class_link", array(0 => $this->getAttribute($context["hint"], "name", array())), "method");
                    } elseif ($this->getAttribute(                    // line 32
$context["hint"], "name", array())) {
                        // line 33
                        echo $this->env->getExtension('sami')->abbrClass($this->getAttribute($context["hint"], "name", array()));
                    }
                    // line 35
                    if ($this->getAttribute($context["hint"], "array", array())) {
                        echo "[]";
                    }
                    // line 36
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo "|";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hint'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 41
    public function getabbr_class($__class__ = null, $__absolute__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "class" => $__class__,
            "absolute" => $__absolute__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 42
            echo "<abbr title=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((array_key_exists("absolute", $context)) ? (_twig_default_filter((isset($context["absolute"]) ? $context["absolute"] : $this->getContext($context, "absolute")), false)) : (false))) ? ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) : ($this->getAttribute((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "shortname", array()))), "html", null, true);
            echo "</abbr>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 45
    public function getmethod_parameters_signature($__method__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $__method__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 46
            $context["__internal_ed036ce5eabbd9de828b3834397bb141d561611042532ac5afcc7d04f0d1001b"] = $this->loadTemplate("macros.twig", "macros.twig", 46);
            // line 47
            echo "(";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "parameters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["parameter"]) {
                // line 49
                if ($this->getAttribute($context["parameter"], "hashint", array())) {
                    echo $context["__internal_ed036ce5eabbd9de828b3834397bb141d561611042532ac5afcc7d04f0d1001b"]->gethint_link($this->getAttribute($context["parameter"], "hint", array()));
                    echo " ";
                }
                // line 50
                echo "\$";
                echo twig_escape_filter($this->env, $this->getAttribute($context["parameter"], "name", array()), "html", null, true);
                // line 51
                if ($this->getAttribute($context["parameter"], "default", array())) {
                    echo " = ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["parameter"], "default", array()), "html", null, true);
                }
                // line 52
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo ")";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 57
    public function getrender_classes($__classes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "classes" => $__classes__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 58
            echo "<div class=\"container-fluid underlined\">
        ";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
            foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                // line 60
                echo "            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
                // line 62
                if ($this->getAttribute($context["class"], "isInterface", array())) {
                    // line 63
                    echo "                        <em>";
                    echo $this->getAttribute($this, "class_link", array(0 => $context["class"], 1 => true), "method");
                    echo "</em>
                    ";
                } else {
                    // line 65
                    echo "                        ";
                    echo $this->getAttribute($this, "class_link", array(0 => $context["class"], 1 => true), "method");
                    echo "
                    ";
                }
                // line 67
                echo "                </div>
                <div class=\"col-md-6\">
                    ";
                // line 69
                echo $this->env->getExtension('sami')->parseDesc($context, $this->getAttribute($context["class"], "shortdesc", array()), $context["class"]);
                echo "
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "    </div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 76
    public function getbreadcrumbs($__namespace__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "namespace" => $__namespace__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 77
            echo "    ";
            $context["current_ns"] = "";
            // line 78
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : $this->getContext($context, "namespace")), "\\"));
            foreach ($context['_seq'] as $context["_key"] => $context["ns"]) {
                // line 79
                echo "        ";
                if ((isset($context["current_ns"]) ? $context["current_ns"] : $this->getContext($context, "current_ns"))) {
                    // line 80
                    echo "            ";
                    $context["current_ns"] = (((isset($context["current_ns"]) ? $context["current_ns"] : $this->getContext($context, "current_ns")) . "\\") . $context["ns"]);
                    // line 81
                    echo "        ";
                } else {
                    // line 82
                    echo "            ";
                    $context["current_ns"] = $context["ns"];
                    // line 83
                    echo "        ";
                }
                // line 84
                echo "        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('sami')->pathForNamespace($context, (isset($context["current_ns"]) ? $context["current_ns"] : $this->getContext($context, "current_ns"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["ns"], "html", null, true);
                echo "</a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ns'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 84,  439 => 83,  436 => 82,  433 => 81,  430 => 80,  427 => 79,  422 => 78,  419 => 77,  408 => 76,  397 => 73,  387 => 69,  383 => 67,  377 => 65,  371 => 63,  369 => 62,  365 => 60,  361 => 59,  358 => 58,  347 => 57,  336 => 54,  320 => 52,  315 => 51,  312 => 50,  307 => 49,  290 => 48,  288 => 47,  286 => 46,  275 => 45,  260 => 42,  248 => 41,  222 => 36,  218 => 35,  215 => 33,  213 => 32,  211 => 31,  209 => 30,  192 => 29,  190 => 28,  179 => 27,  168 => 24,  162 => 23,  158 => 22,  145 => 21,  134 => 18,  128 => 17,  124 => 16,  111 => 15,  98 => 12,  96 => 11,  91 => 9,  89 => 8,  85 => 7,  83 => 6,  71 => 5,  56 => 2,  45 => 1,  40 => 75,  37 => 56,  34 => 44,  31 => 40,  28 => 26,  25 => 20,  22 => 14,  19 => 4,);
    }
}
