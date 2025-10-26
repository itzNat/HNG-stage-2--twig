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

/* layouts/auth.html.twig */
class __TwigTemplate_919d2f82d8c4b6cbd305f20ffb573b4c extends Template
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
            'auth_content' => [$this, 'block_auth_content'],
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
        yield "<div class=\"auth-page\">
    <!-- Animated Background Elements -->
    <div class=\"auth-background\">
        <div class=\"auth-circle circle-1\"></div>
        <div class=\"auth-circle circle-2\"></div>
    </div>

    <div class=\"auth-container\">
        ";
        // line 13
        yield from $this->unwrap()->yieldBlock('auth_content', $context, $blocks);
        // line 14
        yield "    </div>
</div>

<style>
.auth-page {
    min-height: 100vh;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem;
    position: relative;
    overflow: hidden;
}

/* Animated Background */
.auth-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.auth-circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    animation-duration: 8s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
}

.auth-background .circle-1 {
    width: 150px;
    height: 150px;
    top: 10%;
    right: 10%;
    animation-name: floatAuth1;
}

.auth-background .circle-2 {
    width: 100px;
    height: 100px;
    bottom: 20%;
    left: 10%;
    animation-name: floatAuth2;
    animation-delay: 1s;
}

@keyframes floatAuth1 {
    0%, 100% { transform: translateY(0) rotate(0); }
    50% { transform: translateY(-40px) rotate(10deg); }
}

@keyframes floatAuth2 {
    0%, 100% { transform: translateY(0) rotate(0); }
    50% { transform: translateY(30px) rotate(-15deg); }
}

/* Auth Container */
.auth-container {
    width: 100%;
    max-width: 440px;
    position: relative;
    z-index: 2;
}

.auth-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 24px;
    padding: 2.5rem;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    width: 100%;
}

/* Header */
.auth-header {
    text-align: center;
    margin-bottom: 2rem;
}

.back-home {
    display: inline-flex;
    align-items: center;
    color: var(--text-secondary);
    text-decoration: none;
    font-weight: 500;
    margin-bottom: 1rem;
    transition: color 0.3s ease;
}

.back-home:hover {
    color: var(--primary-color);
}

.auth-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
}

.auth-subtitle {
    color: var(--text-secondary);
    font-size: 1rem;
}

/* Form */
.auth-form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.form-label {
    font-weight: 600;
    color: var(--text-primary);
    font-size: 0.9rem;
}

.form-input {
    padding: 1rem 1.25rem;
    border: 2px solid #e9ecef;
    border-radius: 12px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: white;
}

.form-input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.form-input.error {
    border-color: var(--error-color);
    box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.1);
}

.error-message {
    color: var(--error-color);
    font-size: 0.875rem;
    font-weight: 500;
}

/* Form Options */
.form-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    cursor: pointer;
    font-size: 0.9rem;
    color: var(--text-secondary);
}

.checkbox-label input {
    display: none;
}

.checkmark {
    width: 18px;
    height: 18px;
    border: 2px solid #ddd;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.checkbox-label input:checked + .checkmark {
    background: var(--primary-color);
    border-color: var(--primary-color);
}

.checkbox-label input:checked + .checkmark::after {
    content: '✓';
    color: white;
    font-size: 12px;
    font-weight: bold;
}

.forgot-password {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 500;
    font-size: 0.9rem;
    transition: color 0.3s ease;
}

.forgot-password:hover {
    color: #5a6fd8;
}

/* Auth Button */
.auth-btn {
    background: linear-gradient(45deg, var(--primary-color), #5a6fd8);
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 12px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.auth-btn:disabled {
    cursor: not-allowed;
    opacity: 0.8;
}

.auth-btn.loading {
    color: transparent;
}

.auth-btn.loading::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    top: 50%;
    left: 50%;
    margin: -10px 0 0 -10px;
    border: 2px solid transparent;
    border-top: 2px solid currentColor;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

/* Auth Footer */
.auth-footer {
    text-align: center;
    margin-top: 2rem;
    padding-top: 1.5rem;
    border-top: 1px solid #e9ecef;
    color: var(--text-secondary);
}

.auth-link {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.auth-link:hover {
    color: #5a6fd8;
}

/* Demo Credentials */
.demo-credentials {
    margin-top: 2rem;
    padding: 1.5rem;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 12px;
}

.demo-credentials h3 {
    margin-bottom: 0.5rem;
    color: var(--text-primary);
    font-size: 1rem;
}

.demo-credentials p {
    color: var(--text-secondary);
    font-size: 0.9rem;
    margin-bottom: 1rem;
}

.demo-info {
    display: flex;
    flex-direction: column;
    gap: 0.25rem;
    font-size: 0.8rem;
    color: var(--text-secondary);
}

/* Responsive Design */
@media (max-width: 768px) {
    .auth-page {
        padding: 1rem;
    }
    
    .auth-card {
        padding: 2rem 1.5rem;
    }
    
    .auth-title {
        font-size: 1.75rem;
    }
    
    .form-options {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
}
</style>
";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_auth_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layouts/auth.html.twig";
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
        return array (  400 => 13,  71 => 14,  69 => 13,  59 => 5,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/layouts/auth.html.twig #}
{% extends \"layouts/base.html.twig\" %}

{% block content %}
<div class=\"auth-page\">
    <!-- Animated Background Elements -->
    <div class=\"auth-background\">
        <div class=\"auth-circle circle-1\"></div>
        <div class=\"auth-circle circle-2\"></div>
    </div>

    <div class=\"auth-container\">
        {% block auth_content %}{% endblock %}
    </div>
</div>

<style>
.auth-page {
    min-height: 100vh;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem;
    position: relative;
    overflow: hidden;
}

/* Animated Background */
.auth-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.auth-circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    animation-duration: 8s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
}

.auth-background .circle-1 {
    width: 150px;
    height: 150px;
    top: 10%;
    right: 10%;
    animation-name: floatAuth1;
}

.auth-background .circle-2 {
    width: 100px;
    height: 100px;
    bottom: 20%;
    left: 10%;
    animation-name: floatAuth2;
    animation-delay: 1s;
}

@keyframes floatAuth1 {
    0%, 100% { transform: translateY(0) rotate(0); }
    50% { transform: translateY(-40px) rotate(10deg); }
}

@keyframes floatAuth2 {
    0%, 100% { transform: translateY(0) rotate(0); }
    50% { transform: translateY(30px) rotate(-15deg); }
}

/* Auth Container */
.auth-container {
    width: 100%;
    max-width: 440px;
    position: relative;
    z-index: 2;
}

.auth-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 24px;
    padding: 2.5rem;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    width: 100%;
}

/* Header */
.auth-header {
    text-align: center;
    margin-bottom: 2rem;
}

.back-home {
    display: inline-flex;
    align-items: center;
    color: var(--text-secondary);
    text-decoration: none;
    font-weight: 500;
    margin-bottom: 1rem;
    transition: color 0.3s ease;
}

.back-home:hover {
    color: var(--primary-color);
}

.auth-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
}

.auth-subtitle {
    color: var(--text-secondary);
    font-size: 1rem;
}

/* Form */
.auth-form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.form-label {
    font-weight: 600;
    color: var(--text-primary);
    font-size: 0.9rem;
}

.form-input {
    padding: 1rem 1.25rem;
    border: 2px solid #e9ecef;
    border-radius: 12px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: white;
}

.form-input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.form-input.error {
    border-color: var(--error-color);
    box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.1);
}

.error-message {
    color: var(--error-color);
    font-size: 0.875rem;
    font-weight: 500;
}

/* Form Options */
.form-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    cursor: pointer;
    font-size: 0.9rem;
    color: var(--text-secondary);
}

.checkbox-label input {
    display: none;
}

.checkmark {
    width: 18px;
    height: 18px;
    border: 2px solid #ddd;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.checkbox-label input:checked + .checkmark {
    background: var(--primary-color);
    border-color: var(--primary-color);
}

.checkbox-label input:checked + .checkmark::after {
    content: '✓';
    color: white;
    font-size: 12px;
    font-weight: bold;
}

.forgot-password {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 500;
    font-size: 0.9rem;
    transition: color 0.3s ease;
}

.forgot-password:hover {
    color: #5a6fd8;
}

/* Auth Button */
.auth-btn {
    background: linear-gradient(45deg, var(--primary-color), #5a6fd8);
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 12px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.auth-btn:disabled {
    cursor: not-allowed;
    opacity: 0.8;
}

.auth-btn.loading {
    color: transparent;
}

.auth-btn.loading::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    top: 50%;
    left: 50%;
    margin: -10px 0 0 -10px;
    border: 2px solid transparent;
    border-top: 2px solid currentColor;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

/* Auth Footer */
.auth-footer {
    text-align: center;
    margin-top: 2rem;
    padding-top: 1.5rem;
    border-top: 1px solid #e9ecef;
    color: var(--text-secondary);
}

.auth-link {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.auth-link:hover {
    color: #5a6fd8;
}

/* Demo Credentials */
.demo-credentials {
    margin-top: 2rem;
    padding: 1.5rem;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 12px;
}

.demo-credentials h3 {
    margin-bottom: 0.5rem;
    color: var(--text-primary);
    font-size: 1rem;
}

.demo-credentials p {
    color: var(--text-secondary);
    font-size: 0.9rem;
    margin-bottom: 1rem;
}

.demo-info {
    display: flex;
    flex-direction: column;
    gap: 0.25rem;
    font-size: 0.8rem;
    color: var(--text-secondary);
}

/* Responsive Design */
@media (max-width: 768px) {
    .auth-page {
        padding: 1rem;
    }
    
    .auth-card {
        padding: 2rem 1.5rem;
    }
    
    .auth-title {
        font-size: 1.75rem;
    }
    
    .form-options {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
}
</style>
{% endblock %}", "layouts/auth.html.twig", "D:\\Documents\\VsCode\\HNG\\Stage2\\stage2-twig\\templates\\layouts\\auth.html.twig");
    }
}
