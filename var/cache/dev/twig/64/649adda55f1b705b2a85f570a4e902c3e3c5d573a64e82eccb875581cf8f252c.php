<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a28e4cc16d2558f9390ab2cb04bdd06d88cbba080087df2567c2523084aeb80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28e4cc16d2558f9390ab2cb04bdd06d88cbba080087df2567c2523084aeb80e->enter($__internal_a28e4cc16d2558f9390ab2cb04bdd06d88cbba080087df2567c2523084aeb80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_48b75666895330c4c7c382750850a728b0d03032c6495a03f898f84ea3baca52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b75666895330c4c7c382750850a728b0d03032c6495a03f898f84ea3baca52->enter($__internal_48b75666895330c4c7c382750850a728b0d03032c6495a03f898f84ea3baca52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a28e4cc16d2558f9390ab2cb04bdd06d88cbba080087df2567c2523084aeb80e->leave($__internal_a28e4cc16d2558f9390ab2cb04bdd06d88cbba080087df2567c2523084aeb80e_prof);

        
        $__internal_48b75666895330c4c7c382750850a728b0d03032c6495a03f898f84ea3baca52->leave($__internal_48b75666895330c4c7c382750850a728b0d03032c6495a03f898f84ea3baca52_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6a0fcf73a1ddddef3646b8d0d01c06b449486638ec0170e747a40ea640755a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a0fcf73a1ddddef3646b8d0d01c06b449486638ec0170e747a40ea640755a61->enter($__internal_6a0fcf73a1ddddef3646b8d0d01c06b449486638ec0170e747a40ea640755a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_45827a0dd25aee9e72f6258ad8289a566ce8cad4c9e3aa41ce93b7bf5d001941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45827a0dd25aee9e72f6258ad8289a566ce8cad4c9e3aa41ce93b7bf5d001941->enter($__internal_45827a0dd25aee9e72f6258ad8289a566ce8cad4c9e3aa41ce93b7bf5d001941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_45827a0dd25aee9e72f6258ad8289a566ce8cad4c9e3aa41ce93b7bf5d001941->leave($__internal_45827a0dd25aee9e72f6258ad8289a566ce8cad4c9e3aa41ce93b7bf5d001941_prof);

        
        $__internal_6a0fcf73a1ddddef3646b8d0d01c06b449486638ec0170e747a40ea640755a61->leave($__internal_6a0fcf73a1ddddef3646b8d0d01c06b449486638ec0170e747a40ea640755a61_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2097b984c744a361b8565ff10989bab443f8c8b2fb1a8b7acf059d5258385688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2097b984c744a361b8565ff10989bab443f8c8b2fb1a8b7acf059d5258385688->enter($__internal_2097b984c744a361b8565ff10989bab443f8c8b2fb1a8b7acf059d5258385688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7f96f84628a3f150f51eb6d712a97e1b95725090355fbc8d2cb20f255866acdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f96f84628a3f150f51eb6d712a97e1b95725090355fbc8d2cb20f255866acdc->enter($__internal_7f96f84628a3f150f51eb6d712a97e1b95725090355fbc8d2cb20f255866acdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7f96f84628a3f150f51eb6d712a97e1b95725090355fbc8d2cb20f255866acdc->leave($__internal_7f96f84628a3f150f51eb6d712a97e1b95725090355fbc8d2cb20f255866acdc_prof);

        
        $__internal_2097b984c744a361b8565ff10989bab443f8c8b2fb1a8b7acf059d5258385688->leave($__internal_2097b984c744a361b8565ff10989bab443f8c8b2fb1a8b7acf059d5258385688_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9c0ffe508c36ddca7889f4cf918500c2cae7a710e18cc681a1ab78a2ffe3ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c0ffe508c36ddca7889f4cf918500c2cae7a710e18cc681a1ab78a2ffe3ed7->enter($__internal_a9c0ffe508c36ddca7889f4cf918500c2cae7a710e18cc681a1ab78a2ffe3ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_14ef4f143248ace154967d61c7e003213135fd82371820be99979cdae07d8667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ef4f143248ace154967d61c7e003213135fd82371820be99979cdae07d8667->enter($__internal_14ef4f143248ace154967d61c7e003213135fd82371820be99979cdae07d8667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_14ef4f143248ace154967d61c7e003213135fd82371820be99979cdae07d8667->leave($__internal_14ef4f143248ace154967d61c7e003213135fd82371820be99979cdae07d8667_prof);

        
        $__internal_a9c0ffe508c36ddca7889f4cf918500c2cae7a710e18cc681a1ab78a2ffe3ed7->leave($__internal_a9c0ffe508c36ddca7889f4cf918500c2cae7a710e18cc681a1ab78a2ffe3ed7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/soliman/Projects/Botme/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
