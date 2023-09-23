<?php
namespace Sunlight;

return function (array $args) {
	$link = Router::article($args['art']['id'], $args['art']['slug'], $args['art']['cat_slug']);
	
	$args['output'] = '<article class="post">';
	$args['output'] .= '<header>';
	$args['output'] .= '<div class="title">';
	$args['output'] .= '<h2>'.$args['art']['title'].'</h2>';
	$args['output'] .= '</div>'; // div.title
	$args['output'] .= '<div class="meta">';
	$args['output'] .= '<time class="published">'.$args['art']['time'].'</time>';
	$args['output'] .= '</div>'; // div.meta
	$args['output'] .= '</header>';
	$args['output'] .= '<div class="perex">'.$args['art']['perex'].'</div>';
	$args['output'] .= '<footer>';
	$args['output'] .= '<ul class="actions">';
	$args['output'] .= '<li><a href="'.$link.'" class="button large">Číst více</a></li>';
	$args['output'] .= '</ul>'; // ul.actions
	$args['output'] .= '<ul class="stats">';
	$args['output'] .= '<li><a href="#">General</a></li>';
	$args['output'] .= '<li><a href="#" class="icon solid fa-heart">28</a></li>';
	$args['output'] .= '<li><a href="#" class="icon solid fa-comment">128</a></li>';
	$args['output'] .= '</ul>'; // ul.stats
	$args['output'] .= '</footer>';
	$args['output'] .= '</article>';
};

?>