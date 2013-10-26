<div class="wrap">

	<?php screen_icon(); ?>

	<h2><?php esc_html_e( 'Forms' ); ?></h2>

	<form>
		<h3>Basic elements</h3>

		<p>
			<label for="input-text">Text input</label>
			<input type="text" name="input-text" id="input-text" placeholder="HTML5 placeholder" />
		</p>
		<p>
			<label for="select">Select</label>
			<select name="select">
				<option>Option 1</option>
				<option>Option 2</option>
				<option>Option 3</option>
			</select>
		</p>
		<p>
			<label for="multi-select">Multiple select</label>
			<select name="multi-select" multiple="multiple">
				<option>Option 1</option>
				<option>Option 2</option>
				<option>Option 3</option>
				<option>Option 4</option>
				<option>Option 5</option>
				<option>Option 6</option>
			</select>
		</p>
		<p>
			<label>Radio</label>
			<input type="checkbox" name="input-checkbox" id="input-checkbox" />
		</p>
		<p>
			<label for="input-checkbox">Checkbox</label>
			<input type="checkbox" name="input-checkbox" id="input-checkbox" />
		</p>
		<p>
			<label>Checkbox array</label>
			<span class="checkbox-array">
				<label><input type="checkbox" name="input-checkbox" id="input-checkbox" /> Checkbox 1</label>
				<label><input type="checkbox" name="input-checkbox" id="input-checkbox" /> Checkbox 2</label>
				<label><input type="checkbox" name="input-checkbox" id="input-checkbox" /> Checkbox 3</label>
				<label><input type="checkbox" name="input-checkbox" id="input-checkbox" /> Checkbox 4</label>
				<label><input type="checkbox" name="input-checkbox" id="input-checkbox" /> Checkbox 5</label>
				<label><input type="checkbox" name="input-checkbox" id="input-checkbox" /> Checkbox 6</label>
				<label><input type="checkbox" name="input-checkbox" id="input-checkbox" /> Checkbox 7</label>
				<label><input type="checkbox" name="input-checkbox" id="input-checkbox" /> Checkbox 8</label>
				<label><input type="checkbox" name="input-checkbox" id="input-checkbox" /> Checkbox 9</label>
				<label><input type="checkbox" name="input-checkbox" id="input-checkbox" /> Checkbox 10</label>
				<label><input type="checkbox" name="input-checkbox" id="input-checkbox" /> Checkbox 11</label>
				<label><input type="checkbox" name="input-checkbox" id="input-checkbox" /> Checkbox 12</label>
				<label><input type="checkbox" name="input-checkbox" id="input-checkbox" /> Checkbox 13</label>
				<label><input type="checkbox" name="input-checkbox" id="input-checkbox" /> Checkbox 14</label>
			</span>
		</p>

		<h3>Layouts?</h3>

		<h3>Fieldset</h3>

		<fieldset>
			<legend>Fieldset legend</legend>
			<p>
				<label for="fieldset-text">Text input</label>
				<input type="text" name="fieldset-text" id="fieldset-text" placeholder="HTML5 placeholder" />
			</p>
		</fieldset>

		<h3>HTML5 inputs</h3>

		<p>
			<label for="type-text">Text (text)</label>
			<input type="text" name="type-text" id="type-text" placeholder="HTML5 placeholder" />
		</p>
		<p>
			<label for="type-search">Search (search)</label>
			<input type="search" name="type-search" id="type-search" placeholder="HTML5 placeholder" />
		</p>
		<p>
			<label for="type-tel">Telephone (tel)</label>
			<input type="tel" name="type-tel" id="type-tel" placeholder="HTML5 placeholder" />
		</p>
		<p>
			<label for="type-url">URL (url)</label>
			<input type="url" name="type-url" id="type-url" placeholder="HTML5 placeholder" />
		</p>
		<p>
			<label for="type-email">Email (email)</label>
			<input type="email" name="type-email" id="type-email" placeholder="HTML5 placeholder" />
		</p>
		<p>
			<label for="type-datetime">Date and Time (datetime)</label>
			<input type="datetime" name="type-datetime" id="type-datetime" placeholder="HTML5 placeholder" />
		</p>
		<p>
			<label for="type-date">Date (date)</label>
			<input type="date" name="type-date" id="type-date" placeholder="HTML5 placeholder" />
		</p>
		<p>
			<label for="type-month">Month (month)</label>
			<input type="month" name="type-month" id="type-month" placeholder="HTML5 placeholder" />
		</p>
		<p>
			<label for="type-week">Week (week)</label>
			<input type="week" name="type-week" id="type-week" placeholder="HTML5 placeholder" />
		</p>
		<p>
			<label for="type-time">Time (time)</label>
			<input type="time" name="type-time" id="type-time" placeholder="HTML5 placeholder" />
		</p>
		<p>
			<label for="type-datetime-local">Local Date and Time (datetime-local)</label>
			<input type="datetime-local" name="type-datetime-local" id="type-datetime-local" placeholder="HTML5 placeholder" />
		</p>
		<p>
			<label for="type-number">Number (number)</label>
			<input type="number" name="type-number" id="type-number" min="0" max="20" placeholder="HTML5 placeholder" />
		</p>
		<p>
			<label for="type-range">Range (range)</label>
			<input type="range" name="type-range" id="type-range" min="0" max="100" placeholder="HTML5 placeholder" />
		</p>
		<p>
			<label for="type-color">Color (color)</label>
			<input type="color" name="type-color" id="type-color" placeholder="HTML5 placeholder" />
		</p>
		<p class="submit-area">
			<input type="submit" value="Submit" name="submit-1" class="button" />
		</p>

		<pre class="wp-ui-example">
&lt;p>
	&lt;label for="type-text">Text (text)&lt;/label>
	&lt;input type="text" name="type-text" id="type-text" placeholder="HTML5 placeholder" />
&lt;/p>
&lt;p class="submit-area">
	&lt;input type="submit" value="Submit" name="submit-1" class="button" />
&lt;/p>
</pre>
	</form>

</div><!-- .wrap -->