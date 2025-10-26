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

/* pages/tickets/form.html.twig */
class __TwigTemplate_598ad11f6af79d126b4f9c09cf486b64 extends Template
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
            'title' => [$this, 'block_title'],
            'app_content' => [$this, 'block_app_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "layouts/app.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        $context["current_page"] = "tickets";
        // line 2
        $this->parent = $this->load("layouts/app.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html", null, true);
        yield " Ticket - TicketFlow";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_app_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "<div class=\"ticket-form-page\">
    <div class=\"form-container\">
        <div class=\"form-card\">
            <!-- Header -->
            <div class=\"form-header\">
                <h2>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html", null, true);
        yield " Ticket</h2>
                <a href=\"/tickets\" class=\"back-btn\">← Back to Tickets</a>
            </div>

            <!-- Form -->
            <form method=\"POST\" class=\"ticket-form\">
                <div class=\"form-group\">
                    <label for=\"title\" class=\"form-label\">Title *</label>
                    <input
                        type=\"text\"
                        id=\"title\"
                        name=\"title\"
                        class=\"form-input\"
                        placeholder=\"Enter ticket title\"
                        value=\"";
        // line 27
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "title", [], "any", true, true, false, 27) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "title", [], "any", false, false, false, 27)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "title", [], "any", false, false, false, 27), "html", null, true)) : (""));
        yield "\"
                        required
                    />
                </div>

                <div class=\"form-group\">
                    <label for=\"description\" class=\"form-label\">Description</label>
                    <textarea
                        id=\"description\"
                        name=\"description\"
                        class=\"form-textarea\"
                        placeholder=\"Describe the issue or request...\"
                        rows=\"4\"
                    >";
        // line 40
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "description", [], "any", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "description", [], "any", false, false, false, 40)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "description", [], "any", false, false, false, 40), "html", null, true)) : (""));
        yield "</textarea>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label for=\"status\" class=\"form-label\">Status *</label>
                        <select
                            id=\"status\"
                            name=\"status\"
                            class=\"form-select\"
                            required
                        >
                            <option value=\"open\" ";
        // line 52
        yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", true, true, false, 52) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 52)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 52)) : ("open")) == "open")) ? ("selected") : (""));
        yield ">Open</option>
                            <option value=\"in_progress\" ";
        // line 53
        yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", true, true, false, 53) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 53)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 53)) : ("")) == "in_progress")) ? ("selected") : (""));
        yield ">In Progress</option>
                            <option value=\"closed\" ";
        // line 54
        yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", true, true, false, 54) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 54)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 54)) : ("")) == "closed")) ? ("selected") : (""));
        yield ">Closed</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"priority\" class=\"form-label\">Priority</label>
                        <select
                            id=\"priority\"
                            name=\"priority\"
                            class=\"form-select\"
                        >
                            <option value=\"low\" ";
        // line 65
        yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", true, true, false, 65) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", false, false, false, 65)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", false, false, false, 65)) : ("medium")) == "low")) ? ("selected") : (""));
        yield ">Low</option>
                            <option value=\"medium\" ";
        // line 66
        yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", true, true, false, 66) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", false, false, false, 66)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", false, false, false, 66)) : ("medium")) == "medium")) ? ("selected") : (""));
        yield ">Medium</option>
                            <option value=\"high\" ";
        // line 67
        yield ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", true, true, false, 67) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", false, false, false, 67)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", false, false, false, 67)) : ("medium")) == "high")) ? ("selected") : (""));
        yield ">High</option>
                        </select>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"assignee\" class=\"form-label\">Assignee</label>
                    <input
                        type=\"text\"
                        id=\"assignee\"
                        name=\"assignee\"
                        class=\"form-input\"
                        placeholder=\"Assign to team member\"
                        value=\"";
        // line 80
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "assignee", [], "any", true, true, false, 80) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "assignee", [], "any", false, false, false, 80)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "assignee", [], "any", false, false, false, 80), "html", null, true)) : ("Unassigned"));
        yield "\"
                    />
                </div>

                <!-- Form Actions -->
                <div class=\"form-actions\">
                    <a href=\"/tickets\" class=\"btn btn-secondary\">Cancel</a>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html", null, true);
        yield " Ticket
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.ticket-form-page {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem;
}

.form-container {
    width: 100%;
    max-width: 600px;
}

.form-card {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    border: 1px solid rgba(0, 0, 0, 0.1);
}

.form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid #e9ecef;
}

.form-header h2 {
    margin: 0;
    color: var(--text-primary);
    font-size: 1.5rem;
    font-weight: 600;
}

.back-btn {
    color: var(--text-secondary);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.back-btn:hover {
    color: var(--primary-color);
}

.ticket-form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.form-actions {
    display: flex;
    gap: 1rem;
    justify-content: flex-end;
    margin-top: 2rem;
    padding-top: 1.5rem;
    border-top: 1px solid #e9ecef;
}

/* Responsive Design */
@media (max-width: 768px) {
    .ticket-form-page {
        padding: 1rem;
    }
    
    .form-card {
        padding: 1.5rem;
    }
    
    .form-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .form-actions {
        flex-direction: column-reverse;
    }
    
    .btn {
        width: 100%;
    }
}

@media (max-width: 480px) {
    .form-card {
        padding: 1rem;
    }
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
        return "pages/tickets/form.html.twig";
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
        return array (  186 => 88,  175 => 80,  159 => 67,  155 => 66,  151 => 65,  137 => 54,  133 => 53,  129 => 52,  114 => 40,  98 => 27,  81 => 13,  74 => 8,  67 => 7,  55 => 4,  50 => 2,  48 => 5,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/pages/tickets/form.html.twig #}
{% extends \"layouts/app.html.twig\" %}

{% block title %}{{ action }} Ticket - TicketFlow{% endblock %}
{% set current_page = 'tickets' %}

{% block app_content %}
<div class=\"ticket-form-page\">
    <div class=\"form-container\">
        <div class=\"form-card\">
            <!-- Header -->
            <div class=\"form-header\">
                <h2>{{ action }} Ticket</h2>
                <a href=\"/tickets\" class=\"back-btn\">← Back to Tickets</a>
            </div>

            <!-- Form -->
            <form method=\"POST\" class=\"ticket-form\">
                <div class=\"form-group\">
                    <label for=\"title\" class=\"form-label\">Title *</label>
                    <input
                        type=\"text\"
                        id=\"title\"
                        name=\"title\"
                        class=\"form-input\"
                        placeholder=\"Enter ticket title\"
                        value=\"{{ ticket.title ?? '' }}\"
                        required
                    />
                </div>

                <div class=\"form-group\">
                    <label for=\"description\" class=\"form-label\">Description</label>
                    <textarea
                        id=\"description\"
                        name=\"description\"
                        class=\"form-textarea\"
                        placeholder=\"Describe the issue or request...\"
                        rows=\"4\"
                    >{{ ticket.description ?? '' }}</textarea>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group\">
                        <label for=\"status\" class=\"form-label\">Status *</label>
                        <select
                            id=\"status\"
                            name=\"status\"
                            class=\"form-select\"
                            required
                        >
                            <option value=\"open\" {{ (ticket.status ?? 'open') == 'open' ? 'selected' : '' }}>Open</option>
                            <option value=\"in_progress\" {{ (ticket.status ?? '') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                            <option value=\"closed\" {{ (ticket.status ?? '') == 'closed' ? 'selected' : '' }}>Closed</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"priority\" class=\"form-label\">Priority</label>
                        <select
                            id=\"priority\"
                            name=\"priority\"
                            class=\"form-select\"
                        >
                            <option value=\"low\" {{ (ticket.priority ?? 'medium') == 'low' ? 'selected' : '' }}>Low</option>
                            <option value=\"medium\" {{ (ticket.priority ?? 'medium') == 'medium' ? 'selected' : '' }}>Medium</option>
                            <option value=\"high\" {{ (ticket.priority ?? 'medium') == 'high' ? 'selected' : '' }}>High</option>
                        </select>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"assignee\" class=\"form-label\">Assignee</label>
                    <input
                        type=\"text\"
                        id=\"assignee\"
                        name=\"assignee\"
                        class=\"form-input\"
                        placeholder=\"Assign to team member\"
                        value=\"{{ ticket.assignee ?? 'Unassigned' }}\"
                    />
                </div>

                <!-- Form Actions -->
                <div class=\"form-actions\">
                    <a href=\"/tickets\" class=\"btn btn-secondary\">Cancel</a>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        {{ action }} Ticket
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.ticket-form-page {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem;
}

.form-container {
    width: 100%;
    max-width: 600px;
}

.form-card {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    border: 1px solid rgba(0, 0, 0, 0.1);
}

.form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid #e9ecef;
}

.form-header h2 {
    margin: 0;
    color: var(--text-primary);
    font-size: 1.5rem;
    font-weight: 600;
}

.back-btn {
    color: var(--text-secondary);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.back-btn:hover {
    color: var(--primary-color);
}

.ticket-form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.form-actions {
    display: flex;
    gap: 1rem;
    justify-content: flex-end;
    margin-top: 2rem;
    padding-top: 1.5rem;
    border-top: 1px solid #e9ecef;
}

/* Responsive Design */
@media (max-width: 768px) {
    .ticket-form-page {
        padding: 1rem;
    }
    
    .form-card {
        padding: 1.5rem;
    }
    
    .form-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .form-actions {
        flex-direction: column-reverse;
    }
    
    .btn {
        width: 100%;
    }
}

@media (max-width: 480px) {
    .form-card {
        padding: 1rem;
    }
}
</style>
{% endblock %}", "pages/tickets/form.html.twig", "D:\\Documents\\VsCode\\HNG\\Stage2\\stage2-twig\\templates\\pages\\tickets\\form.html.twig");
    }
}
