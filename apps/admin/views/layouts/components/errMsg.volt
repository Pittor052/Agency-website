{% if flashSession.output()%}
<div class="errorMessage">
    {{flashSession.output()}}
</div>
{% endif %}