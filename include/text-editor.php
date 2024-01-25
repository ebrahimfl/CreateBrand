
	<style>
		

li {
	margin-left: 16px;
}

a {
	cursor: pointer;
}

.toolbar {
	padding: 16px;
	background: #eee;
}
.toolbar .head {
	display: flex;
	grid-gap: 10px;
	margin-bottom: 16px;
	flex-wrap: wrap;
}
.toolbar .head > input {
	max-width: 100px;
	padding: 6px 10px;
	border-radius: 6px;
	border: 2px solid #ddd;
	outline: none;
}
.toolbar .head select {
	background: #fff;
	border: 2px solid #ddd;
	border-radius: 6px;
	outline: none;
	cursor: pointer;
}
.toolbar .head .color {
	background: #fff;
	border: 2px solid #ddd;
	border-radius: 6px;
	outline: none;
	cursor: pointer;
	display: flex;
	align-items: center;
	grid-gap: 6px;
	padding: 0 10px;
}
.toolbar .head .color span {
	font-size: 14px;
}
.toolbar .head .color input {
	border: none;
	padding: 0;
	width: 26px;
	height: 26px;
	background: #fff;
	cursor: pointer;
}
.toolbar .head .color input::-moz-color-swatch {
	width: 20px;
	height: 20px;
	border: none;
	border-radius: 50%;
}
.toolbar .btn-toolbar {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	grid-gap: 10px;
}
.toolbar .btn-toolbar button {
	background: #fff;
	border: 2px solid #ddd;
	border-radius: 6px;
	cursor: pointer;
	width: 40px;
	height: 40px;
	display: flex;
	align-items: center;
	justify-content: center;
	font-size: 18px;
}
.toolbar .btn-toolbar button:hover {
	background: #f3f3f3;
}
#content {
	padding: 16px;
	outline: none;
	max-height: 50vh;
	overflow: auto;
}
#show-code[data-active="true"] {
	background: #eee;
}
	</style>

	<div class="full">

	</div>
	<div class="container">
		<div class="toolbar">
			<div class="head">
				<input type="text" placeholder="Filename" value="untitled" id="filename">
				<select onchange="fileHandle(this.value); this.selectedIndex=0">
					<option value="" selected="" hidden="" disabled="">File</option>
					<option value="new">New file</option>
					<option value="txt">Save as txt</option>
					<option value="pdf">Save as pdf</option>
				</select>
				<select onchange="formatDoc('formatBlock', this.value); this.selectedIndex=0;">
					<option value="" selected="" hidden="" disabled="">Format</option>
					<option value="h1">Heading 1</option>
					<option value="h2">Heading 2</option>
					<option value="h3">Heading 3</option>
					<option value="h4">Heading 4</option>
					<option value="h5">Heading 5</option>
					<option value="h6">Heading 6</option>
					<option value="p">Paragraph</option>
				</select>
				<select onchange="formatDoc('fontSize', this.value); this.selectedIndex=0;">
					<option value="" selected="" hidden="" disabled="">Font size</option>
					<option value="1">Extra small</option>
					<option value="2">Small</option>
					<option value="3">Regular</option>
					<option value="4">Medium</option>
					<option value="5">Large</option>
					<option value="6">Extra Large</option>
					<option value="7">Big</option>
				</select>
				<div class="color">
					<span>Color</span>
					<input type="color" oninput="formatDoc('foreColor', this.value); this.value='#000000';">
				</div>
				<div class="color">
					<span>Background</span>
					<input type="color" oninput="formatDoc('hiliteColor', this.value); this.value='#000000';">
				</div>
			</div>
			<div class="btn-toolbar">
				<button type="button" onclick="formatDoc('undo')"><img style="width: 25px; height:25px" ; src="https://i.ibb.co/D8WKWSK/undo-circular-arrow.png" alt=""></button>
				<button type="button" onclick="formatDoc('redo')"><img style="width: 25px; height:25px" ; src="https://i.ibb.co/VQg8rXg/redo-arrow-symbol.png" alt=""></button>
				<button type="button" onclick="formatDoc('bold')"><img style="width: 25px; height:25px" ; src="https://i.ibb.co/Sx1hPFX/bold.png" alt=""></button>
				<button type="button" onclick="formatDoc('underline')"><img style="width: 25px; height:25px" ; src="https://i.ibb.co/brmBv7W/underline.png" alt=""></button>
				<button type="button" onclick="formatDoc('italic')"><img style="width: 25px; height:25px" ; src="https://i.ibb.co/BgL7WZ0/italic-font.png" alt=""></button>
				<button type="button" onclick="formatDoc('strikeThrough')"><img style="width: 25px; height:25px" ; src="https://i.ibb.co/94R7HdT/download.png" alt=""></button>
				<button type="button" onclick="formatDoc('justifyLeft')"><img style="width: 25px; height:25px" ; src="https://i.ibb.co/s96xsVy/154589.png" alt=""></button>
				<button type="button" onclick="formatDoc('justifyCenter')"><img style="width: 25px; height:25px" ; src="https://i.ibb.co/vm0T30f/154820.png" alt=""></button>
				<button type="button" onclick="formatDoc('justifyRight')"><img style="width: 25px; height:25px" ; src="https://i.ibb.co/5BvJr2n/154818.png" alt=""></button>
				<button type="button" onclick="formatDoc('justifyFull')"><img style="width: 25px; height:25px" ; src="https://i.ibb.co/5nkWS2M/download-5.png" alt=""></button>
				<button type="button" onclick="formatDoc('insertOrderedList')"><img style="width: 25px; height:25px" ; src="https://i.ibb.co/P1vWx3N/download-1.jpg" alt=""></button>
				<button type="button" onclick="formatDoc('insertUnorderedList')"><img style="width: 25px; height:25px" ; src="https://i.ibb.co/VNW4yPw/download-6.png" alt=""></button>
				<button type="button" onclick="addLink()"><img style="width: 25px; height:25px" ; src="https://i.ibb.co/92xm22q/link-icon-template-black-color-editable-free-vector.jpg" alt=""></button>
				<button type="button" onclick="formatDoc('unlink')"><img style="width: 25px; height:25px" ; src="https://i.ibb.co/3WtbS0t/download-7.png" alt=""></button>
				<button type="button" id="show-code" data-active="false">&lt;/&gt;</button>
			</div>
		</div>


	
			<div name="div" id="content" contenteditable="true" spellcheck="false">

			</div>
			<input type="hidden" name="content" id="contentInput">
			<!-- <input type="submit" value="submit" name="submit"> -->

		<script>
			// Update the hidden input with the contenteditable div content before form submission
			document.querySelector('form').addEventListener('submit', function() {
				var contentValue = document.getElementById('content').innerHTML;
				document.getElementById('contentInput').value = contentValue;
			});
		</script>


	</div>

	<script>
		function formatDoc(cmd, value = null) {
			if (value) {
				document.execCommand(cmd, false, value);
			} else {
				document.execCommand(cmd);
			}
		}

		function addLink() {
			const url = prompt('Insert url');
			formatDoc('createLink', url);
		}




		const content = document.getElementById('content');

		content.addEventListener('mouseenter', function() {
			const a = content.querySelectorAll('a');
			a.forEach(item => {
				item.addEventListener('mouseenter', function() {
					content.setAttribute('contenteditable', false);
					item.target = '_blank';
				})
				item.addEventListener('mouseleave', function() {
					content.setAttribute('contenteditable', true);
				})
			})
		})


		const showCode = document.getElementById('show-code');
		let active = false;

		showCode.addEventListener('click', function() {
			showCode.dataset.active = !active;
			active = !active
			if (active) {
				content.textContent = content.innerHTML;
				content.setAttribute('contenteditable', false);
			} else {
				content.innerHTML = content.textContent;
				content.setAttribute('contenteditable', true);
			}
		})



		const filename = document.getElementById('filename');

		function fileHandle(value) {
			if (value === 'new') {
				content.innerHTML = '';
				filename.value = 'untitled';
			} else if (value === 'txt') {
				const blob = new Blob([content.innerText])
				const url = URL.createObjectURL(blob)
				const link = document.createElement('a');
				link.href = url;
				link.download = `${filename.value}.txt`;
				link.click();
			} else if (value === 'pdf') {
				html2pdf(content).save(filename.value);
			}
		}
	</script>