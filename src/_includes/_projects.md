<section id="projects">

## Projects

{%- for project in projects %}
- [{{ project.title | safe }}]({{ project.url }})
{%- endfor %}

</section>