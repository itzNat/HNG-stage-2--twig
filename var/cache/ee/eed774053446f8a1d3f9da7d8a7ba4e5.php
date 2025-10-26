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

/* layouts/base.html.twig */
class __TwigTemplate_a8bb15bc4ad6563c294ac67806c5e171 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/assets/css/styles.css\">
</head>
<body>
    ";
        // line 14
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 15
        yield "    
    <!-- Flash Messages -->
    ";
        // line 17
        if ((($tmp = ($context["flash"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "        <div class=\"flash-message flash-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "type", [], "any", false, false, false, 18), "html", null, true);
            yield "\">
            <div class=\"flash-content\">
                <span class=\"flash-icon\">
                    ";
            // line 21
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "type", [], "any", false, false, false, 21) == "success")) {
                yield "✅
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 22
($context["flash"] ?? null), "type", [], "any", false, false, false, 22) == "error")) {
                yield "❌
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 23
($context["flash"] ?? null), "type", [], "any", false, false, false, 23) == "warning")) {
                yield "⚠️
                    ";
            } else {
                // line 24
                yield "ℹ️";
            }
            // line 25
            yield "                </span>
                <span>";
            // line 26
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["flash"] ?? null), "message", [], "any", false, false, false, 26);
            yield "</span>
            </div>
            <button class=\"flash-close\" onclick=\"this.parentElement.remove()\">×</button>
        </div>
    ";
        }
        // line 31
        yield "
    <script src=\"/assets/js/main.js\"></script>
</body>
</html>";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "TicketFlow";
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layouts/base.html.twig";
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
        return array (  122 => 14,  111 => 7,  103 => 31,  95 => 26,  92 => 25,  89 => 24,  84 => 23,  80 => 22,  76 => 21,  69 => 18,  67 => 17,  63 => 15,  61 => 14,  51 => 7,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/layouts/base.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}TicketFlow{% endblock %}</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/assets/css/styles.css\">
</head>
<body>
    {% block content %}{% endblock %}
    
    <!-- Flash Messages -->
    {% if flash %}
        <div class=\"flash-message flash-{{ flash.type }}\">
            <div class=\"flash-content\">
                <span class=\"flash-icon\">
                    {% if flash.type == 'success' %}✅
                    {% elseif flash.type == 'error' %}❌
                    {% elseif flash.type == 'warning' %}⚠️
                    {% else %}ℹ️{% endif %}
                </span>
                <span>{{ flash.message|raw }}</span>
            </div>
            <button class=\"flash-close\" onclick=\"this.parentElement.remove()\">×</button>
        </div>
    {% endif %}

    <script src=\"/assets/js/main.js\"></script>
</body>
</html>", "layouts/base.html.twig", "D:\\Documents\\VsCode\\HNG\\Stage2\\stage2-twig\\templates\\layouts\\base.html.twig");
    }
}
