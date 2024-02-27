<!DOCTYPE html>
<html lang="en-us">
	<body>
		<textarea placeholder="Moo!" id="input"></textarea>
		<input onclick="cow.say()" id="say" type="button" value="Say"/>
<pre style="margin: auto;">
 ______
&lt; <span id="output"></span> &gt;
 ------
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||
</pre>
		<script type="module">
			import {cow} from "./js/cowsay.js";
			cow.say();
		</script>
		<script type="text/javascript">
		</script>
	</body>
</html>
