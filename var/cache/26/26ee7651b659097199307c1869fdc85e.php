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

/* pages/auth/login.html.twig */
class __TwigTemplate_c914942e005e4388da314143a3cc3617 extends Template
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
            'auth_content' => [$this, 'block_auth_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "layouts/auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("layouts/auth.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_auth_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<div class=\"auth-card glass-card\">
    <!-- Header -->
    <div class=\"auth-header\">
        <a href=\"/\" class=\"back-home\">← Back to home</a>
        <h1 class=\"auth-title\">Welcome Back</h1>
        <p class=\"auth-subtitle\">Sign in to your TicketFlow account</p>
    </div>

    <!-- Form -->
    <form method=\"POST\" class=\"auth-form\">
        <div class=\"form-group\">
            <label for=\"email\" class=\"form-label\">Email Address</label>
            <input
                type=\"email\"
                id=\"email\"
                name=\"email\"
                class=\"form-input\"
                placeholder=\"Enter your email\"
                required
            />
        </div>

        <div class=\"form-group\">
            <label for=\"password\" class=\"form-label\">Password</label>
            <input
                type=\"password\"
                id=\"password\"
                name=\"password\"
                class=\"form-input\"
                placeholder=\"Enter your password\"
                required
            />
        </div>

        <div class=\"form-options\">
            <label class=\"checkbox-label\">
                <input type=\"checkbox\" />
                <span class=\"checkmark\"></span>
                Remember me
            </label>
            <a href=\"/forgot-password\" class=\"forgot-password\">
                Forgot password?
            </a>
        </div>

        <button type=\"submit\" class=\"auth-btn\">
            Sign In
        </button>
    </form>

    <!-- Footer -->
    <div class=\"auth-footer\">
        <p>
            Don't have an account?
            <a href=\"/auth/signup\" class=\"auth-link\">Sign up now</a>
        </p>
    </div>
</div>

<!-- Demo Credentials -->
<div class=\"demo-credentials glass-card\">
    <h3>Demo Credentials</h3>
    <p>Use any email and password to sign up first</p>
    <div class=\"demo-info\">
        <span>Email: demo@ticketflow.com</span>
        <span>Password: anypassword</span>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/auth/login.html.twig";
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
        return array (  58 => 5,  51 => 4,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/pages/auth/login.html.twig #}
{% extends \"layouts/auth.html.twig\" %}

{% block auth_content %}
<div class=\"auth-card glass-card\">
    <!-- Header -->
    <div class=\"auth-header\">
        <a href=\"/\" class=\"back-home\">← Back to home</a>
        <h1 class=\"auth-title\">Welcome Back</h1>
        <p class=\"auth-subtitle\">Sign in to your TicketFlow account</p>
    </div>

    <!-- Form -->
    <form method=\"POST\" class=\"auth-form\">
        <div class=\"form-group\">
            <label for=\"email\" class=\"form-label\">Email Address</label>
            <input
                type=\"email\"
                id=\"email\"
                name=\"email\"
                class=\"form-input\"
                placeholder=\"Enter your email\"
                required
            />
        </div>

        <div class=\"form-group\">
            <label for=\"password\" class=\"form-label\">Password</label>
            <input
                type=\"password\"
                id=\"password\"
                name=\"password\"
                class=\"form-input\"
                placeholder=\"Enter your password\"
                required
            />
        </div>

        <div class=\"form-options\">
            <label class=\"checkbox-label\">
                <input type=\"checkbox\" />
                <span class=\"checkmark\"></span>
                Remember me
            </label>
            <a href=\"/forgot-password\" class=\"forgot-password\">
                Forgot password?
            </a>
        </div>

        <button type=\"submit\" class=\"auth-btn\">
            Sign In
        </button>
    </form>

    <!-- Footer -->
    <div class=\"auth-footer\">
        <p>
            Don't have an account?
            <a href=\"/auth/signup\" class=\"auth-link\">Sign up now</a>
        </p>
    </div>
</div>

<!-- Demo Credentials -->
<div class=\"demo-credentials glass-card\">
    <h3>Demo Credentials</h3>
    <p>Use any email and password to sign up first</p>
    <div class=\"demo-info\">
        <span>Email: demo@ticketflow.com</span>
        <span>Password: anypassword</span>
    </div>
</div>
{% endblock %}", "pages/auth/login.html.twig", "D:\\Documents\\VsCode\\HNG\\Stage2\\stage2-twig\\templates\\pages\\auth\\login.html.twig");
    }
}
