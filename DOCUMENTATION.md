## Examples:

**As filters:**
```twig
{{ subject | preg_filter(pattern, replacement, limit) }}

{{ subject | preg_grep(pattern) }}

{{ subject | preg_match(pattern) }}

{{ subject | preg_quote(delimiter) }}

{{ subject | preg_replace(pattern, replacement, limit) }}

{{ subject | preg_split(pattern) }}
```

**As functions:**
```twig
{{ preg_filter(subject, pattern, replacement, limit) }}

{{ preg_grep(subject, pattern) }}

{{ preg_match(subject, pattern) }}

{{ preg_quote(subject, delimiter) }}

{{ preg_replace(subject, pattern, replacement, limit) }}

{{ preg_split(subject, pattern) }}
```

Please read the PHP docs for a more detailed explanation of all functions.

**Usage Examples:**

*Simple Word Replacement*
```twig
{{ "This is a simple example." | preg_replace('/simple/', 'beautiful') }}
```
will output:
```twig
This is a beautiful example.
```

*Whitespace cleaning up (Specifically from the results of a Twig macro)*
```twig
{% macro generateItemUrl(item, falseLink) %}
	{% if (falseLink) or item.url is empty %}
		#
	{% else %}
		{{ item.url }}
	{% endif %}
{% endmacro %}

<a href="{{ _self.generateItemUrl(item, false) | preg_replace('/\\s+/', ' ') | trim | raw }}">{{ item.name }}</a>
```