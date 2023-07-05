<!DOCTYPE html>
<html>
	<head>
		<script type="module" src='https://unpkg.com/html-include-element'></script>
		<link rel="stylesheet" href="../simple.css">
		<style>
kbd {
  background-color: var(--kbd-bg);
  border: 3px solid var(--kbd-bg);
  border-radius: 5px;
}

		</style>
	</head>

    <header>
	<h2>  #2 - Some Linux tips </h2>
	<?php
			$val = file_get_contents("../navbar2.php");
			echo $val;
	?>

    </header>


	<body>
		
		<p>I was glancing the book <a href="https://www.goodreads.com/book/show/11724436-the-linux-command-line">The Linux Command Line</a> by William Shotts hoping to find some new tricks, and god I did find them! In honor to that, I am writing this blog post to share some of my findings, hopefully it will be useful for someone. </p>
		<h4>Keyboard navigation</h4>

		<p>These are some useful bindings to use Bash without lifting your hands from the keyboards, and hopefully without even reaching for the arrow keys. </p>
		<dl>
		<dt><kbd>Ctrl-a</kbd>, <kbd>Ctrl-e</kbd></dt>
			<dd>Move cursor to the beginning/end of the line.</dd>
		<dt><kbd>Ctrl-f</kbd>, <kbd>Ctrl-b</kbd></dt>
			<dd>Move cursor forward/backward one position. Use Alt instead to move using one word.</dd>
		<dt><kbd>Ctrl-d</kbd></dt>
			<dd>Delete character at current position.</dd>
		<dt><kbd>Ctrl-u</kbd>, <kbd>Ctrl-k</kbd></dt>
			<dd>Kill text to the beginning/end of the line. <em>Note:</em> killed text is then yanked (copied) with <kbd>Ctrl-y</kbd>.</dd>
		</dl>

		<h4>Prediction and history</h4>
		<p>It is fundamental to use autocomplete together with history search. Hopefully, we all know that <kbd>Tab</kbd> helps autocomplete, and thath <kbd>Tab Tab</kbd> shows all the possible ways to complete the current word. Of course, it is not always obvious that the command we are using somehow supports autocomplete. For this it can be useful to use <kbd>Alt-?</kbd>, which explicitly shows all of the autocomplete options.</p>
		
		<p>History can be traversed using what's known as incremental search, initiated with <kbd>Ctrl-r</kbd>. From there you can use:</p>
		<dl>
		<dt><kbd>Ctrl-j</kbd></dt>
			<dd>Paste current command to terminal.</dd>
		<dt><kbd>Ctrl-o</kbd></dt>
			<dd>Execute current command, and instead of leaving, move to the next one used. This can be fundamental when repeating a sequence of commands.
		</dl>
		<p>Finally, something that I always forget is that <code>!!</code> repeats the last command used. 

		<h4>Text and file manipulation</h4>
		<p>Here there are many details that get you running, where I will assume that you are rather comfortable using <code>sed</code> and <code>grep</code> with pipes (<code>|</code>). One small note is that I was so used to using grep with pipes (<code>ls | grep foo</code>) that I found out too late about its recursive text search (<code>grep -r "string" directory</code>) that allows you to search through all files in a folder.</p>
		<dl>
		<dt><code>locate</code></dt>
			<dd>Ever struggled to find a file you know to exist using <code>locate</code>? This happens because the file database gets updated once per day (usually), but it can be manually done using <code>updatedb</code>.</dd>
		<dt><code>find</code></dt>
			<dd>I have started using <code>find</code> fairly recently, as you can usually handle without it (until you learn how good it is!). The arguments it accepts are quite arbitrary, are include: <code>-type</code> ([d]irectory, [f]ile, symbolic [l]ink), <code>-name</code> (supports wild card <code>*</code>), <code>-size</code> (+1M for files larger than 1 Mb, -1M for files smaller than 1M), <code>-and</code>, <code>-or</code>, <code>-not</code>.
			<br><br>
			After you find the files, you can append standard actions such as <code>-delete</code>, <code>-ls</code>, <code>-print</code> as well as arbitrary code with <code>-exec</code>. This can be done using <code>{}</code>, which represents the current pathname. With it, a complicated way of printing the names of all files larger than 1G would be:
<pre>
<code>
$ find . -size +1G -exec ls '{}' ';'
</code>
</pre>
			Note that the <code>''</code> are required to avoid issues with spaces or with bash substitutions.
			</dd>
		<dt>Standard output and error</dt>
			<dd>You might know that to redirect standard error to standard output, you must append the directive <code>2&>1</code>. Well, this is actually and old style solution! Recent versions of bash support simple replacing <code>></code> with <code>&></code>. Much cleaner! This will change something ugly such as <code>./long_run.sh > $OUT 2&>1</code> into <code>./long_run.sh &> $OUT</code>.
		</dl>

		<h4> Process monitor</h4>
		<p>The last point regards monitoring your system processes. I have found <code>top</code> to be too raw, so I usually use instead <code>htop</code> (<code>apt install htop</code> in Debian based systems), and there is also a nice GPU variant <code>nvtop</code>. In addition, the raw output of all processes <code>ps -aux</code> can be much better appreciated with the <em>native</em> tool <code>pstree</code>! I'm quite sad I never heard of it before.</p>

<br><br>
<p> Hopefully at least one of the things here will be new for you to make your Bash life easier. Best!
	</body>


</html>
