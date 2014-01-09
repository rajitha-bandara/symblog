<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_0f50112b47c89c89beee2ca3dd121808808f14debd69e7c678dbdd1358b80614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BloggerBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Contact";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>

    <p>Want to contact symblog?</p>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
