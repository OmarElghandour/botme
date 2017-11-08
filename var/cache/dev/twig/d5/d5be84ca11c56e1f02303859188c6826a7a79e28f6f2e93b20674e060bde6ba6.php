<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d61834c23b8376641fc47eeef8d91c46ac21e21466b45cb0c07eafba0f78d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d61834c23b8376641fc47eeef8d91c46ac21e21466b45cb0c07eafba0f78d63->enter($__internal_3d61834c23b8376641fc47eeef8d91c46ac21e21466b45cb0c07eafba0f78d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_35b2fcf1f1f02b212f3f8bc7a8c61aa4b62c47a47b4405609e1d80f51ce3b621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b2fcf1f1f02b212f3f8bc7a8c61aa4b62c47a47b4405609e1d80f51ce3b621->enter($__internal_35b2fcf1f1f02b212f3f8bc7a8c61aa4b62c47a47b4405609e1d80f51ce3b621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d61834c23b8376641fc47eeef8d91c46ac21e21466b45cb0c07eafba0f78d63->leave($__internal_3d61834c23b8376641fc47eeef8d91c46ac21e21466b45cb0c07eafba0f78d63_prof);

        
        $__internal_35b2fcf1f1f02b212f3f8bc7a8c61aa4b62c47a47b4405609e1d80f51ce3b621->leave($__internal_35b2fcf1f1f02b212f3f8bc7a8c61aa4b62c47a47b4405609e1d80f51ce3b621_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b91be8bafb2611b964d8788a1fa3f12ac64b3d99f2ec10b80c5a2755db3cacb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91be8bafb2611b964d8788a1fa3f12ac64b3d99f2ec10b80c5a2755db3cacb0->enter($__internal_b91be8bafb2611b964d8788a1fa3f12ac64b3d99f2ec10b80c5a2755db3cacb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7ae35e4ea906beed2cdebf503df73d7b2074979f07d795877d54a88be2ffe1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae35e4ea906beed2cdebf503df73d7b2074979f07d795877d54a88be2ffe1a3->enter($__internal_7ae35e4ea906beed2cdebf503df73d7b2074979f07d795877d54a88be2ffe1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7ae35e4ea906beed2cdebf503df73d7b2074979f07d795877d54a88be2ffe1a3->leave($__internal_7ae35e4ea906beed2cdebf503df73d7b2074979f07d795877d54a88be2ffe1a3_prof);

        
        $__internal_b91be8bafb2611b964d8788a1fa3f12ac64b3d99f2ec10b80c5a2755db3cacb0->leave($__internal_b91be8bafb2611b964d8788a1fa3f12ac64b3d99f2ec10b80c5a2755db3cacb0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6cda4742ab1230b7e2b5f17637d2bb9e1b47c09789e4134568aded5506f2505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6cda4742ab1230b7e2b5f17637d2bb9e1b47c09789e4134568aded5506f2505->enter($__internal_c6cda4742ab1230b7e2b5f17637d2bb9e1b47c09789e4134568aded5506f2505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5f2cfb28ec7ea8a5b3b405aa1d935e824e55811ade53a725a06a5e890ba8397d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2cfb28ec7ea8a5b3b405aa1d935e824e55811ade53a725a06a5e890ba8397d->enter($__internal_5f2cfb28ec7ea8a5b3b405aa1d935e824e55811ade53a725a06a5e890ba8397d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5f2cfb28ec7ea8a5b3b405aa1d935e824e55811ade53a725a06a5e890ba8397d->leave($__internal_5f2cfb28ec7ea8a5b3b405aa1d935e824e55811ade53a725a06a5e890ba8397d_prof);

        
        $__internal_c6cda4742ab1230b7e2b5f17637d2bb9e1b47c09789e4134568aded5506f2505->leave($__internal_c6cda4742ab1230b7e2b5f17637d2bb9e1b47c09789e4134568aded5506f2505_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0f2426659b4eda2c6ba67d084d453322f4b7a278d9f7286b8acf19ed0988967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f2426659b4eda2c6ba67d084d453322f4b7a278d9f7286b8acf19ed0988967->enter($__internal_b0f2426659b4eda2c6ba67d084d453322f4b7a278d9f7286b8acf19ed0988967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_681c34fa9d9382e0d8531cd10368b3a82501007a8ca48e4f4c103ae372e0c31c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681c34fa9d9382e0d8531cd10368b3a82501007a8ca48e4f4c103ae372e0c31c->enter($__internal_681c34fa9d9382e0d8531cd10368b3a82501007a8ca48e4f4c103ae372e0c31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_681c34fa9d9382e0d8531cd10368b3a82501007a8ca48e4f4c103ae372e0c31c->leave($__internal_681c34fa9d9382e0d8531cd10368b3a82501007a8ca48e4f4c103ae372e0c31c_prof);

        
        $__internal_b0f2426659b4eda2c6ba67d084d453322f4b7a278d9f7286b8acf19ed0988967->leave($__internal_b0f2426659b4eda2c6ba67d084d453322f4b7a278d9f7286b8acf19ed0988967_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/soliman/Projects/Botme/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
