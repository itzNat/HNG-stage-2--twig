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

/* pages/auth/signup.html.twig */
class __TwigTemplate_68cdde2c3475bbdf1f13cad5c7d63015 extends Template
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
        <h1 class=\"auth-title\">Create Account</h1>
        <p class=\"auth-subtitle\">Join TicketFlow and streamline your workflow</p>
    </div>

    <!-- Form -->
    <form method=\"POST\" class=\"auth-form\">
        <div class=\"form-group\">
            <label for=\"fullName\" class=\"form-label\">Full Name</label>
            <input
                type=\"text\"
                id=\"fullName\"
                name=\"fullName\"
                class=\"form-input\"
                placeholder=\"Enter your full name\"
            />
        </div>

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
                placeholder=\"Create a password\"
                required
            />
        </div>

        <div class=\"form-group\">
            <label for=\"confirmPassword\" class=\"form-label\">Confirm Password</label>
            <input
                type=\"password\"
                id=\"confirmPassword\"
                name=\"confirmPassword\"
                class=\"form-input\"
                placeholder=\"Confirm your password\"
                required
            />
        </div>

        <div class=\"form-options\">
            <label class=\"checkbox-label\">
                <input type=\"checkbox\" required />
                <span class=\"checkmark\"></span>
                I agree to the <a href=\"#\">Terms of Service</a> and <a href=\"#\">Privacy Policy</a>
            </label>
        </div>

        <button type=\"submit\" class=\"auth-btn\">
            Create Account
        </button>
    </form>

    <!-- Footer -->
    <div class=\"auth-footer\">
        <p>
            Already have an account?
            <a href=\"/auth/login\" class=\"auth-link\">Sign in</a>
        </p>
    </div>
</div>

<style>
.auth-background .circle-1 {
    animation-name: floatSignup1;
}

.auth-background .circle-2 {
    animation-name: floatSignup2;
}

@keyframes floatSignup1 {
    0%, 100% { transform: translateY(0) rotate(0); }
    50% { transform: translateY(-30px) rotate(-10deg); }
}

@keyframes floatSignup2 {
    0%, 100% { transform: translateY(0) rotate(0); }
    50% { transform: translateY(25px) rotate(12deg); }
}
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/auth/signup.html.twig";
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
        return new Source("{# templates/pages/auth/signup.html.twig #}
{% extends \"layouts/auth.html.twig\" %}

{% block auth_content %}
<div class=\"auth-card glass-card\">
    <!-- Header -->
    <div class=\"auth-header\">
        <a href=\"/\" class=\"back-home\">← Back to home</a>
        <h1 class=\"auth-title\">Create Account</h1>
        <p class=\"auth-subtitle\">Join TicketFlow and streamline your workflow</p>
    </div>

    <!-- Form -->
    <form method=\"POST\" class=\"auth-form\">
        <div class=\"form-group\">
            <label for=\"fullName\" class=\"form-label\">Full Name</label>
            <input
                type=\"text\"
                id=\"fullName\"
                name=\"fullName\"
                class=\"form-input\"
                placeholder=\"Enter your full name\"
            />
        </div>

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
                placeholder=\"Create a password\"
                required
            />
        </div>

        <div class=\"form-group\">
            <label for=\"confirmPassword\" class=\"form-label\">Confirm Password</label>
            <input
                type=\"password\"
                id=\"confirmPassword\"
                name=\"confirmPassword\"
                class=\"form-input\"
                placeholder=\"Confirm your password\"
                required
            />
        </div>

        <div class=\"form-options\">
            <label class=\"checkbox-label\">
                <input type=\"checkbox\" required />
                <span class=\"checkmark\"></span>
                I agree to the <a href=\"#\">Terms of Service</a> and <a href=\"#\">Privacy Policy</a>
            </label>
        </div>

        <button type=\"submit\" class=\"auth-btn\">
            Create Account
        </button>
    </form>

    <!-- Footer -->
    <div class=\"auth-footer\">
        <p>
            Already have an account?
            <a href=\"/auth/login\" class=\"auth-link\">Sign in</a>
        </p>
    </div>
</div>

<style>
.auth-background .circle-1 {
    animation-name: floatSignup1;
}

.auth-background .circle-2 {
    animation-name: floatSignup2;
}

@keyframes floatSignup1 {
    0%, 100% { transform: translateY(0) rotate(0); }
    50% { transform: translateY(-30px) rotate(-10deg); }
}

@keyframes floatSignup2 {
    0%, 100% { transform: translateY(0) rotate(0); }
    50% { transform: translateY(25px) rotate(12deg); }
}
</style>
{% endblock %}", "pages/auth/signup.html.twig", "D:\\Documents\\VsCode\\HNG\\Stage2\\stage2-twig\\templates\\pages\\auth\\signup.html.twig");
    }
}
