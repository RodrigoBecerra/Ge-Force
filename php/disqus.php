<?php if(!empty($_GET['v'])){$vurld = $_GET['v'];}else{$vurld = "";}
echo "
<script>
var disqus_config = function () {
this.page.identifier = 'comentario$vurld';
};
(function() {
var d = document, s = d.createElement('script');
s.src = 'https://integracion.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href='https://disqus.com/?ref_noscript'>comments powered by Disqus.</a></noscript>
";
