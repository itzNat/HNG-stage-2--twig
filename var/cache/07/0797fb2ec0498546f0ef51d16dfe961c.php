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

/* pages/landing.html.twig */
class __TwigTemplate_532df948c444d54f949a7927fd39f172 extends Template
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
            'content' => [$this, 'block_content'],
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
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "TicketFlow - Streamline Your Ticket Management";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"landing-page\">
    <!-- Animated background elements -->
    <div class=\"floating-elements\">
        <div class=\"floating-circle circle-1\"></div>
        <div class=\"floating-circle circle-2\"></div>
        <div class=\"floating-circle circle-3\"></div>
    </div>

    <!-- Navigation -->
    <nav class=\"landing-nav\">
        <div class=\"nav-logo\">
            <span class=\"logo-icon\">🎫</span>
            TicketFlow
        </div>
        <div class=\"nav-links\">
            <a href=\"/auth/login\" class=\"nav-link\">Login</a>
            <a href=\"/auth/signup\" class=\"nav-btn\">Get Started</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class=\"hero-section\">
        <div class=\"container\">
            <div class=\"hero-content\">
                <h1 class=\"hero-title\">
                    Streamline Your
                    <span class=\"gradient-text\"> Ticket Management</span>
                </h1>
                
                <p class=\"hero-description\">
                    The ultimate solution for managing support tickets across multiple teams. 
                    Fast, intuitive, and beautifully designed to make your workflow seamless.
                </p>

                <div class=\"hero-actions\">
                    <a href=\"/auth/signup\" class=\"btn btn-primary\">
                        Start Free Trial
                    </a>
                    <a href=\"/auth/login\" class=\"btn btn-secondary\">
                        Login to Dashboard
                    </a>
                </div>
            </div>

            <!-- Hero Visual -->
            <div class=\"hero-visual\">
                <div class=\"glass-card\">
                    <div class=\"card-header\">
                        <div class=\"card-dots\">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class=\"card-content\">
                        <div class=\"ticket-preview\">
                            <div class=\"ticket-item\">
                                <div class=\"ticket-status open\"></div>
                                <div class=\"ticket-info\">
                                    <h4>Login Issue</h4>
                                    <p>High Priority</p>
                                </div>
                            </div>
                            <div class=\"ticket-item\">
                                <div class=\"ticket-status in-progress\"></div>
                                <div class=\"ticket-info\">
                                    <h4>Payment Failed</h4>
                                    <p>Medium Priority</p>
                                </div>
                            </div>
                            <div class=\"ticket-item\">
                                <div class=\"ticket-status closed\"></div>
                                <div class=\"ticket-info\">
                                    <h4>Feature Request</h4>
                                    <p>Low Priority</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wavy Background -->
        <div class=\"wavy-background\">
            <svg viewBox=\"0 0 1440 320\" xmlns=\"http://www.w3.org/2000/svg\">
                <path 
                    fill=\"var(--primary-color)\" 
                    fill-opacity=\"0.1\" 
                    d=\"M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,192C672,181,768,139,864,138.7C960,139,1056,181,1152,181.3C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\"
                ></path>
            </svg>
        </div>
    </section>

    <!-- Features Section -->
    <section class=\"features-section\">
        <div class=\"container\">
            <h2 class=\"section-title\">
                Why Choose TicketFlow?
            </h2>
            
            <div class=\"features-grid\">
                ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["icon" => "⚡", "title" => "Lightning Fast", "description" => "Built for speed with real-time updates and instant search capabilities."], ["icon" => "🎨", "title" => "Beautiful UI", "description" => "Carefully crafted interface that's both beautiful and intuitive to use."], ["icon" => "🔒", "title" => "Secure & Reliable", "description" => "Enterprise-grade security with 99.9% uptime guarantee."], ["icon" => "📱", "title" => "Fully Responsive", "description" => "Perfect experience on all devices, from mobile to desktop."]]);
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 116
            yield "                    <div class=\"feature-card glass-card\">
                        <div class=\"feature-icon\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "icon", [], "any", false, false, false, 117), "html", null, true);
            yield "</div>
                        <h3>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "title", [], "any", false, false, false, 118), "html", null, true);
            yield "</h3>
                        <p>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "description", [], "any", false, false, false, 119), "html", null, true);
            yield "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class=\"landing-footer\">
        <div class=\"container\">
            <p>&copy; 2024 TicketFlow. All rights reserved.</p>
        </div>
    </footer>
</div>

<style>
/* Copy the same CSS from React version for landing page */
.landing-page {
  min-height: 100vh;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  position: relative;
  overflow: hidden;
}

/* Floating Elements */
.floating-elements {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}

.floating-circle {
  position: absolute;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.2);
  animation-duration: 6s;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
}

.circle-1 {
  width: 120px;
  height: 120px;
  top: 10%;
  left: 5%;
  animation-name: float1;
}

.circle-2 {
  width: 80px;
  height: 80px;
  top: 60%;
  right: 10%;
  animation-name: float2;
  animation-delay: 1s;
}

.circle-3 {
  width: 60px;
  height: 60px;
  bottom: 20%;
  left: 15%;
  animation-name: float3;
  animation-delay: 2s;
}

@keyframes float1 {
  0%, 100% { transform: translateY(0) rotate(0); }
  50% { transform: translateY(-20px) rotate(5deg); }
}

@keyframes float2 {
  0%, 100% { transform: translateY(0) rotate(0); }
  50% { transform: translateY(30px) rotate(-8deg); }
}

@keyframes float3 {
  0%, 100% { transform: translateY(0) scale(1); }
  50% { transform: translateY(-15px) scale(1.1); }
}

/* Navigation */
.landing-nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 2rem 5%;
  position: relative;
  z-index: 10;
}

.nav-logo {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-size: 1.5rem;
  font-weight: 700;
  color: white;
}

.logo-icon {
  font-size: 2rem;
}

.nav-links {
  display: flex;
  align-items: center;
  gap: 2rem;
}

.nav-link {
  color: white;
  text-decoration: none;
  font-weight: 500;
  transition: all 0.3s ease;
}

.nav-link:hover {
  color: rgba(255, 255, 255, 0.8);
}

.nav-btn {
  background: rgba(255, 255, 255, 0.2);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.3);
  color: white;
  padding: 0.75rem 1.5rem;
  border-radius: 50px;
  text-decoration: none;
  font-weight: 500;
  transition: all 0.3s ease;
}

.nav-btn:hover {
  background: rgba(255, 255, 255, 0.3);
  transform: translateY(-2px);
}

/* Hero Section */
.hero-section {
  position: relative;
  min-height: 80vh;
  display: flex;
  align-items: center;
  padding: 4rem 5%;
}

.container {
  max-width: 1440px;
  margin: 0 auto;
  width: 100%;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 4rem;
  align-items: center;
}

.hero-content {
  color: white;
}

.hero-title {
  font-size: 3.5rem;
  font-weight: 700;
  line-height: 1.2;
  margin-bottom: 1.5rem;
}

.gradient-text {
  background: linear-gradient(45deg, #ff6b6b, #feca57, #48dbfb, #ff9ff3);
  background-size: 300% 300%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: gradient-shift 4s ease infinite;
}

@keyframes gradient-shift {
  0%, 100% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
}

.hero-description {
  font-size: 1.25rem;
  line-height: 1.6;
  margin-bottom: 2.5rem;
  opacity: 0.9;
}

.hero-actions {
  display: flex;
  gap: 1rem;
  flex-wrap: wrap;
}

.hero-visual {
  animation: fadeInUp 1s ease;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.glass-card {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 20px;
  padding: 1.5rem;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.card-header {
  display: flex;
  justify-content: flex-start;
  margin-bottom: 1rem;
}

.card-dots {
  display: flex;
  gap: 0.5rem;
}

.card-dots span {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.3);
}

.ticket-item {
  display: flex;
  align-items: center;
  gap: 1rem;
  padding: 1rem;
  background: rgba(255, 255, 255, 0.05);
  border-radius: 12px;
  margin-bottom: 0.75rem;
}

.ticket-status {
  width: 12px;
  height: 12px;
  border-radius: 50%;
}

.ticket-status.open {
  background: #2ecc71;
  box-shadow: 0 0 10px rgba(46, 204, 113, 0.5);
}

.ticket-status.in-progress {
  background: #f39c12;
  box-shadow: 0 0 10px rgba(243, 156, 18, 0.5);
}

.ticket-status.closed {
  background: #95a5a6;
  box-shadow: 0 0 10px rgba(149, 165, 166, 0.5);
}

.ticket-info h4 {
  color: white;
  margin: 0;
  font-size: 0.9rem;
}

.ticket-info p {
  color: rgba(255, 255, 255, 0.7);
  margin: 0;
  font-size: 0.8rem;
}

/* Wavy Background */
.wavy-background {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  z-index: 1;
}

/* Features Section */
.features-section {
  padding: 6rem 5%;
  background: white;
  position: relative;
  z-index: 2;
}

.section-title {
  text-align: center;
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 4rem;
  color: #2d3436;
}

.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2rem;
}

.feature-card {
  padding: 2rem;
  text-align: center;
  transition: all 0.3s ease;
  background: rgba(255, 255, 255, 0.8);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.3);
  animation: fadeInUp 0.6s ease;
}

.feature-card:hover {
  background: rgba(255, 255, 255, 0.95);
  transform: translateY(-5px);
}

.feature-icon {
  font-size: 3rem;
  margin-bottom: 1rem;
}

.feature-card h3 {
  font-size: 1.5rem;
  font-weight: 600;
  margin-bottom: 1rem;
  color: #2d3436;
}

.feature-card p {
  color: #636e72;
  line-height: 1.6;
}

/* Footer */
.landing-footer {
  background: #2d3436;
  color: white;
  text-align: center;
  padding: 2rem 5%;
}

/* Responsive Design */
@media (max-width: 768px) {
  .container {
    grid-template-columns: 1fr;
    text-align: center;
  }
  
  .hero-title {
    font-size: 2.5rem;
  }
  
  .landing-nav {
    flex-direction: column;
    gap: 1rem;
  }
  
  .hero-actions {
    justify-content: center;
  }
  
  .features-grid {
    grid-template-columns: 1fr;
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
        return "pages/landing.html.twig";
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
        return array (  199 => 122,  190 => 119,  186 => 118,  182 => 117,  179 => 116,  175 => 110,  70 => 7,  63 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/pages/landing.html.twig #}
{% extends \"layouts/base.html.twig\" %}

{% block title %}TicketFlow - Streamline Your Ticket Management{% endblock %}

{% block content %}
<div class=\"landing-page\">
    <!-- Animated background elements -->
    <div class=\"floating-elements\">
        <div class=\"floating-circle circle-1\"></div>
        <div class=\"floating-circle circle-2\"></div>
        <div class=\"floating-circle circle-3\"></div>
    </div>

    <!-- Navigation -->
    <nav class=\"landing-nav\">
        <div class=\"nav-logo\">
            <span class=\"logo-icon\">🎫</span>
            TicketFlow
        </div>
        <div class=\"nav-links\">
            <a href=\"/auth/login\" class=\"nav-link\">Login</a>
            <a href=\"/auth/signup\" class=\"nav-btn\">Get Started</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class=\"hero-section\">
        <div class=\"container\">
            <div class=\"hero-content\">
                <h1 class=\"hero-title\">
                    Streamline Your
                    <span class=\"gradient-text\"> Ticket Management</span>
                </h1>
                
                <p class=\"hero-description\">
                    The ultimate solution for managing support tickets across multiple teams. 
                    Fast, intuitive, and beautifully designed to make your workflow seamless.
                </p>

                <div class=\"hero-actions\">
                    <a href=\"/auth/signup\" class=\"btn btn-primary\">
                        Start Free Trial
                    </a>
                    <a href=\"/auth/login\" class=\"btn btn-secondary\">
                        Login to Dashboard
                    </a>
                </div>
            </div>

            <!-- Hero Visual -->
            <div class=\"hero-visual\">
                <div class=\"glass-card\">
                    <div class=\"card-header\">
                        <div class=\"card-dots\">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class=\"card-content\">
                        <div class=\"ticket-preview\">
                            <div class=\"ticket-item\">
                                <div class=\"ticket-status open\"></div>
                                <div class=\"ticket-info\">
                                    <h4>Login Issue</h4>
                                    <p>High Priority</p>
                                </div>
                            </div>
                            <div class=\"ticket-item\">
                                <div class=\"ticket-status in-progress\"></div>
                                <div class=\"ticket-info\">
                                    <h4>Payment Failed</h4>
                                    <p>Medium Priority</p>
                                </div>
                            </div>
                            <div class=\"ticket-item\">
                                <div class=\"ticket-status closed\"></div>
                                <div class=\"ticket-info\">
                                    <h4>Feature Request</h4>
                                    <p>Low Priority</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wavy Background -->
        <div class=\"wavy-background\">
            <svg viewBox=\"0 0 1440 320\" xmlns=\"http://www.w3.org/2000/svg\">
                <path 
                    fill=\"var(--primary-color)\" 
                    fill-opacity=\"0.1\" 
                    d=\"M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,192C672,181,768,139,864,138.7C960,139,1056,181,1152,181.3C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\"
                ></path>
            </svg>
        </div>
    </section>

    <!-- Features Section -->
    <section class=\"features-section\">
        <div class=\"container\">
            <h2 class=\"section-title\">
                Why Choose TicketFlow?
            </h2>
            
            <div class=\"features-grid\">
                {% for feature in [
                    { icon: \"⚡\", title: \"Lightning Fast\", description: \"Built for speed with real-time updates and instant search capabilities.\" },
                    { icon: \"🎨\", title: \"Beautiful UI\", description: \"Carefully crafted interface that's both beautiful and intuitive to use.\" },
                    { icon: \"🔒\", title: \"Secure & Reliable\", description: \"Enterprise-grade security with 99.9% uptime guarantee.\" },
                    { icon: \"📱\", title: \"Fully Responsive\", description: \"Perfect experience on all devices, from mobile to desktop.\" }
                ] %}
                    <div class=\"feature-card glass-card\">
                        <div class=\"feature-icon\">{{ feature.icon }}</div>
                        <h3>{{ feature.title }}</h3>
                        <p>{{ feature.description }}</p>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class=\"landing-footer\">
        <div class=\"container\">
            <p>&copy; 2024 TicketFlow. All rights reserved.</p>
        </div>
    </footer>
</div>

<style>
/* Copy the same CSS from React version for landing page */
.landing-page {
  min-height: 100vh;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  position: relative;
  overflow: hidden;
}

/* Floating Elements */
.floating-elements {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}

.floating-circle {
  position: absolute;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.2);
  animation-duration: 6s;
  animation-iteration-count: infinite;
  animation-timing-function: ease-in-out;
}

.circle-1 {
  width: 120px;
  height: 120px;
  top: 10%;
  left: 5%;
  animation-name: float1;
}

.circle-2 {
  width: 80px;
  height: 80px;
  top: 60%;
  right: 10%;
  animation-name: float2;
  animation-delay: 1s;
}

.circle-3 {
  width: 60px;
  height: 60px;
  bottom: 20%;
  left: 15%;
  animation-name: float3;
  animation-delay: 2s;
}

@keyframes float1 {
  0%, 100% { transform: translateY(0) rotate(0); }
  50% { transform: translateY(-20px) rotate(5deg); }
}

@keyframes float2 {
  0%, 100% { transform: translateY(0) rotate(0); }
  50% { transform: translateY(30px) rotate(-8deg); }
}

@keyframes float3 {
  0%, 100% { transform: translateY(0) scale(1); }
  50% { transform: translateY(-15px) scale(1.1); }
}

/* Navigation */
.landing-nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 2rem 5%;
  position: relative;
  z-index: 10;
}

.nav-logo {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-size: 1.5rem;
  font-weight: 700;
  color: white;
}

.logo-icon {
  font-size: 2rem;
}

.nav-links {
  display: flex;
  align-items: center;
  gap: 2rem;
}

.nav-link {
  color: white;
  text-decoration: none;
  font-weight: 500;
  transition: all 0.3s ease;
}

.nav-link:hover {
  color: rgba(255, 255, 255, 0.8);
}

.nav-btn {
  background: rgba(255, 255, 255, 0.2);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.3);
  color: white;
  padding: 0.75rem 1.5rem;
  border-radius: 50px;
  text-decoration: none;
  font-weight: 500;
  transition: all 0.3s ease;
}

.nav-btn:hover {
  background: rgba(255, 255, 255, 0.3);
  transform: translateY(-2px);
}

/* Hero Section */
.hero-section {
  position: relative;
  min-height: 80vh;
  display: flex;
  align-items: center;
  padding: 4rem 5%;
}

.container {
  max-width: 1440px;
  margin: 0 auto;
  width: 100%;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 4rem;
  align-items: center;
}

.hero-content {
  color: white;
}

.hero-title {
  font-size: 3.5rem;
  font-weight: 700;
  line-height: 1.2;
  margin-bottom: 1.5rem;
}

.gradient-text {
  background: linear-gradient(45deg, #ff6b6b, #feca57, #48dbfb, #ff9ff3);
  background-size: 300% 300%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: gradient-shift 4s ease infinite;
}

@keyframes gradient-shift {
  0%, 100% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
}

.hero-description {
  font-size: 1.25rem;
  line-height: 1.6;
  margin-bottom: 2.5rem;
  opacity: 0.9;
}

.hero-actions {
  display: flex;
  gap: 1rem;
  flex-wrap: wrap;
}

.hero-visual {
  animation: fadeInUp 1s ease;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.glass-card {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 20px;
  padding: 1.5rem;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.card-header {
  display: flex;
  justify-content: flex-start;
  margin-bottom: 1rem;
}

.card-dots {
  display: flex;
  gap: 0.5rem;
}

.card-dots span {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.3);
}

.ticket-item {
  display: flex;
  align-items: center;
  gap: 1rem;
  padding: 1rem;
  background: rgba(255, 255, 255, 0.05);
  border-radius: 12px;
  margin-bottom: 0.75rem;
}

.ticket-status {
  width: 12px;
  height: 12px;
  border-radius: 50%;
}

.ticket-status.open {
  background: #2ecc71;
  box-shadow: 0 0 10px rgba(46, 204, 113, 0.5);
}

.ticket-status.in-progress {
  background: #f39c12;
  box-shadow: 0 0 10px rgba(243, 156, 18, 0.5);
}

.ticket-status.closed {
  background: #95a5a6;
  box-shadow: 0 0 10px rgba(149, 165, 166, 0.5);
}

.ticket-info h4 {
  color: white;
  margin: 0;
  font-size: 0.9rem;
}

.ticket-info p {
  color: rgba(255, 255, 255, 0.7);
  margin: 0;
  font-size: 0.8rem;
}

/* Wavy Background */
.wavy-background {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  z-index: 1;
}

/* Features Section */
.features-section {
  padding: 6rem 5%;
  background: white;
  position: relative;
  z-index: 2;
}

.section-title {
  text-align: center;
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 4rem;
  color: #2d3436;
}

.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2rem;
}

.feature-card {
  padding: 2rem;
  text-align: center;
  transition: all 0.3s ease;
  background: rgba(255, 255, 255, 0.8);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.3);
  animation: fadeInUp 0.6s ease;
}

.feature-card:hover {
  background: rgba(255, 255, 255, 0.95);
  transform: translateY(-5px);
}

.feature-icon {
  font-size: 3rem;
  margin-bottom: 1rem;
}

.feature-card h3 {
  font-size: 1.5rem;
  font-weight: 600;
  margin-bottom: 1rem;
  color: #2d3436;
}

.feature-card p {
  color: #636e72;
  line-height: 1.6;
}

/* Footer */
.landing-footer {
  background: #2d3436;
  color: white;
  text-align: center;
  padding: 2rem 5%;
}

/* Responsive Design */
@media (max-width: 768px) {
  .container {
    grid-template-columns: 1fr;
    text-align: center;
  }
  
  .hero-title {
    font-size: 2.5rem;
  }
  
  .landing-nav {
    flex-direction: column;
    gap: 1rem;
  }
  
  .hero-actions {
    justify-content: center;
  }
  
  .features-grid {
    grid-template-columns: 1fr;
  }
}
</style>
{% endblock %}", "pages/landing.html.twig", "D:\\Documents\\VsCode\\HNG\\Stage2\\stage2-twig\\templates\\pages\\landing.html.twig");
    }
}
