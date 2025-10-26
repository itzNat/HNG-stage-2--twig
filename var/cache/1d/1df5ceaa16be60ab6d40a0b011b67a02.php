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

/* pages/tickets/index.html.twig */
class __TwigTemplate_f3c6f1a0099e796e162e2cf5ca16fa64 extends Template
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
        // line 1
        return "layouts/app.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        $context["current_page"] = "tickets";
        // line 1
        $this->parent = $this->load("layouts/app.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Tickets - TicketFlow";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_app_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"tickets-page\">
    <!-- Header -->
    <div class=\"tickets-header\">
        <div class=\"header-content\">
            <h1 class=\"tickets-title\">Ticket Management</h1>
            <p class=\"tickets-subtitle\">
                Manage all your support tickets in one place
            </p>
        </div>

        <button onclick=\"openCreateTicketModal()\" class=\"create-ticket-btn\">
            <span class=\"btn-icon\">➕</span>
            Create Ticket
        </button>
";
        // line 27
        yield "    </div>

    <!-- Filters and Search -->
    <div class=\"tickets-filters\">
        <!-- Search Bar -->
        <div class=\"search-container\">
            <div class=\"search-input-wrapper\">
                <span class=\"search-icon\">🔍</span>
                <input
                    type=\"text\"
                    id=\"searchInput\"
                    placeholder=\"Search tickets...\"
                    value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
        yield "\"
                    class=\"search-input\"
                />
                ";
        // line 42
        if ((($tmp = ($context["search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "                    <button onclick=\"clearSearch()\" class=\"clear-search\">×</button>
                ";
        }
        // line 45
        yield "            </div>
        </div>

        <!-- Filter Tabs -->
        <div class=\"filter-tabs\">
            ";
        // line 50
        $context["allTicketsCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tickets"] ?? null));
        // line 51
        yield "            ";
        $context["openTicketsCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["tickets"] ?? null), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "status", [], "any", false, false, false, 51) == "open"); }));
        // line 52
        yield "            ";
        $context["inProgressTicketsCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["tickets"] ?? null), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "status", [], "any", false, false, false, 52) == "in_progress"); }));
        // line 53
        yield "            ";
        $context["closedTicketsCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["tickets"] ?? null), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "status", [], "any", false, false, false, 53) == "closed"); }));
        // line 54
        yield "            ";
        $context["highPriorityCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["tickets"] ?? null), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "priority", [], "any", false, false, false, 54) == "high"); }));
        // line 55
        yield "            ";
        $context["mediumPriorityCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["tickets"] ?? null), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "priority", [], "any", false, false, false, 55) == "medium"); }));
        // line 56
        yield "            ";
        $context["lowPriorityCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["tickets"] ?? null), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "priority", [], "any", false, false, false, 56) == "low"); }));
        // line 57
        yield "            
            <button
                onclick=\"setFilter('all')\"
                class=\"filter-tab ";
        // line 60
        if ((($context["filter"] ?? null) == "all")) {
            yield "active";
        }
        yield "\"
            >
                <span class=\"filter-label\">All Tickets</span>
                <span class=\"filter-count\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["allTicketsCount"] ?? null), "html", null, true);
        yield "</span>
            </button>
            <button
                onclick=\"setFilter('open')\"
                class=\"filter-tab ";
        // line 67
        if ((($context["filter"] ?? null) == "open")) {
            yield "active";
        }
        yield "\"
            >
                <span class=\"filter-label\">Open</span>
                <span class=\"filter-count\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["openTicketsCount"] ?? null), "html", null, true);
        yield "</span>
            </button>
            <button
                onclick=\"setFilter('in_progress')\"
                class=\"filter-tab ";
        // line 74
        if ((($context["filter"] ?? null) == "in_progress")) {
            yield "active";
        }
        yield "\"
            >
                <span class=\"filter-label\">In Progress</span>
                <span class=\"filter-count\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inProgressTicketsCount"] ?? null), "html", null, true);
        yield "</span>
            </button>
            <button
                onclick=\"setFilter('closed')\"
                class=\"filter-tab ";
        // line 81
        if ((($context["filter"] ?? null) == "closed")) {
            yield "active";
        }
        yield "\"
            >
                <span class=\"filter-label\">Closed</span>
                <span class=\"filter-count\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["closedTicketsCount"] ?? null), "html", null, true);
        yield "</span>
            </button>
            <button
                onclick=\"setFilter('high')\"
                class=\"filter-tab ";
        // line 88
        if ((($context["filter"] ?? null) == "high")) {
            yield "active";
        }
        yield "\"
            >
                <span class=\"filter-label\">High Priority</span>
                <span class=\"filter-count\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["highPriorityCount"] ?? null), "html", null, true);
        yield "</span>
            </button>
            <button
                onclick=\"setFilter('medium')\"
                class=\"filter-tab ";
        // line 95
        if ((($context["filter"] ?? null) == "medium")) {
            yield "active";
        }
        yield "\"
            >
                <span class=\"filter-label\">Medium Priority</span>
                <span class=\"filter-count\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mediumPriorityCount"] ?? null), "html", null, true);
        yield "</span>
            </button>
            <button
                onclick=\"setFilter('low')\"
                class=\"filter-tab ";
        // line 102
        if ((($context["filter"] ?? null) == "low")) {
            yield "active";
        }
        yield "\"
            >
                <span class=\"filter-label\">Low Priority</span>
                <span class=\"filter-count\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["lowPriorityCount"] ?? null), "html", null, true);
        yield "</span>
            </button>
        </div>
    </div>

    <!-- Tickets Grid -->
    <div class=\"tickets-content\">
        ";
        // line 112
        if (Twig\Extension\CoreExtension::testEmpty(($context["tickets"] ?? null))) {
            // line 113
            yield "            <div class=\"empty-state\">
                <div class=\"empty-icon\">🎫</div>
                <h3 class=\"empty-title\">
                    ";
            // line 116
            if ((($tmp = ($context["search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 117
                yield "                        No tickets found for \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
                yield "\"
                    ";
            } else {
                // line 119
                yield "                        ";
                if ((($context["filter"] ?? null) == "open")) {
                    yield "No open tickets
                        ";
                } elseif ((                // line 120
($context["filter"] ?? null) == "in_progress")) {
                    yield "No tickets in progress
                        ";
                } elseif ((                // line 121
($context["filter"] ?? null) == "closed")) {
                    yield "No closed tickets
                        ";
                } elseif ((                // line 122
($context["filter"] ?? null) == "high")) {
                    yield "No high priority tickets
                        ";
                } elseif ((                // line 123
($context["filter"] ?? null) == "medium")) {
                    yield "No medium priority tickets
                        ";
                } elseif ((                // line 124
($context["filter"] ?? null) == "low")) {
                    yield "No low priority tickets
                        ";
                } else {
                    // line 125
                    yield "No tickets created yet";
                }
                // line 126
                yield "                    ";
            }
            // line 127
            yield "                </h3>
                <p class=\"empty-subtitle\">
                    ";
            // line 129
            if ((($tmp = ($context["search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 130
                yield "                        Try adjusting your search terms or clear the search
                    ";
            } else {
                // line 132
                yield "                        ";
                if ((($context["filter"] ?? null) == "all")) {
                    yield "Get started by creating your first ticket
                        ";
                } else {
                    // line 133
                    yield "All tickets are filtered out or none match the current filter";
                }
                // line 134
                yield "                    ";
            }
            // line 135
            yield "                </p>
                ";
            // line 136
            if (((($context["filter"] ?? null) == "all") &&  !($context["search"] ?? null))) {
                // line 137
                yield "                    <a href=\"/tickets/create\" class=\"empty-action-btn\">
                        Create Your First Ticket
                    </a>
                ";
            }
            // line 141
            yield "            </div>
        ";
        } else {
            // line 143
            yield "            <div class=\"tickets-grid\">
                ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tickets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 145
                yield "                    <div class=\"ticket-card\" data-ticket-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 145), "html", null, true);
                yield "\">
                        <!-- Header -->
                        <div class=\"ticket-header\">
                            <div class=\"ticket-title-section\">
                                <h3 class=\"ticket-title\">";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "title", [], "any", false, false, false, 149), "html", null, true);
                yield "</h3>
                                <div class=\"ticket-meta\">
                                    <span class=\"ticket-id\">#";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 151),  -6), "html", null, true);
                yield "</span>
                                    <span class=\"ticket-date\">";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "createdAt", [], "any", false, false, false, 152), "M j, Y"), "html", null, true);
                yield "</span>
                                </div>
                            </div>
                            <div class=\"ticket-actions\">
                                <a href=\"/tickets/edit/";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 156), "html", null, true);
                yield "\" class=\"action-btn edit-btn\" title=\"Edit ticket\">
                                    ✏️
                                </a>
                                ";
                // line 162
                yield "                            </div>
                        </div>

                        <!-- Description -->
                        ";
                // line 166
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 167
                    yield "                            <p class=\"ticket-description\">
                                ";
                    // line 168
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 168)) > 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 168), 0, 120) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 168), "html", null, true)));
                    yield "
                            </p>
                        ";
                }
                // line 171
                yield "
                        <!-- Status and Priority -->
                        <div class=\"ticket-tags\">
                            <span 
                                class=\"status-tag\"
                                style=\"";
                // line 176
                yield $this->getTemplateForMacro("macro_getStatusStyle", $context, 176, $this->getSourceContext())->macro_getStatusStyle(...[CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 176)]);
                yield "\"
                            >
                                ";
                // line 178
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 178), ["_" => " "]), "html", null, true);
                yield "
                            </span>
                            <span 
                                class=\"priority-tag\"
                                style=\"";
                // line 182
                yield $this->getTemplateForMacro("macro_getPriorityStyle", $context, 182, $this->getSourceContext())->macro_getPriorityStyle(...[CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priority", [], "any", false, false, false, 182)]);
                yield "\"
                            >
                                ";
                // line 184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priority", [], "any", false, false, false, 184), "html", null, true);
                yield " priority
                            </span>
                        </div>

                        <!-- Status Indicator -->
                        <div 
                            class=\"status-indicator\"
                            style=\"background-color: ";
                // line 191
                yield $this->getTemplateForMacro("macro_getStatusColor", $context, 191, $this->getSourceContext())->macro_getStatusColor(...[CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 191)]);
                yield "\"
                        ></div>

                        <!-- Footer -->
                        <div class=\"ticket-footer\">
                            <div class=\"assignee\">
                                <span class=\"assignee-label\">Assigned to:</span>
                                <span class=\"assignee-name\">";
                // line 198
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "assignee", [], "any", false, false, false, 198), "html", null, true);
                yield "</span>
                            </div>
                            <div class=\"ticket-updated\">
                                Updated ";
                // line 201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "updatedAt", [], "any", false, false, false, 201), "M j, Y"), "html", null, true);
                yield "
                            </div>
                        </div>

                        <!-- Status Indicator -->
                        <div 
                            class=\"status-indicator\"
                            ";
                // line 209
                yield "                        ></div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            yield "            </div>
        ";
        }
        // line 214
        yield "    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id=\"deleteModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3>Delete Ticket</h3>
            <button onclick=\"closeModal()\" class=\"close-btn\">×</button>
        </div>
        <div class=\"modal-body\">
            <p id=\"deleteMessage\">Are you sure you want to delete this ticket? This action cannot be undone.</p>
        </div>
        <div class=\"modal-actions\">
            <button onclick=\"closeModal()\" class=\"btn btn-secondary\">Cancel</button>
            <button onclick=\"deleteTicket()\" class=\"btn btn-danger\">Delete</button>
        </div>
    </div>
</div>

<style>
/* Modal Actions */
.modal-actions {
    display: flex;
    gap: 1rem;
    padding: 1.5rem 2rem;
    border-top: 1px solid #e9ecef;
}

.btn {
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    flex: 1;
}

.btn-secondary {
    background: #f8f9fa;
    color: var(--text-primary);
    border: 2px solid #e9ecef;
}

.btn-secondary:hover {
    background: #e9ecef;
    transform: translateY(-1px);
}

.btn-danger {
    background: var(--error-color);
    color: white;
}

.btn-danger:hover {
    background: #c0392b;
    transform: translateY(-1px);
}

.close-btn {
    background: none;
    border: none;
    font-size: 1.5rem;
    cursor: pointer;
    color: var(--text-secondary);
    padding: 0.25rem;
    border-radius: 4px;
    transition: all 0.3s ease;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.close-btn:hover {
    background: #f8f9fa;
    color: var(--text-primary);
}

/* Modal backdrop with blur */
.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(5px);
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-content {
    background: white;
    border-radius: 16px;
    width: 100%;
    max-width: 400px;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    border: 1px solid rgba(0, 0, 0, 0.1);
    overflow: hidden;
    animation: modalSlideIn 0.3s ease;
}

@keyframes modalSlideIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.btn {
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    flex: 1;
}

.btn-secondary {
    background: #f8f9fa;
    color: var(--text-primary);
    border: 2px solid #e9ecef;
}

.btn-secondary:hover {
    background: #e9ecef;
}

.btn-danger {
    background: var(--error-color);
    color: white;
}

.btn-danger:hover {
    background: #c0392b;
    transform: translateY(-1px);
}

.close-btn {
    background: none;
    border: none;
    font-size: 1.5rem;
    cursor: pointer;
    color: var(--text-secondary);
    padding: 0.25rem;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.close-btn:hover {
    background: #f8f9fa;
    color: var(--text-primary);
}
.tickets-page {
    min-height: 100vh;
    padding-bottom: 2rem;
}

.tickets-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 2rem;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.header-content {
    flex: 1;
}

.tickets-title {
    font-size: 2.25rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
    line-height: 1.2;
}

.tickets-subtitle {
    font-size: 1.125rem;
    color: var(--text-secondary);
    max-width: 500px;
}

.create-ticket-btn {
    background: linear-gradient(45deg, var(--primary-color), #5a6fd8);
    color: white;
    border: none;
    padding: 1rem 1.5rem;
    border-radius: 12px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    cursor: pointer;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    transition: all 0.3s ease;
    white-space: nowrap;
    text-decoration: none;
}

.create-ticket-btn:hover {
    box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
    transform: translateY(-2px);
}

.btn-icon {
    font-size: 1.25rem;
}

.tickets-content {
    margin-top: 2rem;
}

.tickets-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 1.5rem;
}

/* Ticket Card Styles */
.ticket-card {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.05);
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    cursor: pointer;
}

.ticket-card:hover {
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    transform: translateY(-5px);
}

.ticket-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
    gap: 1rem;
}

.ticket-title-section {
    flex: 1;
}

.ticket-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--text-primary);
    margin: 0 0 0.5rem 0;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.ticket-meta {
    display: flex;
    gap: 1rem;
    font-size: 0.875rem;
    color: var(--text-secondary);
}

.ticket-id {
    font-family: 'Monaco', 'Consolas', monospace;
    background: rgba(102, 126, 234, 0.1);
    padding: 0.25rem 0.5rem;
    border-radius: 6px;
    color: var(--primary-color);
}

.ticket-date {
    display: flex;
    align-items: center;
}

.ticket-actions {
    display: flex;
    gap: 0.5rem;
}

.action-btn {
    background: none;
    border: none;
    padding: 0.5rem;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1.125rem;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    color: inherit;
}

.edit-btn:hover {
    background: rgba(52, 152, 219, 0.1);
}

.delete-btn:hover {
    background: rgba(231, 76, 60, 0.1);
}

.ticket-description {
    color: var(--text-secondary);
    line-height: 1.5;
    margin: 0 0 1rem 0;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.ticket-tags {
    display: flex;
    gap: 0.5rem;
    margin-bottom: 1rem;
    flex-wrap: wrap;
}

.status-tag,
.priority-tag {
    padding: 0.375rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: capitalize;
}

.ticket-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 1rem;
    border-top: 1px solid #e9ecef;
    font-size: 0.875rem;
}

.assignee {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.assignee-label {
    color: var(--text-secondary);
}

.assignee-name {
    color: var(--text-primary);
    font-weight: 500;
}

.ticket-updated {
    color: var(--text-secondary);
    font-size: 0.75rem;
}

.status-indicator {
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
}

/* Empty State */
.empty-state {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 4rem 2rem;
    background: white;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.empty-icon {
    font-size: 4rem;
    margin-bottom: 1.5rem;
    opacity: 0.7;
}

.empty-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 1rem;
}

.empty-subtitle {
    font-size: 1.125rem;
    color: var(--text-secondary);
    margin-bottom: 2rem;
    max-width: 400px;
    line-height: 1.6;
}

.empty-action-btn {
    background: linear-gradient(45deg, var(--primary-color), #5a6fd8);
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 12px;
    font-weight: 600;
    cursor: pointer;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    transition: all 0.3s ease;
    text-decoration: none;
}

.empty-action-btn:hover {
    box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
    transform: translateY(-2px);
}

/* Modal */
.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(5px);
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-content {
    background: white;
    border-radius: 16px;
    width: 100%;
    max-width: 400px;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    border: 1px solid rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.5rem 2rem;
    border-bottom: 1px solid #e9ecef;
}

.modal-header h3 {
    margin: 0;
    color: var(--text-primary);
    font-size: 1.25rem;
    font-weight: 600;
}

.modal-body {
    padding: 2rem;
}

.modal-body p {
    margin: 0;
    color: var(--text-secondary);
    line-height: 1.6;
    text-align: center;
}

.modal-actions {
    display: flex;
    gap: 1rem;
    padding: 1.5rem 2rem;
    border-top: 1px solid #e9ecef;
}

.btn-danger {
    background: var(--error-color);
    color: white;
}

.btn-danger:hover {
    background: #c0392b;
}

/* Filters */
.tickets-filters {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.05);
    margin-bottom: 2rem;
}

.search-container {
    margin-bottom: 1.5rem;
}

.search-input-wrapper {
    position: relative;
    max-width: 400px;
}

.search-icon {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1.125rem;
    color: var(--text-secondary);
}

.search-input {
    width: 100%;
    padding: 1rem 1rem 1rem 3rem;
    border: 2px solid #e9ecef;
    border-radius: 12px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: white;
}

.search-input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.clear-search {
    position: absolute;
    right: 1rem;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    font-size: 1.5rem;
    cursor: pointer;
    color: var(--text-secondary);
    padding: 0;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.clear-search:hover {
    background: #f8f9fa;
    color: var(--text-primary);
}

.filter-tabs {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.filter-tab {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.25rem;
    border: 2px solid #e9ecef;
    border-radius: 50px;
    background: white;
    color: var(--text-primary);
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
    font-size: 0.875rem;
}

.filter-tab:hover {
    border-color: var(--primary-color);
    background: rgba(102, 126, 234, 0.05);
    transform: scale(1.05);
}

.filter-tab.active {
    background: var(--primary-color);
    border-color: var(--primary-color);
    color: white;
}

.filter-count {
    background: rgba(255, 255, 255, 0.2);
    padding: 0.25rem 0.5rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    min-width: 24px;
    text-align: center;
}

.filter-tab:not(.active) .filter-count {
    background: #f8f9fa;
    color: var(--text-secondary);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .tickets-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    }
}

@media (max-width: 768px) {
    .tickets-header {
        flex-direction: column;
        align-items: stretch;
        text-align: center;
    }
    
    .tickets-title {
        font-size: 2rem;
    }
    
    .tickets-grid {
        grid-template-columns: 1fr;
    }
    
    .create-ticket-btn {
        justify-content: center;
    }
    
    .modal-content {
        margin: 1rem;
    }
    
    .modal-actions {
        flex-direction: column-reverse;
    }
    
    .filter-tabs {
        gap: 0.25rem;
    }
    
    .filter-tab {
        padding: 0.5rem 1rem;
        font-size: 0.8rem;
    }
}

@media (max-width: 480px) {
    .tickets-title {
        font-size: 1.75rem;
    }
    
    .tickets-grid {
        grid-template-columns: 1fr;
    }
    
    .ticket-header {
        flex-direction: column;
        align-items: stretch;
    }
    
    .ticket-actions {
        align-self: flex-end;
    }
    
    .ticket-footer {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }
    
    .filter-tabs {
        justify-content: center;
    }
    
    .filter-tab {
        flex: 1;
        min-width: 100px;
        justify-content: center;
    }
}
</style>

<script>
let currentTicketId = null;

function getStatusColor(status) {
    switch (status) {
        case 'open': return '#2ecc71';
        case 'in_progress': return '#f39c12';
        case 'closed': return '#95a5a6';
        default: return '#bdc3c7';
    }
}

function getPriorityColor(priority) {
    switch (priority) {
        case 'high': return '#e74c3c';
        case 'medium': return '#f39c12';
        case 'low': return '#27ae60';
        default: return '#95a5a6';
    }
}

function getStatusStyle(status) {
    const color = getStatusColor(status);
    return `background-color: \${color}20; color: \${color}; border: 1px solid \${color}40;`;
}

function getPriorityStyle(priority) {
    const color = getPriorityColor(priority);
    return `background-color: \${color}20; color: \${color}; border: 1px solid \${color}40;`;
}

function setFilter(filter) {
    const url = new URL(window.location.href);
    url.searchParams.set('filter', filter);
    window.location.href = url.toString();
}

function clearSearch() {
    const url = new URL(window.location.href);
    url.searchParams.delete('search');
    window.location.href = url.toString();
}

function openCreateTicketModal() {
    // This would open your create ticket modal
    // You'll need to implement this based on your existing modal structure
    console.log('Open create ticket modal');
    // Example: document.getElementById('createTicketModal').style.display = 'flex';
}

";
        // line 971
        yield "
";
        // line 977
        yield "
";
        // line 1004
        yield "
let currentTicketId = null;
let tickets = ";
        // line 1006
        yield json_encode(($context["tickets"] ?? null));
        yield "; // Assuming tickets are passed from backend

function confirmDelete(ticketId, ticketTitle) {
    currentTicketId = ticketId;
    const modal = document.getElementById('deleteModal');
    const message = document.getElementById('deleteMessage');
    message.textContent = `Are you sure you want to delete \"\${ticketTitle}\"? This action cannot be undone.`;
    modal.style.display = 'flex';
}

function closeModal() {
    const modal = document.getElementById('deleteModal');
    modal.style.display = 'none';
    currentTicketId = null;
}

function deleteTicket() {
    if (currentTicketId) {
        // Frontend deletion - remove from DOM
        const ticketElement = document.querySelector(`[data-ticket-id=\"\${currentTicketId}\"]`);
        if (ticketElement) {
            ticketElement.remove();
        }
        
        // If you want to persist in localStorage (optional)
        const savedTickets = JSON.parse(localStorage.getItem('tickets') || '[]');
        const updatedTickets = savedTickets.filter(ticket => ticket.id !== currentTicketId);
        localStorage.setItem('tickets', JSON.stringify(updatedTickets));
        
        closeModal();
        
        // Show success message or update UI
        showNotification('Ticket deleted successfully', 'success');
    }
}

function showNotification(message, type) {
    // Simple notification implementation
    const notification = document.createElement('div');
    notification.className = `notification \${type}`;
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 1rem 1.5rem;
        background: \${type === 'success' ? '#2ecc71' : '#e74c3c'};
        color: white;
        border-radius: 8px;
        z-index: 10000;
    `;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Search functionality
document.getElementById('searchInput')?.addEventListener('input', function(e) {
    const searchTerm = e.target.value;
    const url = new URL(window.location.href);
    
    if (searchTerm) {
        url.searchParams.set('search', searchTerm);
    } else {
        url.searchParams.delete('search');
    }
    
    // Debounce the search
    clearTimeout(window.searchTimeout);
    window.searchTimeout = setTimeout(() => {
        window.location.href = url.toString();
    }, 500);
});

// Close modal on overlay click
document.getElementById('deleteModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});
</script>
";
        yield from [];
    }

    // line 1091
    public function macro_getStatusColor($status = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "status" => $status,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 1092
            yield "    ";
            if ((($context["status"] ?? null) == "open")) {
                yield "#2ecc71
    ";
            } elseif ((            // line 1093
($context["status"] ?? null) == "in_progress")) {
                yield "#f39c12
    ";
            } elseif ((            // line 1094
($context["status"] ?? null) == "closed")) {
                yield "#95a5a6
    ";
            } else {
                // line 1095
                yield "#bdc3c7";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 1098
    public function macro_getStatusStyle($status = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "status" => $status,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 1099
            yield "    ";
            $context["color"] = $this->getTemplateForMacro("macro_getStatusColor", $context, 1099, $this->getSourceContext())->macro_getStatusColor(...[($context["status"] ?? null)]);
            // line 1100
            yield "    background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["color"] ?? null), "html", null, true);
            yield "20; color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["color"] ?? null), "html", null, true);
            yield "; border: 1px solid ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["color"] ?? null), "html", null, true);
            yield "40;
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 1103
    public function macro_getPriorityColor($priority = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "priority" => $priority,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 1104
            yield "    ";
            if ((($context["priority"] ?? null) == "high")) {
                yield "#e74c3c
    ";
            } elseif ((            // line 1105
($context["priority"] ?? null) == "medium")) {
                yield "#f39c12
    ";
            } elseif ((            // line 1106
($context["priority"] ?? null) == "low")) {
                yield "#27ae60
    ";
            } else {
                // line 1107
                yield "#95a5a6";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 1110
    public function macro_getPriorityStyle($priority = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "priority" => $priority,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 1111
            yield "    ";
            $context["color"] = $this->getTemplateForMacro("macro_getPriorityColor", $context, 1111, $this->getSourceContext())->macro_getPriorityColor(...[($context["priority"] ?? null)]);
            // line 1112
            yield "    background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["color"] ?? null), "html", null, true);
            yield "20; color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["color"] ?? null), "html", null, true);
            yield "; border: 1px solid ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["color"] ?? null), "html", null, true);
            yield "40;
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/tickets/index.html.twig";
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
        return array (  1425 => 1112,  1422 => 1111,  1410 => 1110,  1403 => 1107,  1398 => 1106,  1394 => 1105,  1389 => 1104,  1377 => 1103,  1364 => 1100,  1361 => 1099,  1349 => 1098,  1342 => 1095,  1337 => 1094,  1333 => 1093,  1328 => 1092,  1316 => 1091,  1227 => 1006,  1223 => 1004,  1220 => 977,  1217 => 971,  465 => 214,  461 => 212,  453 => 209,  443 => 201,  437 => 198,  427 => 191,  417 => 184,  412 => 182,  405 => 178,  400 => 176,  393 => 171,  387 => 168,  384 => 167,  382 => 166,  376 => 162,  370 => 156,  363 => 152,  359 => 151,  354 => 149,  346 => 145,  342 => 144,  339 => 143,  335 => 141,  329 => 137,  327 => 136,  324 => 135,  321 => 134,  318 => 133,  312 => 132,  308 => 130,  306 => 129,  302 => 127,  299 => 126,  296 => 125,  291 => 124,  287 => 123,  283 => 122,  279 => 121,  275 => 120,  270 => 119,  264 => 117,  262 => 116,  257 => 113,  255 => 112,  245 => 105,  237 => 102,  230 => 98,  222 => 95,  215 => 91,  207 => 88,  200 => 84,  192 => 81,  185 => 77,  177 => 74,  170 => 70,  162 => 67,  155 => 63,  147 => 60,  142 => 57,  139 => 56,  136 => 55,  133 => 54,  130 => 53,  127 => 52,  124 => 51,  122 => 50,  115 => 45,  111 => 43,  109 => 42,  103 => 39,  89 => 27,  73 => 7,  66 => 6,  55 => 3,  50 => 1,  48 => 4,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"layouts/app.html.twig\" %}

{% block title %}Tickets - TicketFlow{% endblock %}
{% set current_page = 'tickets' %}

{% block app_content %}
<div class=\"tickets-page\">
    <!-- Header -->
    <div class=\"tickets-header\">
        <div class=\"header-content\">
            <h1 class=\"tickets-title\">Ticket Management</h1>
            <p class=\"tickets-subtitle\">
                Manage all your support tickets in one place
            </p>
        </div>

        <button onclick=\"openCreateTicketModal()\" class=\"create-ticket-btn\">
            <span class=\"btn-icon\">➕</span>
            Create Ticket
        </button>
{#         
        <a href=\"/tickets/create\" class=\"create-ticket-btn\">
        
            <span class=\"btn-icon\">➕</span>
            Create Ticket
        </a> #}
    </div>

    <!-- Filters and Search -->
    <div class=\"tickets-filters\">
        <!-- Search Bar -->
        <div class=\"search-container\">
            <div class=\"search-input-wrapper\">
                <span class=\"search-icon\">🔍</span>
                <input
                    type=\"text\"
                    id=\"searchInput\"
                    placeholder=\"Search tickets...\"
                    value=\"{{ search }}\"
                    class=\"search-input\"
                />
                {% if search %}
                    <button onclick=\"clearSearch()\" class=\"clear-search\">×</button>
                {% endif %}
            </div>
        </div>

        <!-- Filter Tabs -->
        <div class=\"filter-tabs\">
            {% set allTicketsCount = tickets|length %}
            {% set openTicketsCount = tickets|filter(t => t.status == 'open')|length %}
            {% set inProgressTicketsCount = tickets|filter(t => t.status == 'in_progress')|length %}
            {% set closedTicketsCount = tickets|filter(t => t.status == 'closed')|length %}
            {% set highPriorityCount = tickets|filter(t => t.priority == 'high')|length %}
            {% set mediumPriorityCount = tickets|filter(t => t.priority == 'medium')|length %}
            {% set lowPriorityCount = tickets|filter(t => t.priority == 'low')|length %}
            
            <button
                onclick=\"setFilter('all')\"
                class=\"filter-tab {% if filter == 'all' %}active{% endif %}\"
            >
                <span class=\"filter-label\">All Tickets</span>
                <span class=\"filter-count\">{{ allTicketsCount }}</span>
            </button>
            <button
                onclick=\"setFilter('open')\"
                class=\"filter-tab {% if filter == 'open' %}active{% endif %}\"
            >
                <span class=\"filter-label\">Open</span>
                <span class=\"filter-count\">{{ openTicketsCount }}</span>
            </button>
            <button
                onclick=\"setFilter('in_progress')\"
                class=\"filter-tab {% if filter == 'in_progress' %}active{% endif %}\"
            >
                <span class=\"filter-label\">In Progress</span>
                <span class=\"filter-count\">{{ inProgressTicketsCount }}</span>
            </button>
            <button
                onclick=\"setFilter('closed')\"
                class=\"filter-tab {% if filter == 'closed' %}active{% endif %}\"
            >
                <span class=\"filter-label\">Closed</span>
                <span class=\"filter-count\">{{ closedTicketsCount }}</span>
            </button>
            <button
                onclick=\"setFilter('high')\"
                class=\"filter-tab {% if filter == 'high' %}active{% endif %}\"
            >
                <span class=\"filter-label\">High Priority</span>
                <span class=\"filter-count\">{{ highPriorityCount }}</span>
            </button>
            <button
                onclick=\"setFilter('medium')\"
                class=\"filter-tab {% if filter == 'medium' %}active{% endif %}\"
            >
                <span class=\"filter-label\">Medium Priority</span>
                <span class=\"filter-count\">{{ mediumPriorityCount }}</span>
            </button>
            <button
                onclick=\"setFilter('low')\"
                class=\"filter-tab {% if filter == 'low' %}active{% endif %}\"
            >
                <span class=\"filter-label\">Low Priority</span>
                <span class=\"filter-count\">{{ lowPriorityCount }}</span>
            </button>
        </div>
    </div>

    <!-- Tickets Grid -->
    <div class=\"tickets-content\">
        {% if tickets is empty %}
            <div class=\"empty-state\">
                <div class=\"empty-icon\">🎫</div>
                <h3 class=\"empty-title\">
                    {% if search %}
                        No tickets found for \"{{ search }}\"
                    {% else %}
                        {% if filter == 'open' %}No open tickets
                        {% elseif filter == 'in_progress' %}No tickets in progress
                        {% elseif filter == 'closed' %}No closed tickets
                        {% elseif filter == 'high' %}No high priority tickets
                        {% elseif filter == 'medium' %}No medium priority tickets
                        {% elseif filter == 'low' %}No low priority tickets
                        {% else %}No tickets created yet{% endif %}
                    {% endif %}
                </h3>
                <p class=\"empty-subtitle\">
                    {% if search %}
                        Try adjusting your search terms or clear the search
                    {% else %}
                        {% if filter == 'all' %}Get started by creating your first ticket
                        {% else %}All tickets are filtered out or none match the current filter{% endif %}
                    {% endif %}
                </p>
                {% if filter == 'all' and not search %}
                    <a href=\"/tickets/create\" class=\"empty-action-btn\">
                        Create Your First Ticket
                    </a>
                {% endif %}
            </div>
        {% else %}
            <div class=\"tickets-grid\">
                {% for ticket in tickets %}
                    <div class=\"ticket-card\" data-ticket-id=\"{{ ticket.id }}\">
                        <!-- Header -->
                        <div class=\"ticket-header\">
                            <div class=\"ticket-title-section\">
                                <h3 class=\"ticket-title\">{{ ticket.title }}</h3>
                                <div class=\"ticket-meta\">
                                    <span class=\"ticket-id\">#{{ ticket.id|slice(-6) }}</span>
                                    <span class=\"ticket-date\">{{ ticket.createdAt|date('M j, Y') }}</span>
                                </div>
                            </div>
                            <div class=\"ticket-actions\">
                                <a href=\"/tickets/edit/{{ ticket.id }}\" class=\"action-btn edit-btn\" title=\"Edit ticket\">
                                    ✏️
                                </a>
                                {# <button onclick=\"confirmDelete('{{ ticket.id }}', '{{ ticket.title|e('js') }}')\" class=\"action-btn delete-btn\" title=\"Delete ticket\">
                                    🗑️
                                </button> #}
                            </div>
                        </div>

                        <!-- Description -->
                        {% if ticket.description %}
                            <p class=\"ticket-description\">
                                {{ ticket.description|length > 120 ? ticket.description|slice(0, 120) ~ '...' : ticket.description }}
                            </p>
                        {% endif %}

                        <!-- Status and Priority -->
                        <div class=\"ticket-tags\">
                            <span 
                                class=\"status-tag\"
                                style=\"{{ _self.getStatusStyle(ticket.status) }}\"
                            >
                                {{ ticket.status|replace({'_': ' '}) }}
                            </span>
                            <span 
                                class=\"priority-tag\"
                                style=\"{{ _self.getPriorityStyle(ticket.priority) }}\"
                            >
                                {{ ticket.priority }} priority
                            </span>
                        </div>

                        <!-- Status Indicator -->
                        <div 
                            class=\"status-indicator\"
                            style=\"background-color: {{ _self.getStatusColor(ticket.status) }}\"
                        ></div>

                        <!-- Footer -->
                        <div class=\"ticket-footer\">
                            <div class=\"assignee\">
                                <span class=\"assignee-label\">Assigned to:</span>
                                <span class=\"assignee-name\">{{ ticket.assignee }}</span>
                            </div>
                            <div class=\"ticket-updated\">
                                Updated {{ ticket.updatedAt|date('M j, Y') }}
                            </div>
                        </div>

                        <!-- Status Indicator -->
                        <div 
                            class=\"status-indicator\"
                            {# style=\"background-color: {{ getStatusColor(ticket.status) }}\" #}
                        ></div>
                    </div>
                {% endfor %}
            </div>
        {% endif %}
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id=\"deleteModal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3>Delete Ticket</h3>
            <button onclick=\"closeModal()\" class=\"close-btn\">×</button>
        </div>
        <div class=\"modal-body\">
            <p id=\"deleteMessage\">Are you sure you want to delete this ticket? This action cannot be undone.</p>
        </div>
        <div class=\"modal-actions\">
            <button onclick=\"closeModal()\" class=\"btn btn-secondary\">Cancel</button>
            <button onclick=\"deleteTicket()\" class=\"btn btn-danger\">Delete</button>
        </div>
    </div>
</div>

<style>
/* Modal Actions */
.modal-actions {
    display: flex;
    gap: 1rem;
    padding: 1.5rem 2rem;
    border-top: 1px solid #e9ecef;
}

.btn {
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    flex: 1;
}

.btn-secondary {
    background: #f8f9fa;
    color: var(--text-primary);
    border: 2px solid #e9ecef;
}

.btn-secondary:hover {
    background: #e9ecef;
    transform: translateY(-1px);
}

.btn-danger {
    background: var(--error-color);
    color: white;
}

.btn-danger:hover {
    background: #c0392b;
    transform: translateY(-1px);
}

.close-btn {
    background: none;
    border: none;
    font-size: 1.5rem;
    cursor: pointer;
    color: var(--text-secondary);
    padding: 0.25rem;
    border-radius: 4px;
    transition: all 0.3s ease;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.close-btn:hover {
    background: #f8f9fa;
    color: var(--text-primary);
}

/* Modal backdrop with blur */
.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(5px);
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-content {
    background: white;
    border-radius: 16px;
    width: 100%;
    max-width: 400px;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    border: 1px solid rgba(0, 0, 0, 0.1);
    overflow: hidden;
    animation: modalSlideIn 0.3s ease;
}

@keyframes modalSlideIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.btn {
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    flex: 1;
}

.btn-secondary {
    background: #f8f9fa;
    color: var(--text-primary);
    border: 2px solid #e9ecef;
}

.btn-secondary:hover {
    background: #e9ecef;
}

.btn-danger {
    background: var(--error-color);
    color: white;
}

.btn-danger:hover {
    background: #c0392b;
    transform: translateY(-1px);
}

.close-btn {
    background: none;
    border: none;
    font-size: 1.5rem;
    cursor: pointer;
    color: var(--text-secondary);
    padding: 0.25rem;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.close-btn:hover {
    background: #f8f9fa;
    color: var(--text-primary);
}
.tickets-page {
    min-height: 100vh;
    padding-bottom: 2rem;
}

.tickets-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 2rem;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.header-content {
    flex: 1;
}

.tickets-title {
    font-size: 2.25rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
    line-height: 1.2;
}

.tickets-subtitle {
    font-size: 1.125rem;
    color: var(--text-secondary);
    max-width: 500px;
}

.create-ticket-btn {
    background: linear-gradient(45deg, var(--primary-color), #5a6fd8);
    color: white;
    border: none;
    padding: 1rem 1.5rem;
    border-radius: 12px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    cursor: pointer;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    transition: all 0.3s ease;
    white-space: nowrap;
    text-decoration: none;
}

.create-ticket-btn:hover {
    box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
    transform: translateY(-2px);
}

.btn-icon {
    font-size: 1.25rem;
}

.tickets-content {
    margin-top: 2rem;
}

.tickets-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 1.5rem;
}

/* Ticket Card Styles */
.ticket-card {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.05);
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    cursor: pointer;
}

.ticket-card:hover {
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    transform: translateY(-5px);
}

.ticket-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
    gap: 1rem;
}

.ticket-title-section {
    flex: 1;
}

.ticket-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--text-primary);
    margin: 0 0 0.5rem 0;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.ticket-meta {
    display: flex;
    gap: 1rem;
    font-size: 0.875rem;
    color: var(--text-secondary);
}

.ticket-id {
    font-family: 'Monaco', 'Consolas', monospace;
    background: rgba(102, 126, 234, 0.1);
    padding: 0.25rem 0.5rem;
    border-radius: 6px;
    color: var(--primary-color);
}

.ticket-date {
    display: flex;
    align-items: center;
}

.ticket-actions {
    display: flex;
    gap: 0.5rem;
}

.action-btn {
    background: none;
    border: none;
    padding: 0.5rem;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1.125rem;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    color: inherit;
}

.edit-btn:hover {
    background: rgba(52, 152, 219, 0.1);
}

.delete-btn:hover {
    background: rgba(231, 76, 60, 0.1);
}

.ticket-description {
    color: var(--text-secondary);
    line-height: 1.5;
    margin: 0 0 1rem 0;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.ticket-tags {
    display: flex;
    gap: 0.5rem;
    margin-bottom: 1rem;
    flex-wrap: wrap;
}

.status-tag,
.priority-tag {
    padding: 0.375rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: capitalize;
}

.ticket-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 1rem;
    border-top: 1px solid #e9ecef;
    font-size: 0.875rem;
}

.assignee {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.assignee-label {
    color: var(--text-secondary);
}

.assignee-name {
    color: var(--text-primary);
    font-weight: 500;
}

.ticket-updated {
    color: var(--text-secondary);
    font-size: 0.75rem;
}

.status-indicator {
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
}

/* Empty State */
.empty-state {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 4rem 2rem;
    background: white;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.empty-icon {
    font-size: 4rem;
    margin-bottom: 1.5rem;
    opacity: 0.7;
}

.empty-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 1rem;
}

.empty-subtitle {
    font-size: 1.125rem;
    color: var(--text-secondary);
    margin-bottom: 2rem;
    max-width: 400px;
    line-height: 1.6;
}

.empty-action-btn {
    background: linear-gradient(45deg, var(--primary-color), #5a6fd8);
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 12px;
    font-weight: 600;
    cursor: pointer;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    transition: all 0.3s ease;
    text-decoration: none;
}

.empty-action-btn:hover {
    box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
    transform: translateY(-2px);
}

/* Modal */
.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(5px);
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-content {
    background: white;
    border-radius: 16px;
    width: 100%;
    max-width: 400px;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    border: 1px solid rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.5rem 2rem;
    border-bottom: 1px solid #e9ecef;
}

.modal-header h3 {
    margin: 0;
    color: var(--text-primary);
    font-size: 1.25rem;
    font-weight: 600;
}

.modal-body {
    padding: 2rem;
}

.modal-body p {
    margin: 0;
    color: var(--text-secondary);
    line-height: 1.6;
    text-align: center;
}

.modal-actions {
    display: flex;
    gap: 1rem;
    padding: 1.5rem 2rem;
    border-top: 1px solid #e9ecef;
}

.btn-danger {
    background: var(--error-color);
    color: white;
}

.btn-danger:hover {
    background: #c0392b;
}

/* Filters */
.tickets-filters {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.05);
    margin-bottom: 2rem;
}

.search-container {
    margin-bottom: 1.5rem;
}

.search-input-wrapper {
    position: relative;
    max-width: 400px;
}

.search-icon {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1.125rem;
    color: var(--text-secondary);
}

.search-input {
    width: 100%;
    padding: 1rem 1rem 1rem 3rem;
    border: 2px solid #e9ecef;
    border-radius: 12px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: white;
}

.search-input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.clear-search {
    position: absolute;
    right: 1rem;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    font-size: 1.5rem;
    cursor: pointer;
    color: var(--text-secondary);
    padding: 0;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.clear-search:hover {
    background: #f8f9fa;
    color: var(--text-primary);
}

.filter-tabs {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.filter-tab {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.25rem;
    border: 2px solid #e9ecef;
    border-radius: 50px;
    background: white;
    color: var(--text-primary);
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
    font-size: 0.875rem;
}

.filter-tab:hover {
    border-color: var(--primary-color);
    background: rgba(102, 126, 234, 0.05);
    transform: scale(1.05);
}

.filter-tab.active {
    background: var(--primary-color);
    border-color: var(--primary-color);
    color: white;
}

.filter-count {
    background: rgba(255, 255, 255, 0.2);
    padding: 0.25rem 0.5rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    min-width: 24px;
    text-align: center;
}

.filter-tab:not(.active) .filter-count {
    background: #f8f9fa;
    color: var(--text-secondary);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .tickets-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    }
}

@media (max-width: 768px) {
    .tickets-header {
        flex-direction: column;
        align-items: stretch;
        text-align: center;
    }
    
    .tickets-title {
        font-size: 2rem;
    }
    
    .tickets-grid {
        grid-template-columns: 1fr;
    }
    
    .create-ticket-btn {
        justify-content: center;
    }
    
    .modal-content {
        margin: 1rem;
    }
    
    .modal-actions {
        flex-direction: column-reverse;
    }
    
    .filter-tabs {
        gap: 0.25rem;
    }
    
    .filter-tab {
        padding: 0.5rem 1rem;
        font-size: 0.8rem;
    }
}

@media (max-width: 480px) {
    .tickets-title {
        font-size: 1.75rem;
    }
    
    .tickets-grid {
        grid-template-columns: 1fr;
    }
    
    .ticket-header {
        flex-direction: column;
        align-items: stretch;
    }
    
    .ticket-actions {
        align-self: flex-end;
    }
    
    .ticket-footer {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }
    
    .filter-tabs {
        justify-content: center;
    }
    
    .filter-tab {
        flex: 1;
        min-width: 100px;
        justify-content: center;
    }
}
</style>

<script>
let currentTicketId = null;

function getStatusColor(status) {
    switch (status) {
        case 'open': return '#2ecc71';
        case 'in_progress': return '#f39c12';
        case 'closed': return '#95a5a6';
        default: return '#bdc3c7';
    }
}

function getPriorityColor(priority) {
    switch (priority) {
        case 'high': return '#e74c3c';
        case 'medium': return '#f39c12';
        case 'low': return '#27ae60';
        default: return '#95a5a6';
    }
}

function getStatusStyle(status) {
    const color = getStatusColor(status);
    return `background-color: \${color}20; color: \${color}; border: 1px solid \${color}40;`;
}

function getPriorityStyle(priority) {
    const color = getPriorityColor(priority);
    return `background-color: \${color}20; color: \${color}; border: 1px solid \${color}40;`;
}

function setFilter(filter) {
    const url = new URL(window.location.href);
    url.searchParams.set('filter', filter);
    window.location.href = url.toString();
}

function clearSearch() {
    const url = new URL(window.location.href);
    url.searchParams.delete('search');
    window.location.href = url.toString();
}

function openCreateTicketModal() {
    // This would open your create ticket modal
    // You'll need to implement this based on your existing modal structure
    console.log('Open create ticket modal');
    // Example: document.getElementById('createTicketModal').style.display = 'flex';
}

{# function confirmDelete(ticketId, ticketTitle) {
    currentTicketId = ticketId;
    const modal = document.getElementById('deleteModal');
    const message = document.getElementById('deleteMessage');
    message.textContent = `Are you sure you want to delete \"\${ticketTitle}\"? This action cannot be undone.`;
    modal.style.display = 'flex';
} #}

{# function closeModal() {
    const modal = document.getElementById('deleteModal');
    modal.style.display = 'none';
    currentTicketId = null;
} #}

{# function deleteTicket() {
    if (currentTicketId) {
        // Send DELETE request via fetch API
        fetch(`/tickets/delete/\${currentTicketId}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
            }
        })
        .then(response => {
            if (response.ok) {
                // Reload the page to see updated ticket list
                window.location.reload();
            } else {
                alert('Error deleting ticket');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error deleting ticket');
        })
        .finally(() => {
            closeModal();
        });
    }
} #}

let currentTicketId = null;
let tickets = {{ tickets|json_encode|raw }}; // Assuming tickets are passed from backend

function confirmDelete(ticketId, ticketTitle) {
    currentTicketId = ticketId;
    const modal = document.getElementById('deleteModal');
    const message = document.getElementById('deleteMessage');
    message.textContent = `Are you sure you want to delete \"\${ticketTitle}\"? This action cannot be undone.`;
    modal.style.display = 'flex';
}

function closeModal() {
    const modal = document.getElementById('deleteModal');
    modal.style.display = 'none';
    currentTicketId = null;
}

function deleteTicket() {
    if (currentTicketId) {
        // Frontend deletion - remove from DOM
        const ticketElement = document.querySelector(`[data-ticket-id=\"\${currentTicketId}\"]`);
        if (ticketElement) {
            ticketElement.remove();
        }
        
        // If you want to persist in localStorage (optional)
        const savedTickets = JSON.parse(localStorage.getItem('tickets') || '[]');
        const updatedTickets = savedTickets.filter(ticket => ticket.id !== currentTicketId);
        localStorage.setItem('tickets', JSON.stringify(updatedTickets));
        
        closeModal();
        
        // Show success message or update UI
        showNotification('Ticket deleted successfully', 'success');
    }
}

function showNotification(message, type) {
    // Simple notification implementation
    const notification = document.createElement('div');
    notification.className = `notification \${type}`;
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 1rem 1.5rem;
        background: \${type === 'success' ? '#2ecc71' : '#e74c3c'};
        color: white;
        border-radius: 8px;
        z-index: 10000;
    `;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Search functionality
document.getElementById('searchInput')?.addEventListener('input', function(e) {
    const searchTerm = e.target.value;
    const url = new URL(window.location.href);
    
    if (searchTerm) {
        url.searchParams.set('search', searchTerm);
    } else {
        url.searchParams.delete('search');
    }
    
    // Debounce the search
    clearTimeout(window.searchTimeout);
    window.searchTimeout = setTimeout(() => {
        window.location.href = url.toString();
    }, 500);
});

// Close modal on overlay click
document.getElementById('deleteModal')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});
</script>
{% endblock %}

{% macro getStatusColor(status) %}
    {% if status == 'open' %}#2ecc71
    {% elseif status == 'in_progress' %}#f39c12
    {% elseif status == 'closed' %}#95a5a6
    {% else %}#bdc3c7{% endif %}
{% endmacro %}

{% macro getStatusStyle(status) %}
    {% set color = _self.getStatusColor(status) %}
    background-color: {{ color }}20; color: {{ color }}; border: 1px solid {{ color }}40;
{% endmacro %}

{% macro getPriorityColor(priority) %}
    {% if priority == 'high' %}#e74c3c
    {% elseif priority == 'medium' %}#f39c12
    {% elseif priority == 'low' %}#27ae60
    {% else %}#95a5a6{% endif %}
{% endmacro %}

{% macro getPriorityStyle(priority) %}
    {% set color = _self.getPriorityColor(priority) %}
    background-color: {{ color }}20; color: {{ color }}; border: 1px solid {{ color }}40;
{% endmacro %}", "pages/tickets/index.html.twig", "D:\\Documents\\VsCode\\HNG\\Stage2\\stage2-twig\\templates\\pages\\tickets\\index.html.twig");
    }
}
