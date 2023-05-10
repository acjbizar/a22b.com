<section id="artworks">

## Artworks

{%- for artwork in artworks %}
- [{{ artwork.title | safe }}]({{ artwork.url }})
{%- endfor %}

</section>