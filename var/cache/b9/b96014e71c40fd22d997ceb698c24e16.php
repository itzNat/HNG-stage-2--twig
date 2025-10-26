<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* layouts/app.html.twig */
class __TwigTemplate_156b809c2198957bfd6bd7b882694727 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'app_content' => [$this, 'block_app_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("layouts/base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<div class=\"layout\">
    <!-- Sidebar -->
    <aside class=\"sidebar\">
        <!-- Logo -->
        <div class=\"sidebar-logo\">
            <a href=\"/dashboard\" class=\"logo-link\">
                <span class=\"logo-icon\">🎫</span>
                <span class=\"logo-text\">TicketFlow</span>
            </a>
        </div>

        <!-- Navigation -->
        <nav class=\"sidebar-nav\">
            <a href=\"/dashboard\" class=\"nav-item ";
        // line 18
        if ((($context["current_page"] ?? null) == "dashboard")) {
            yield "active";
        }
        yield "\">
                <span class=\"nav-icon\">📊</span>
                <span class=\"nav-label\">Dashboard</span>
                ";
        // line 21
        if ((($context["current_page"] ?? null) == "dashboard")) {
            yield "<div class=\"active-indicator\"></div>";
        }
        // line 22
        yield "            </a>
            <a href=\"/tickets\" class=\"nav-item ";
        // line 23
        if ((($context["current_page"] ?? null) == "tickets")) {
            yield "active";
        }
        yield "\">
                <span class=\"nav-icon\">🎫</span>
                <span class=\"nav-label\">Tickets</span>
                ";
        // line 26
        if ((($context["current_page"] ?? null) == "tickets")) {
            yield "<div class=\"active-indicator\"></div>";
        }
        // line 27
        yield "            </a>
        </nav>

        <!-- User Info & Logout -->
        <div class=\"sidebar-footer\">
            <div class=\"user-info\">
                <div class=\"user-avatar\">
                    ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 34))), "html", null, true);
        yield "
                </div>
                <div class=\"user-details\">
                    <span class=\"user-name\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 37), "html", null, true);
        yield "</span>
                    <span class=\"user-role\">Admin</span>
                </div>
            </div>
            <a href=\"/auth/logout\" class=\"logout-btn\">
                <span class=\"logout-icon\">🚪</span>
                Logout
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class=\"main-content\">
        <!-- Page Content -->
        <div class=\"content-wrapper\">
            ";
        // line 52
        yield from $this->unwrap()->yieldBlock('app_content', $context, $blocks);
        // line 53
        yield "        </div>
    </main>
</div>
";
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_app_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layouts/app.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  144 => 52,  136 => 53,  134 => 52,  116 => 37,  110 => 34,  101 => 27,  97 => 26,  89 => 23,  86 => 22,  82 => 21,  74 => 18,  59 => 5,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/layouts/app.html.twig #}
{% extends \"layouts/base.html.twig\" %}

{% block content %}
<div class=\"layout\">
    <!-- Sidebar -->
    <aside class=\"sidebar\">
        <!-- Logo -->
        <div class=\"sidebar-logo\">
            <a href=\"/dashboard\" class=\"logo-link\">
                <span class=\"logo-icon\">🎫</span>
                <span class=\"logo-text\">TicketFlow</span>
            </a>
        </div>

        <!-- Navigation -->
        <nav class=\"sidebar-nav\">
            <a href=\"/dashboard\" class=\"nav-item {% if current_page == 'dashboard' %}active{% endif %}\">
                <span class=\"nav-icon\">📊</span>
                <span class=\"nav-label\">Dashboard</span>
                {% if current_page == 'dashboard' %}<div class=\"active-indicator\"></div>{% endif %}
            </a>
            <a href=\"/tickets\" class=\"nav-item {% if current_page == 'tickets' %}active{% endif %}\">
                <span class=\"nav-icon\">🎫</span>
                <span class=\"nav-label\">Tickets</span>
                {% if current_page == 'tickets' %}<div class=\"active-indicator\"></div>{% endif %}
            </a>
        </nav>

        <!-- User Info & Logout -->
        <div class=\"sidebar-footer\">
            <div class=\"user-info\">
                <div class=\"user-avatar\">
                    {{ user.email|first|upper }}
                </div>
                <div class=\"user-details\">
                    <span class=\"user-name\">{{ user.email }}</span>
                    <span class=\"user-role\">Admin</span>
                </div>
            </div>
            <a href=\"/auth/logout\" class=\"logout-btn\">
                <span class=\"logout-icon\">🚪</span>
                Logout
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class=\"main-content\">
        <!-- Page Content -->
        <div class=\"content-wrapper\">
            {% block app_content %}{% endblock %}
        </div>
    </main>
</div>
{% endblock %}", "layouts/app.html.twig", "D:\\Documents\\VsCode\\HNG\\Stage2\\stage2-twig\\templates\\layouts\\app.html.twig");
    }
}
