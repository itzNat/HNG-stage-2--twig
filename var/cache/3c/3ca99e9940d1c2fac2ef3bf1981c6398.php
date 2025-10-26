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

/* pages/dashboard.html.twig */
class __TwigTemplate_d510fc09ef05b76888aa72df2634856a extends Template
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
        $context["current_page"] = "dashboard";
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
        yield "Dashboard - TicketFlow";
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
        yield "<div class=\"dashboard\">
    <!-- Header -->
    <div class=\"dashboard-header\">
        <div class=\"header-content\">
            <h1 class=\"dashboard-title\">
                Welcome back, ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 13), "@")), "html", null, true);
        yield "! 👋
            </h1>
            <p class=\"dashboard-subtitle\">
                Here's what's happening with your ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 16), "html", null, true);
        yield " tickets today.
            </p>
        </div>
        <a href=\"/tickets\" class=\"cta-button\">
            <span>Manage Tickets</span>
            <span class=\"cta-icon\">🎫</span>
        </a>
    </div>

    <!-- Statistics Grid -->
    <div class=\"stats-grid\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["title" => "Total Tickets", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 28
($context["stats"] ?? null), "total", [], "any", false, false, false, 28), "icon" => "📋", "color" => "var(--primary-color)", "description" => "All tickets in the system"], ["title" => "Open Tickets", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["stats"] ?? null), "open", [], "any", false, false, false, 29), "icon" => "🟢", "color" => "var(--success-color)", "description" => "Requires attention"], ["title" => "In Progress", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["stats"] ?? null), "inProgress", [], "any", false, false, false, 30), "icon" => "🟡", "color" => "var(--warning-color)", "description" => "Currently being worked on"], ["title" => "Resolved", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["stats"] ?? null), "closed", [], "any", false, false, false, 31), "icon" => "🔵", "color" => "var(--text-secondary)", "description" => "Successfully closed"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 33
            yield "            <div class=\"stat-card glass-card\">
                <div class=\"stat-header\">
                    <div class=\"stat-icon\" style=\"background-color: ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "color", [], "any", false, false, false, 35), "html", null, true);
            yield "20\">
                        <span style=\"color: ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "color", [], "any", false, false, false, 36), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "icon", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
                    </div>
                    <div class=\"stat-value\">
                        ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "value", [], "any", false, false, false, 39), "html", null, true);
            yield "
                    </div>
                </div>
                <h3 class=\"stat-title\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "title", [], "any", false, false, false, 42), "html", null, true);
            yield "</h3>
                <p class=\"stat-description\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "description", [], "any", false, false, false, 43), "html", null, true);
            yield "</p>
                <div class=\"stat-progress\"></div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['card'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "    </div>

    <div class=\"dashboard-content\">
        <!-- Recent Activity -->
        <div class=\"activity-section\">
            <div class=\"section-header\">
                <h2 class=\"section-title\">Recent Activity</h2>
                <span class=\"section-badge\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["recentActivities"] ?? null)), "html", null, true);
        yield "</span>
            </div>
            <div class=\"activity-list\">
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["recentActivities"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 58
            yield "                    <div class=\"activity-item\">
                        <div class=\"activity-icon\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "icon", [], "any", false, false, false, 59), "html", null, true);
            yield "</div>
                        <div class=\"activity-content\">
                            <p class=\"activity-text\">
                                <strong>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "user", [], "any", false, false, false, 62), "html", null, true);
            yield "</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "action", [], "any", false, false, false, 62), "html", null, true);
            yield " ticket 
                                <strong> \"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "ticket", [], "any", false, false, false, 63), "html", null, true);
            yield "\"</strong>
                            </p>
                            <span class=\"activity-time\">
                                ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('time_ago')->getCallable()($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "time", [], "any", false, false, false, 66), "Y-m-d H:i:s")), "html", null, true);
            yield "
                            </span>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 70
        if (!$context['_iterated']) {
            // line 71
            yield "                    <div class=\"empty-activities\">
                        <p>No recent activities</p>
                        <small>Activities will appear here when you create or update tickets</small>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "            </div>
        </div>

        <!-- Quick Actions -->
        <div class=\"quick-actions-section\">
            <div class=\"section-header\">
                <h2 class=\"section-title\">Quick Actions</h2>
            </div>
            <div class=\"quick-actions-grid\">
                <a href=\"/tickets/create\" class=\"quick-action-card\">
                    <div class=\"action-icon\">➕</div>
                    <h3>Create Ticket</h3>
                    <p>Create a new support ticket</p>
                </a>
                
                <a href=\"/tickets?filter=open\" class=\"quick-action-card\">
                    <div class=\"action-icon\">🟢</div>
                    <h3>View Open</h3>
                    <p>See all open tickets (";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "open", [], "any", false, false, false, 94), "html", null, true);
        yield ")</p>
                </a>
                
                <a href=\"/tickets?filter=in_progress\" class=\"quick-action-card\">
                    <div class=\"action-icon\">🟡</div>
                    <h3>In Progress</h3>
                    <p>Tickets being worked on (";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "inProgress", [], "any", false, false, false, 100), "html", null, true);
        yield ")</p>
                </a>
                
                <a href=\"/tickets?filter=closed\" class=\"quick-action-card\">
                    <div class=\"action-icon\">🔵</div>
                    <h3>Resolved</h3>
                    <p>Completed tickets (";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "closed", [], "any", false, false, false, 106), "html", null, true);
        yield ")</p>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.dashboard {
    min-height: 100vh;
}

/* Header */
.dashboard-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 3rem;
    flex-wrap: wrap;
    gap: 2rem;
}

.header-content {
    flex: 1;
}

.dashboard-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
    line-height: 1.2;
}

.dashboard-subtitle {
    font-size: 1.125rem;
    color: var(--text-secondary);
    max-width: 500px;
}

.cta-button {
    background: linear-gradient(45deg, var(--primary-color), #5a6fd8);
    color: white;
    text-decoration: none;
    padding: 1rem 2rem;
    border-radius: 12px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    transition: all 0.3s ease;
}

.cta-button:hover {
    box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
    transform: translateY(-2px);
}

.cta-icon {
    font-size: 1.25rem;
}

/* Stats Grid */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-bottom: 3rem;
}

.stat-card {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.05);
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-5px);
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(45deg, var(--primary-color), #5a6fd8);
    border-radius: 16px 16px 0 0;
}

.stat-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
}

.stat-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.stat-value {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-primary);
    line-height: 1;
}

.stat-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
}

.stat-description {
    color: var(--text-secondary);
    font-size: 0.875rem;
    margin-bottom: 1rem;
}

.stat-progress {
    height: 4px;
    background: linear-gradient(45deg, var(--primary-color), #5a6fd8);
    border-radius: 2px;
    width: 100%;
    animation: progress 1s ease-in-out;
}

@keyframes progress {
    from { width: 0; }
    to { width: 100%; }
}

/* Dashboard Content */
.dashboard-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
}

/* Sections */
.activity-section,
.quick-actions-section {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
}

.section-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--text-primary);
}

.section-badge {
    background: var(--primary-color);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
}

/* Activity List */
.activity-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.activity-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1rem;
    border-radius: 12px;
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

.activity-item:hover {
    border-color: var(--primary-color);
    background: rgba(102, 126, 234, 0.02);
    transform: translateX(5px);
}

.activity-icon {
    font-size: 1.25rem;
    margin-top: 0.125rem;
}

.activity-content {
    flex: 1;
}

.activity-text {
    margin: 0 0 0.25rem 0;
    color: var(--text-primary);
    line-height: 1.4;
}

.activity-time {
    font-size: 0.875rem;
    color: var(--text-secondary);
}

.empty-activities {
    text-align: center;
    padding: 2rem;
    color: var(--text-secondary);
}

.empty-activities p {
    margin-bottom: 0.5rem;
    font-weight: 500;
}

.empty-activities small {
    opacity: 0.7;
}

/* Quick Actions */
.quick-actions-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.quick-action-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 1.5rem 1rem;
    border-radius: 12px;
    text-decoration: none;
    color: var(--text-primary);
    border: 2px solid transparent;
    transition: all 0.3s ease;
    background: rgba(102, 126, 234, 0.02);
}

.quick-action-card:hover {
    border-color: var(--primary-color);
    background: rgba(102, 126, 234, 0.05);
    transform: translateY(-2px);
}

.action-icon {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.quick-action-card h3 {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.quick-action-card p {
    font-size: 0.875rem;
    color: var(--text-secondary);
    margin: 0;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .dashboard-content {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .stats-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }
}

@media (max-width: 768px) {
    .dashboard-header {
        flex-direction: column;
        align-items: stretch;
        text-align: center;
    }
    
    .dashboard-title {
        font-size: 2rem;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .quick-actions-grid {
        grid-template-columns: 1fr;
    }
    
    .cta-button {
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .dashboard-title {
        font-size: 1.75rem;
    }
    
    .stat-value {
        font-size: 2rem;
    }
    
    .activity-item {
        flex-direction: column;
        text-align: center;
        gap: 0.5rem;
    }
}
</style>

<script>
// Time ago function
function timeAgo(dateString) {
    const date = new Date(dateString);
    const now = new Date();
    const diffInSeconds = Math.floor((now - date) / 1000);
    
    if (diffInSeconds < 60) return 'Just now';
    if (diffInSeconds < 3600) return `\${Math.floor(diffInSeconds / 60)} minutes ago`;
    if (diffInSeconds < 86400) return `\${Math.floor(diffInSeconds / 3600)} hours ago`;
    if (diffInSeconds < 604800) return `\${Math.floor(diffInSeconds / 86400)} days ago`;
    return date.toLocaleDateString();
}

// Update all time elements
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.activity-time').forEach(element => {
        const dateString = element.getAttribute('data-time') || element.textContent;
        element.textContent = timeAgo(dateString);
    });
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/dashboard.html.twig";
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
        return array (  244 => 106,  235 => 100,  226 => 94,  206 => 76,  196 => 71,  194 => 70,  185 => 66,  179 => 63,  173 => 62,  167 => 59,  164 => 58,  159 => 57,  153 => 54,  144 => 47,  134 => 43,  130 => 42,  124 => 39,  116 => 36,  112 => 35,  108 => 33,  105 => 31,  104 => 30,  103 => 29,  102 => 28,  100 => 27,  86 => 16,  80 => 13,  73 => 8,  66 => 7,  55 => 4,  50 => 2,  48 => 5,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/pages/dashboard.html.twig #}
{% extends \"layouts/app.html.twig\" %}

{% block title %}Dashboard - TicketFlow{% endblock %}
{% set current_page = 'dashboard' %}

{% block app_content %}
<div class=\"dashboard\">
    <!-- Header -->
    <div class=\"dashboard-header\">
        <div class=\"header-content\">
            <h1 class=\"dashboard-title\">
                Welcome back, {{ user.email|split('@')|first }}! 👋
            </h1>
            <p class=\"dashboard-subtitle\">
                Here's what's happening with your {{ stats.total }} tickets today.
            </p>
        </div>
        <a href=\"/tickets\" class=\"cta-button\">
            <span>Manage Tickets</span>
            <span class=\"cta-icon\">🎫</span>
        </a>
    </div>

    <!-- Statistics Grid -->
    <div class=\"stats-grid\">
        {% for card in [
            { title: 'Total Tickets', value: stats.total, icon: '📋', color: 'var(--primary-color)', description: 'All tickets in the system' },
            { title: 'Open Tickets', value: stats.open, icon: '🟢', color: 'var(--success-color)', description: 'Requires attention' },
            { title: 'In Progress', value: stats.inProgress, icon: '🟡', color: 'var(--warning-color)', description: 'Currently being worked on' },
            { title: 'Resolved', value: stats.closed, icon: '🔵', color: 'var(--text-secondary)', description: 'Successfully closed' }
        ] %}
            <div class=\"stat-card glass-card\">
                <div class=\"stat-header\">
                    <div class=\"stat-icon\" style=\"background-color: {{ card.color }}20\">
                        <span style=\"color: {{ card.color }}\">{{ card.icon }}</span>
                    </div>
                    <div class=\"stat-value\">
                        {{ card.value }}
                    </div>
                </div>
                <h3 class=\"stat-title\">{{ card.title }}</h3>
                <p class=\"stat-description\">{{ card.description }}</p>
                <div class=\"stat-progress\"></div>
            </div>
        {% endfor %}
    </div>

    <div class=\"dashboard-content\">
        <!-- Recent Activity -->
        <div class=\"activity-section\">
            <div class=\"section-header\">
                <h2 class=\"section-title\">Recent Activity</h2>
                <span class=\"section-badge\">{{ recentActivities|length }}</span>
            </div>
            <div class=\"activity-list\">
                {% for activity in recentActivities %}
                    <div class=\"activity-item\">
                        <div class=\"activity-icon\">{{ activity.icon }}</div>
                        <div class=\"activity-content\">
                            <p class=\"activity-text\">
                                <strong>{{ activity.user }}</strong> {{ activity.action }} ticket 
                                <strong> \"{{ activity.ticket }}\"</strong>
                            </p>
                            <span class=\"activity-time\">
                                {{ activity.time|date('Y-m-d H:i:s')|time_ago }}
                            </span>
                        </div>
                    </div>
                {% else %}
                    <div class=\"empty-activities\">
                        <p>No recent activities</p>
                        <small>Activities will appear here when you create or update tickets</small>
                    </div>
                {% endfor %}
            </div>
        </div>

        <!-- Quick Actions -->
        <div class=\"quick-actions-section\">
            <div class=\"section-header\">
                <h2 class=\"section-title\">Quick Actions</h2>
            </div>
            <div class=\"quick-actions-grid\">
                <a href=\"/tickets/create\" class=\"quick-action-card\">
                    <div class=\"action-icon\">➕</div>
                    <h3>Create Ticket</h3>
                    <p>Create a new support ticket</p>
                </a>
                
                <a href=\"/tickets?filter=open\" class=\"quick-action-card\">
                    <div class=\"action-icon\">🟢</div>
                    <h3>View Open</h3>
                    <p>See all open tickets ({{ stats.open }})</p>
                </a>
                
                <a href=\"/tickets?filter=in_progress\" class=\"quick-action-card\">
                    <div class=\"action-icon\">🟡</div>
                    <h3>In Progress</h3>
                    <p>Tickets being worked on ({{ stats.inProgress }})</p>
                </a>
                
                <a href=\"/tickets?filter=closed\" class=\"quick-action-card\">
                    <div class=\"action-icon\">🔵</div>
                    <h3>Resolved</h3>
                    <p>Completed tickets ({{ stats.closed }})</p>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.dashboard {
    min-height: 100vh;
}

/* Header */
.dashboard-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 3rem;
    flex-wrap: wrap;
    gap: 2rem;
}

.header-content {
    flex: 1;
}

.dashboard-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
    line-height: 1.2;
}

.dashboard-subtitle {
    font-size: 1.125rem;
    color: var(--text-secondary);
    max-width: 500px;
}

.cta-button {
    background: linear-gradient(45deg, var(--primary-color), #5a6fd8);
    color: white;
    text-decoration: none;
    padding: 1rem 2rem;
    border-radius: 12px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    transition: all 0.3s ease;
}

.cta-button:hover {
    box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
    transform: translateY(-2px);
}

.cta-icon {
    font-size: 1.25rem;
}

/* Stats Grid */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-bottom: 3rem;
}

.stat-card {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.05);
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-5px);
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(45deg, var(--primary-color), #5a6fd8);
    border-radius: 16px 16px 0 0;
}

.stat-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
}

.stat-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.stat-value {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-primary);
    line-height: 1;
}

.stat-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 0.5rem;
}

.stat-description {
    color: var(--text-secondary);
    font-size: 0.875rem;
    margin-bottom: 1rem;
}

.stat-progress {
    height: 4px;
    background: linear-gradient(45deg, var(--primary-color), #5a6fd8);
    border-radius: 2px;
    width: 100%;
    animation: progress 1s ease-in-out;
}

@keyframes progress {
    from { width: 0; }
    to { width: 100%; }
}

/* Dashboard Content */
.dashboard-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
}

/* Sections */
.activity-section,
.quick-actions-section {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
}

.section-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--text-primary);
}

.section-badge {
    background: var(--primary-color);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
}

/* Activity List */
.activity-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.activity-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1rem;
    border-radius: 12px;
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

.activity-item:hover {
    border-color: var(--primary-color);
    background: rgba(102, 126, 234, 0.02);
    transform: translateX(5px);
}

.activity-icon {
    font-size: 1.25rem;
    margin-top: 0.125rem;
}

.activity-content {
    flex: 1;
}

.activity-text {
    margin: 0 0 0.25rem 0;
    color: var(--text-primary);
    line-height: 1.4;
}

.activity-time {
    font-size: 0.875rem;
    color: var(--text-secondary);
}

.empty-activities {
    text-align: center;
    padding: 2rem;
    color: var(--text-secondary);
}

.empty-activities p {
    margin-bottom: 0.5rem;
    font-weight: 500;
}

.empty-activities small {
    opacity: 0.7;
}

/* Quick Actions */
.quick-actions-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.quick-action-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 1.5rem 1rem;
    border-radius: 12px;
    text-decoration: none;
    color: var(--text-primary);
    border: 2px solid transparent;
    transition: all 0.3s ease;
    background: rgba(102, 126, 234, 0.02);
}

.quick-action-card:hover {
    border-color: var(--primary-color);
    background: rgba(102, 126, 234, 0.05);
    transform: translateY(-2px);
}

.action-icon {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.quick-action-card h3 {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.quick-action-card p {
    font-size: 0.875rem;
    color: var(--text-secondary);
    margin: 0;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .dashboard-content {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .stats-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }
}

@media (max-width: 768px) {
    .dashboard-header {
        flex-direction: column;
        align-items: stretch;
        text-align: center;
    }
    
    .dashboard-title {
        font-size: 2rem;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .quick-actions-grid {
        grid-template-columns: 1fr;
    }
    
    .cta-button {
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .dashboard-title {
        font-size: 1.75rem;
    }
    
    .stat-value {
        font-size: 2rem;
    }
    
    .activity-item {
        flex-direction: column;
        text-align: center;
        gap: 0.5rem;
    }
}
</style>

<script>
// Time ago function
function timeAgo(dateString) {
    const date = new Date(dateString);
    const now = new Date();
    const diffInSeconds = Math.floor((now - date) / 1000);
    
    if (diffInSeconds < 60) return 'Just now';
    if (diffInSeconds < 3600) return `\${Math.floor(diffInSeconds / 60)} minutes ago`;
    if (diffInSeconds < 86400) return `\${Math.floor(diffInSeconds / 3600)} hours ago`;
    if (diffInSeconds < 604800) return `\${Math.floor(diffInSeconds / 86400)} days ago`;
    return date.toLocaleDateString();
}

// Update all time elements
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.activity-time').forEach(element => {
        const dateString = element.getAttribute('data-time') || element.textContent;
        element.textContent = timeAgo(dateString);
    });
});
</script>
{% endblock %}", "pages/dashboard.html.twig", "D:\\Documents\\VsCode\\HNG\\Stage2\\stage2-twig\\templates\\pages\\dashboard.html.twig");
    }
}
