<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da20fb56ee731d815372846c45abe9bca7fe305dd3c939696fe69110748cc76f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da20fb56ee731d815372846c45abe9bca7fe305dd3c939696fe69110748cc76f->enter($__internal_da20fb56ee731d815372846c45abe9bca7fe305dd3c939696fe69110748cc76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7102e21320c13ba62a79fe14d17437f9c77e51a9e65f729f35120b1b453d3ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7102e21320c13ba62a79fe14d17437f9c77e51a9e65f729f35120b1b453d3ef9->enter($__internal_7102e21320c13ba62a79fe14d17437f9c77e51a9e65f729f35120b1b453d3ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_da20fb56ee731d815372846c45abe9bca7fe305dd3c939696fe69110748cc76f->leave($__internal_da20fb56ee731d815372846c45abe9bca7fe305dd3c939696fe69110748cc76f_prof);

        
        $__internal_7102e21320c13ba62a79fe14d17437f9c77e51a9e65f729f35120b1b453d3ef9->leave($__internal_7102e21320c13ba62a79fe14d17437f9c77e51a9e65f729f35120b1b453d3ef9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_64785d8e33d905702785ac622497418f9595ee4a3390a36ce247b612df694c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64785d8e33d905702785ac622497418f9595ee4a3390a36ce247b612df694c6b->enter($__internal_64785d8e33d905702785ac622497418f9595ee4a3390a36ce247b612df694c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7106a6f453df07eef4363b3b906ff77d84adee01592ede8a1231228883f6b2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7106a6f453df07eef4363b3b906ff77d84adee01592ede8a1231228883f6b2e5->enter($__internal_7106a6f453df07eef4363b3b906ff77d84adee01592ede8a1231228883f6b2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7106a6f453df07eef4363b3b906ff77d84adee01592ede8a1231228883f6b2e5->leave($__internal_7106a6f453df07eef4363b3b906ff77d84adee01592ede8a1231228883f6b2e5_prof);

        
        $__internal_64785d8e33d905702785ac622497418f9595ee4a3390a36ce247b612df694c6b->leave($__internal_64785d8e33d905702785ac622497418f9595ee4a3390a36ce247b612df694c6b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d96c9bf69e5e9f4a07bcf53cf4c0599cc11d17cf3bface795ffdc85e9429e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d96c9bf69e5e9f4a07bcf53cf4c0599cc11d17cf3bface795ffdc85e9429e68->enter($__internal_1d96c9bf69e5e9f4a07bcf53cf4c0599cc11d17cf3bface795ffdc85e9429e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_190b316aa0a18fe068d1e934a312f227c36c82dd2f325a9780ce5814be28b11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190b316aa0a18fe068d1e934a312f227c36c82dd2f325a9780ce5814be28b11d->enter($__internal_190b316aa0a18fe068d1e934a312f227c36c82dd2f325a9780ce5814be28b11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_190b316aa0a18fe068d1e934a312f227c36c82dd2f325a9780ce5814be28b11d->leave($__internal_190b316aa0a18fe068d1e934a312f227c36c82dd2f325a9780ce5814be28b11d_prof);

        
        $__internal_1d96c9bf69e5e9f4a07bcf53cf4c0599cc11d17cf3bface795ffdc85e9429e68->leave($__internal_1d96c9bf69e5e9f4a07bcf53cf4c0599cc11d17cf3bface795ffdc85e9429e68_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bad0f503176df82f115875b8b208e12c311f7f903293e09b55e49b92ff06d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bad0f503176df82f115875b8b208e12c311f7f903293e09b55e49b92ff06d90->enter($__internal_6bad0f503176df82f115875b8b208e12c311f7f903293e09b55e49b92ff06d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69e5fec97f5113890ba2700d25d9d5b8e3cb2ea70a41248b3b3d5b15a3a09df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e5fec97f5113890ba2700d25d9d5b8e3cb2ea70a41248b3b3d5b15a3a09df3->enter($__internal_69e5fec97f5113890ba2700d25d9d5b8e3cb2ea70a41248b3b3d5b15a3a09df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_69e5fec97f5113890ba2700d25d9d5b8e3cb2ea70a41248b3b3d5b15a3a09df3->leave($__internal_69e5fec97f5113890ba2700d25d9d5b8e3cb2ea70a41248b3b3d5b15a3a09df3_prof);

        
        $__internal_6bad0f503176df82f115875b8b208e12c311f7f903293e09b55e49b92ff06d90->leave($__internal_6bad0f503176df82f115875b8b208e12c311f7f903293e09b55e49b92ff06d90_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc88494f9656bca06fdcbf0643f9e162225aad544cd339027e2f1e5518d9fd65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc88494f9656bca06fdcbf0643f9e162225aad544cd339027e2f1e5518d9fd65->enter($__internal_fc88494f9656bca06fdcbf0643f9e162225aad544cd339027e2f1e5518d9fd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ec3355eec1198b8263d46c32988e53bea8d2f6c4f03791ff97e44d200f6bfd19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3355eec1198b8263d46c32988e53bea8d2f6c4f03791ff97e44d200f6bfd19->enter($__internal_ec3355eec1198b8263d46c32988e53bea8d2f6c4f03791ff97e44d200f6bfd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ec3355eec1198b8263d46c32988e53bea8d2f6c4f03791ff97e44d200f6bfd19->leave($__internal_ec3355eec1198b8263d46c32988e53bea8d2f6c4f03791ff97e44d200f6bfd19_prof);

        
        $__internal_fc88494f9656bca06fdcbf0643f9e162225aad544cd339027e2f1e5518d9fd65->leave($__internal_fc88494f9656bca06fdcbf0643f9e162225aad544cd339027e2f1e5518d9fd65_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/soliman/Projects/Botme/app/Resources/views/base.html.twig");
    }
}
