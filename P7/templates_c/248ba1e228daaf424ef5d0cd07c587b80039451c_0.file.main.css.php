<?php
/* Smarty version 4.5.2, created on 2024-04-27 22:03:09
  from 'F:\Programy\xampp\htdocs\AI-repo\P5\assets\css\main.css' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_662d59fd8ab281_17538050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '248ba1e228daaf424ef5d0cd07c587b80039451c' => 
    array (
      0 => 'F:\\Programy\\xampp\\htdocs\\AI-repo\\P5\\assets\\css\\main.css',
      1 => 1646601697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662d59fd8ab281_17538050 (Smarty_Internal_Template $_smarty_tpl) {
?>@import url("fontawesome-all.min.css");
@import url("https://fonts.googleapis.com/css?family=Roboto:100,300,100italic,300italic");

/*
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

html, body, div, span, applet, object,
iframe, h1, h2, h3, h4, h5, h6, p, blockquote,
pre, a, abbr, acronym, address, big, cite,
code, del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var, b,
u, i, center, dl, dt, dd, ol, ul, li, fieldset,
form, label, legend, table, caption, tbody,
tfoot, thead, tr, th, td, article, aside,
canvas, details, embed, figure, figcaption,
footer, header, hgroup, menu, nav, output, ruby,
section, summary, time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;}

article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
	display: block;}

body {
	line-height: 1;
}

ol, ul {
	list-style: none;
}

blockquote, q {
	quotes: none;
}

	blockquote:before, blockquote:after, q:before, q:after {
		content: '';
		content: none;
	}

table {
	border-collapse: collapse;
	border-spacing: 0;
}

body {
	-webkit-text-size-adjust: none;
}

mark {
	background-color: transparent;
	color: inherit;
}

input::-moz-focus-inner {
	border: 0;
	padding: 0;
}

input, select, textarea {
	-moz-appearance: none;
	-webkit-appearance: none;
	-ms-appearance: none;
	appearance: none;
}

/* Basic */

	html {
		box-sizing: border-box;
	}

	*, *:before, *:after {
		box-sizing: inherit;
	}

	html, body {
		background: #1c1d26;
	}

	body.is-preload *, body.is-preload *:before, body.is-preload *:after {
		-moz-animation: none !important;
		-webkit-animation: none !important;
		-ms-animation: none !important;
		animation: none !important;
		-moz-transition: none !important;
		-webkit-transition: none !important;
		-ms-transition: none !important;
		transition: none !important;
	}

	body, input, select, textarea {
		color: rgba(255, 255, 255, 0.75);
		font-family: "Roboto", Helvetica, sans-serif;
		font-size: 15pt;
		font-weight: 100;
		line-height: 1.75em;
	}

	a {
		-moz-transition: border-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-webkit-transition: border-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-ms-transition: border-color 0.2s ease-in-out, color 0.2s ease-in-out;
		transition: border-color 0.2s ease-in-out, color 0.2s ease-in-out;
		border-bottom: dotted 1px;
		color: #e44c65;
		text-decoration: none;
	}

		a:hover {
			color: #e44c65 !important;
			border-bottom-color: transparent;
		}

	strong, b {
		color: #ffffff;
		font-weight: 300;
	}

	em, i {
		font-style: italic;
	}

	p {
		margin: 0 0 2em 0;
	}

	h1, h2, h3, h4, h5, h6 {
		color: #ffffff;
		font-weight: 300;
		line-height: 1em;
		margin: 0 0 1em 0;
	}

		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
			color: inherit;
			border: 0;
		}

	h2 {
		font-size: 2em;
		line-height: 1.5em;
		letter-spacing: -0.025em;
	}

	h3 {
		font-size: 1.35em;
		line-height: 1.5em;
	}

	h4 {
		font-size: 1.1em;
		line-height: 1.5em;
	}

	h5 {
		font-size: 0.9em;
		line-height: 1.5em;
	}

	h6 {
		font-size: 0.7em;
		line-height: 1.5em;
	}

	sub {
		font-size: 0.8em;
		position: relative;
		top: 0.5em;
	}

	sup {
		font-size: 0.8em;
		position: relative;
		top: -0.5em;
	}

	hr {
		border: 0;
		border-bottom: solid 1px rgba(255, 255, 255, 0.3);
		margin: 3em 0;
	}

		hr.major {
			margin: 4em 0;
		}

	blockquote {
		border-left: solid 4px rgba(255, 255, 255, 0.3);
		font-style: italic;
		margin: 0 0 2em 0;
		padding: 0.5em 0 0.5em 2em;
	}

	code {
		background: rgba(255, 255, 255, 0.075);
		border-radius: 4px;
		font-family: "Courier New", monospace;
		font-size: 0.9em;
		margin: 0 0.25em;
		padding: 0.25em 0.65em;
	}

	pre {
		-webkit-overflow-scrolling: touch;
		font-family: "Courier New", monospace;
		font-size: 0.9em;
		margin: 0 0 2em 0;
	}

		pre code {
			display: block;
			line-height: 1.75em;
			padding: 1em 1.5em;
			overflow-x: auto;
		}

	.align-left {
		text-align: left;
	}

	.align-center {
		text-align: center;
	}

	.align-right {
		text-align: right;
	}

/* Loader */

	@-moz-keyframes spinner-show {
		0% {
			opacity: 0;
		}

		100% {
			opacity: 1;
		}
	}

	@-webkit-keyframes spinner-show {
		0% {
			opacity: 0;
		}

		100% {
			opacity: 1;
		}
	}

	@-ms-keyframes spinner-show {
		0% {
			opacity: 0;
		}

		100% {
			opacity: 1;
		}
	}

	@keyframes spinner-show {
		0% {
			opacity: 0;
		}

		100% {
			opacity: 1;
		}
	}

	@-moz-keyframes spinner-hide {
		0% {
			color: rgba(255, 255, 255, 0.15);
			z-index: 100001;
			-moz-transform: scale(1) rotate(0deg);
			-webkit-transform: scale(1) rotate(0deg);
			-ms-transform: scale(1) rotate(0deg);
			transform: scale(1) rotate(0deg);
		}

		99% {
			color: #1c1d26;
			z-index: 100001;
			-moz-transform: scale(0.5) rotate(360deg);
			-webkit-transform: scale(0.5) rotate(360deg);
			-ms-transform: scale(0.5) rotate(360deg);
			transform: scale(0.5) rotate(360deg);
		}

		100% {
			color: #1c1d26;
			z-index: -1;
			-moz-transform: scale(0.5) rotate(360deg);
			-webkit-transform: scale(0.5) rotate(360deg);
			-ms-transform: scale(0.5) rotate(360deg);
			transform: scale(0.5) rotate(360deg);
		}
	}

	@-webkit-keyframes spinner-hide {
		0% {
			color: rgba(255, 255, 255, 0.15);
			z-index: 100001;
			-moz-transform: scale(1) rotate(0deg);
			-webkit-transform: scale(1) rotate(0deg);
			-ms-transform: scale(1) rotate(0deg);
			transform: scale(1) rotate(0deg);
		}

		99% {
			color: #1c1d26;
			z-index: 100001;
			-moz-transform: scale(0.5) rotate(360deg);
			-webkit-transform: scale(0.5) rotate(360deg);
			-ms-transform: scale(0.5) rotate(360deg);
			transform: scale(0.5) rotate(360deg);
		}

		100% {
			color: #1c1d26;
			z-index: -1;
			-moz-transform: scale(0.5) rotate(360deg);
			-webkit-transform: scale(0.5) rotate(360deg);
			-ms-transform: scale(0.5) rotate(360deg);
			transform: scale(0.5) rotate(360deg);
		}
	}

	@-ms-keyframes spinner-hide {
		0% {
			color: rgba(255, 255, 255, 0.15);
			z-index: 100001;
			-moz-transform: scale(1) rotate(0deg);
			-webkit-transform: scale(1) rotate(0deg);
			-ms-transform: scale(1) rotate(0deg);
			transform: scale(1) rotate(0deg);
		}

		99% {
			color: #1c1d26;
			z-index: 100001;
			-moz-transform: scale(0.5) rotate(360deg);
			-webkit-transform: scale(0.5) rotate(360deg);
			-ms-transform: scale(0.5) rotate(360deg);
			transform: scale(0.5) rotate(360deg);
		}

		100% {
			color: #1c1d26;
			z-index: -1;
			-moz-transform: scale(0.5) rotate(360deg);
			-webkit-transform: scale(0.5) rotate(360deg);
			-ms-transform: scale(0.5) rotate(360deg);
			transform: scale(0.5) rotate(360deg);
		}
	}

	@keyframes spinner-hide {
		0% {
			color: rgba(255, 255, 255, 0.15);
			z-index: 100001;
			-moz-transform: scale(1) rotate(0deg);
			-webkit-transform: scale(1) rotate(0deg);
			-ms-transform: scale(1) rotate(0deg);
			transform: scale(1) rotate(0deg);
		}

		99% {
			color: #1c1d26;
			z-index: 100001;
			-moz-transform: scale(0.5) rotate(360deg);
			-webkit-transform: scale(0.5) rotate(360deg);
			-ms-transform: scale(0.5) rotate(360deg);
			transform: scale(0.5) rotate(360deg);
		}

		100% {
			color: #1c1d26;
			z-index: -1;
			-moz-transform: scale(0.5) rotate(360deg);
			-webkit-transform: scale(0.5) rotate(360deg);
			-ms-transform: scale(0.5) rotate(360deg);
			transform: scale(0.5) rotate(360deg);
		}
	}

	@-moz-keyframes spinner-rotate {
		0% {
			-moz-transform: scale(1) rotate(0deg);
			-webkit-transform: scale(1) rotate(0deg);
			-ms-transform: scale(1) rotate(0deg);
			transform: scale(1) rotate(0deg);
		}

		100% {
			-moz-transform: scale(1) rotate(360deg);
			-webkit-transform: scale(1) rotate(360deg);
			-ms-transform: scale(1) rotate(360deg);
			transform: scale(1) rotate(360deg);
		}
	}

	@-webkit-keyframes spinner-rotate {
		0% {
			-moz-transform: scale(1) rotate(0deg);
			-webkit-transform: scale(1) rotate(0deg);
			-ms-transform: scale(1) rotate(0deg);
			transform: scale(1) rotate(0deg);
		}

		100% {
			-moz-transform: scale(1) rotate(360deg);
			-webkit-transform: scale(1) rotate(360deg);
			-ms-transform: scale(1) rotate(360deg);
			transform: scale(1) rotate(360deg);
		}
	}

	@-ms-keyframes spinner-rotate {
		0% {
			-moz-transform: scale(1) rotate(0deg);
			-webkit-transform: scale(1) rotate(0deg);
			-ms-transform: scale(1) rotate(0deg);
			transform: scale(1) rotate(0deg);
		}

		100% {
			-moz-transform: scale(1) rotate(360deg);
			-webkit-transform: scale(1) rotate(360deg);
			-ms-transform: scale(1) rotate(360deg);
			transform: scale(1) rotate(360deg);
		}
	}

	@keyframes spinner-rotate {
		0% {
			-moz-transform: scale(1) rotate(0deg);
			-webkit-transform: scale(1) rotate(0deg);
			-ms-transform: scale(1) rotate(0deg);
			transform: scale(1) rotate(0deg);
		}

		100% {
			-moz-transform: scale(1) rotate(360deg);
			-webkit-transform: scale(1) rotate(360deg);
			-ms-transform: scale(1) rotate(360deg);
			transform: scale(1) rotate(360deg);
		}
	}

	@-moz-keyframes overlay-hide {
		0% {
			opacity: 1;
			z-index: 100000;
		}

		15% {
			opacity: 1;
			z-index: 100000;
		}

		99% {
			opacity: 0;
			z-index: 100000;
		}

		100% {
			opacity: 0;
			z-index: -1;
		}
	}

	@-webkit-keyframes overlay-hide {
		0% {
			opacity: 1;
			z-index: 100000;
		}

		15% {
			opacity: 1;
			z-index: 100000;
		}

		99% {
			opacity: 0;
			z-index: 100000;
		}

		100% {
			opacity: 0;
			z-index: -1;
		}
	}

	@-ms-keyframes overlay-hide {
		0% {
			opacity: 1;
			z-index: 100000;
		}

		15% {
			opacity: 1;
			z-index: 100000;
		}

		99% {
			opacity: 0;
			z-index: 100000;
		}

		100% {
			opacity: 0;
			z-index: -1;
		}
	}

	@keyframes overlay-hide {
		0% {
			opacity: 1;
			z-index: 100000;
		}

		15% {
			opacity: 1;
			z-index: 100000;
		}

		99% {
			opacity: 0;
			z-index: 100000;
		}

		100% {
			opacity: 0;
			z-index: -1;
		}
	}

	body.landing {
		text-decoration: none;
	}

		body.landing:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			display: inline-block;
			font-style: normal;
			font-variant: normal;
			text-rendering: auto;
			line-height: 1;
			text-transform: none !important;
			font-family: 'Font Awesome 5 Free';
			font-weight: 900;
		}

		body.landing:before {
			-moz-animation: spinner-show 1.5s 1 0.25s ease forwards, spinner-hide 0.25s ease-in-out forwards !important;
			-webkit-animation: spinner-show 1.5s 1 0.25s ease forwards, spinner-hide 0.25s ease-in-out forwards !important;
			-ms-animation: spinner-show 1.5s 1 0.25s ease forwards, spinner-hide 0.25s ease-in-out forwards !important;
			animation: spinner-show 1.5s 1 0.25s ease forwards, spinner-hide 0.25s ease-in-out forwards !important;
			-moz-transform-origin: 50% 50%;
			-webkit-transform-origin: 50% 50%;
			-ms-transform-origin: 50% 50%;
			transform-origin: 50% 50%;
			color: rgba(255, 255, 255, 0.15);
			content: '\f1ce';
			cursor: default;
			display: block;
			font-size: 2em;
			height: 2em;
			left: 50%;
			line-height: 2em;
			margin: -1em 0 0 -1em;
			opacity: 0;
			position: fixed;
			text-align: center;
			top: 50%;
			width: 2em;
			z-index: -1;
		}

		body.landing:after {
			-moz-animation: overlay-hide 1.5s ease-in forwards !important;
			-webkit-animation: overlay-hide 1.5s ease-in forwards !important;
			-ms-animation: overlay-hide 1.5s ease-in forwards !important;
			animation: overlay-hide 1.5s ease-in forwards !important;
			background: #1c1d26;
			content: '';
			display: block;
			height: 100%;
			left: 0;
			opacity: 0;
			position: fixed;
			top: 0;
			width: 100%;
			z-index: -1;
		}

		body.landing.is-preload:before {
			-moz-animation: spinner-show 1.5s 1 0.25s ease forwards, spinner-rotate 0.75s infinite linear !important;
			-webkit-animation: spinner-show 1.5s 1 0.25s ease forwards, spinner-rotate 0.75s infinite linear !important;
			-ms-animation: spinner-show 1.5s 1 0.25s ease forwards, spinner-rotate 0.75s infinite linear !important;
			animation: spinner-show 1.5s 1 0.25s ease forwards, spinner-rotate 0.75s infinite linear !important;
			z-index: 100001;
		}

		body.landing.is-preload:after {
			-moz-animation: none !important;
			-webkit-animation: none !important;
			-ms-animation: none !important;
			animation: none !important;
			opacity: 1;
			z-index: 100000;
		}

	@media (-webkit-min-device-pixel-ratio: 2) {

		body.landing:before {
			line-height: 2.025em;
		}

	}

/* Container */

	.container {
		margin: 0 auto;
		max-width: calc(100% - 4em);
		width: 70em;
	}

		.container.xsmall {
			width: 17.5em;
		}

		.container.small {
			width: 35em;
		}

		.container.medium {
			width: 52.5em;
		}

		.container.large {
			width: 87.5em;
		}

		.container.xlarge {
			width: 105em;
		}

		.container.max {
			width: 100%;
		}

		@media screen and (max-width: 1280px) {

			.container {
				width: 90%;
				max-width: 100%;
			}

		}

		@media screen and (max-width: 980px) {

			.container {
				width: 100% !important;
			}

		}

/* Row */

	.row {
		display: flex;
		flex-wrap: wrap;
		box-sizing: border-box;
		align-items: stretch;
	}

		.row > * {
			box-sizing: border-box;
		}

		.row.gtr-uniform > * > :last-child {
			margin-bottom: 0;
		}

		.row.aln-left {
			justify-content: flex-start;
		}

		.row.aln-center {
			justify-content: center;
		}

		.row.aln-right {
			justify-content: flex-end;
		}

		.row.aln-top {
			align-items: flex-start;
		}

		.row.aln-middle {
			align-items: center;
		}

		.row.aln-bottom {
			align-items: flex-end;
		}

		.row > .imp {
			order: -1;
		}

		.row > .col-1 {
			width: 8.33333%;
		}

		.row > .off-1 {
			margin-left: 8.33333%;
		}

		.row > .col-2 {
			width: 16.66667%;
		}

		.row > .off-2 {
			margin-left: 16.66667%;
		}

		.row > .col-3 {
			width: 25%;
		}

		.row > .off-3 {
			margin-left: 25%;
		}

		.row > .col-4 {
			width: 33.33333%;
		}

		.row > .off-4 {
			margin-left: 33.33333%;
		}

		.row > .col-5 {
			width: 41.66667%;
		}

		.row > .off-5 {
			margin-left: 41.66667%;
		}

		.row > .col-6 {
			width: 50%;
		}

		.row > .off-6 {
			margin-left: 50%;
		}

		.row > .col-7 {
			width: 58.33333%;
		}

		.row > .off-7 {
			margin-left: 58.33333%;
		}

		.row > .col-8 {
			width: 66.66667%;
		}

		.row > .off-8 {
			margin-left: 66.66667%;
		}

		.row > .col-9 {
			width: 75%;
		}

		.row > .off-9 {
			margin-left: 75%;
		}

		.row > .col-10 {
			width: 83.33333%;
		}

		.row > .off-10 {
			margin-left: 83.33333%;
		}

		.row > .col-11 {
			width: 91.66667%;
		}

		.row > .off-11 {
			margin-left: 91.66667%;
		}

		.row > .col-12 {
			width: 100%;
		}

		.row > .off-12 {
			margin-left: 100%;
		}

		.row.gtr-0 {
			margin-top: 0;
			margin-left: 0em;
		}

			.row.gtr-0 > * {
				padding: 0 0 0 0em;
			}

			.row.gtr-0.gtr-uniform {
				margin-top: 0em;
			}

				.row.gtr-0.gtr-uniform > * {
					padding-top: 0em;
				}

		.row.gtr-25 {
			margin-top: 0;
			margin-left: -0.625em;
		}

			.row.gtr-25 > * {
				padding: 0 0 0 0.625em;
			}

			.row.gtr-25.gtr-uniform {
				margin-top: -0.625em;
			}

				.row.gtr-25.gtr-uniform > * {
					padding-top: 0.625em;
				}

		.row.gtr-50 {
			margin-top: 0;
			margin-left: -1.25em;
		}

			.row.gtr-50 > * {
				padding: 0 0 0 1.25em;
			}

			.row.gtr-50.gtr-uniform {
				margin-top: -1.25em;
			}

				.row.gtr-50.gtr-uniform > * {
					padding-top: 1.25em;
				}

		.row {
			margin-top: 0;
			margin-left: -2.5em;
		}

			.row > * {
				padding: 0 0 0 2.5em;
			}

			.row.gtr-uniform {
				margin-top: -2.5em;
			}

				.row.gtr-uniform > * {
					padding-top: 2.5em;
				}

		.row.gtr-150 {
			margin-top: 0;
			margin-left: -3.75em;
		}

			.row.gtr-150 > * {
				padding: 0 0 0 3.75em;
			}

			.row.gtr-150.gtr-uniform {
				margin-top: -3.75em;
			}

				.row.gtr-150.gtr-uniform > * {
					padding-top: 3.75em;
				}

		.row.gtr-200 {
			margin-top: 0;
			margin-left: -5em;
		}

			.row.gtr-200 > * {
				padding: 0 0 0 5em;
			}

			.row.gtr-200.gtr-uniform {
				margin-top: -5em;
			}

				.row.gtr-200.gtr-uniform > * {
					padding-top: 5em;
				}

		@media screen and (max-width: 1680px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-xlarge {
					order: -1;
				}

				.row > .col-1-xlarge {
					width: 8.33333%;
				}

				.row > .off-1-xlarge {
					margin-left: 8.33333%;
				}

				.row > .col-2-xlarge {
					width: 16.66667%;
				}

				.row > .off-2-xlarge {
					margin-left: 16.66667%;
				}

				.row > .col-3-xlarge {
					width: 25%;
				}

				.row > .off-3-xlarge {
					margin-left: 25%;
				}

				.row > .col-4-xlarge {
					width: 33.33333%;
				}

				.row > .off-4-xlarge {
					margin-left: 33.33333%;
				}

				.row > .col-5-xlarge {
					width: 41.66667%;
				}

				.row > .off-5-xlarge {
					margin-left: 41.66667%;
				}

				.row > .col-6-xlarge {
					width: 50%;
				}

				.row > .off-6-xlarge {
					margin-left: 50%;
				}

				.row > .col-7-xlarge {
					width: 58.33333%;
				}

				.row > .off-7-xlarge {
					margin-left: 58.33333%;
				}

				.row > .col-8-xlarge {
					width: 66.66667%;
				}

				.row > .off-8-xlarge {
					margin-left: 66.66667%;
				}

				.row > .col-9-xlarge {
					width: 75%;
				}

				.row > .off-9-xlarge {
					margin-left: 75%;
				}

				.row > .col-10-xlarge {
					width: 83.33333%;
				}

				.row > .off-10-xlarge {
					margin-left: 83.33333%;
				}

				.row > .col-11-xlarge {
					width: 91.66667%;
				}

				.row > .off-11-xlarge {
					margin-left: 91.66667%;
				}

				.row > .col-12-xlarge {
					width: 100%;
				}

				.row > .off-12-xlarge {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0;
					margin-left: 0em;
				}

					.row.gtr-0 > * {
						padding: 0 0 0 0em;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0em;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0em;
						}

				.row.gtr-25 {
					margin-top: 0;
					margin-left: -0.625em;
				}

					.row.gtr-25 > * {
						padding: 0 0 0 0.625em;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -0.625em;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 0.625em;
						}

				.row.gtr-50 {
					margin-top: 0;
					margin-left: -1.25em;
				}

					.row.gtr-50 > * {
						padding: 0 0 0 1.25em;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -1.25em;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 1.25em;
						}

				.row {
					margin-top: 0;
					margin-left: -2.5em;
				}

					.row > * {
						padding: 0 0 0 2.5em;
					}

					.row.gtr-uniform {
						margin-top: -2.5em;
					}

						.row.gtr-uniform > * {
							padding-top: 2.5em;
						}

				.row.gtr-150 {
					margin-top: 0;
					margin-left: -3.75em;
				}

					.row.gtr-150 > * {
						padding: 0 0 0 3.75em;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -3.75em;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 3.75em;
						}

				.row.gtr-200 {
					margin-top: 0;
					margin-left: -5em;
				}

					.row.gtr-200 > * {
						padding: 0 0 0 5em;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -5em;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 5em;
						}

		}

		@media screen and (max-width: 1280px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-large {
					order: -1;
				}

				.row > .col-1-large {
					width: 8.33333%;
				}

				.row > .off-1-large {
					margin-left: 8.33333%;
				}

				.row > .col-2-large {
					width: 16.66667%;
				}

				.row > .off-2-large {
					margin-left: 16.66667%;
				}

				.row > .col-3-large {
					width: 25%;
				}

				.row > .off-3-large {
					margin-left: 25%;
				}

				.row > .col-4-large {
					width: 33.33333%;
				}

				.row > .off-4-large {
					margin-left: 33.33333%;
				}

				.row > .col-5-large {
					width: 41.66667%;
				}

				.row > .off-5-large {
					margin-left: 41.66667%;
				}

				.row > .col-6-large {
					width: 50%;
				}

				.row > .off-6-large {
					margin-left: 50%;
				}

				.row > .col-7-large {
					width: 58.33333%;
				}

				.row > .off-7-large {
					margin-left: 58.33333%;
				}

				.row > .col-8-large {
					width: 66.66667%;
				}

				.row > .off-8-large {
					margin-left: 66.66667%;
				}

				.row > .col-9-large {
					width: 75%;
				}

				.row > .off-9-large {
					margin-left: 75%;
				}

				.row > .col-10-large {
					width: 83.33333%;
				}

				.row > .off-10-large {
					margin-left: 83.33333%;
				}

				.row > .col-11-large {
					width: 91.66667%;
				}

				.row > .off-11-large {
					margin-left: 91.66667%;
				}

				.row > .col-12-large {
					width: 100%;
				}

				.row > .off-12-large {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0;
					margin-left: 0em;
				}

					.row.gtr-0 > * {
						padding: 0 0 0 0em;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0em;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0em;
						}

				.row.gtr-25 {
					margin-top: 0;
					margin-left: -0.625em;
				}

					.row.gtr-25 > * {
						padding: 0 0 0 0.625em;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -0.625em;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 0.625em;
						}

				.row.gtr-50 {
					margin-top: 0;
					margin-left: -1.25em;
				}

					.row.gtr-50 > * {
						padding: 0 0 0 1.25em;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -1.25em;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 1.25em;
						}

				.row {
					margin-top: 0;
					margin-left: -2.5em;
				}

					.row > * {
						padding: 0 0 0 2.5em;
					}

					.row.gtr-uniform {
						margin-top: -2.5em;
					}

						.row.gtr-uniform > * {
							padding-top: 2.5em;
						}

				.row.gtr-150 {
					margin-top: 0;
					margin-left: -3.75em;
				}

					.row.gtr-150 > * {
						padding: 0 0 0 3.75em;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -3.75em;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 3.75em;
						}

				.row.gtr-200 {
					margin-top: 0;
					margin-left: -5em;
				}

					.row.gtr-200 > * {
						padding: 0 0 0 5em;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -5em;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 5em;
						}

		}

		@media screen and (max-width: 980px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-medium {
					order: -1;
				}

				.row > .col-1-medium {
					width: 8.33333%;
				}

				.row > .off-1-medium {
					margin-left: 8.33333%;
				}

				.row > .col-2-medium {
					width: 16.66667%;
				}

				.row > .off-2-medium {
					margin-left: 16.66667%;
				}

				.row > .col-3-medium {
					width: 25%;
				}

				.row > .off-3-medium {
					margin-left: 25%;
				}

				.row > .col-4-medium {
					width: 33.33333%;
				}

				.row > .off-4-medium {
					margin-left: 33.33333%;
				}

				.row > .col-5-medium {
					width: 41.66667%;
				}

				.row > .off-5-medium {
					margin-left: 41.66667%;
				}

				.row > .col-6-medium {
					width: 50%;
				}

				.row > .off-6-medium {
					margin-left: 50%;
				}

				.row > .col-7-medium {
					width: 58.33333%;
				}

				.row > .off-7-medium {
					margin-left: 58.33333%;
				}

				.row > .col-8-medium {
					width: 66.66667%;
				}

				.row > .off-8-medium {
					margin-left: 66.66667%;
				}

				.row > .col-9-medium {
					width: 75%;
				}

				.row > .off-9-medium {
					margin-left: 75%;
				}

				.row > .col-10-medium {
					width: 83.33333%;
				}

				.row > .off-10-medium {
					margin-left: 83.33333%;
				}

				.row > .col-11-medium {
					width: 91.66667%;
				}

				.row > .off-11-medium {
					margin-left: 91.66667%;
				}

				.row > .col-12-medium {
					width: 100%;
				}

				.row > .off-12-medium {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0;
					margin-left: 0em;
				}

					.row.gtr-0 > * {
						padding: 0 0 0 0em;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0em;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0em;
						}

				.row.gtr-25 {
					margin-top: 0;
					margin-left: -0.625em;
				}

					.row.gtr-25 > * {
						padding: 0 0 0 0.625em;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -0.625em;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 0.625em;
						}

				.row.gtr-50 {
					margin-top: 0;
					margin-left: -1.25em;
				}

					.row.gtr-50 > * {
						padding: 0 0 0 1.25em;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -1.25em;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 1.25em;
						}

				.row {
					margin-top: 0;
					margin-left: -2.5em;
				}

					.row > * {
						padding: 0 0 0 2.5em;
					}

					.row.gtr-uniform {
						margin-top: -2.5em;
					}

						.row.gtr-uniform > * {
							padding-top: 2.5em;
						}

				.row.gtr-150 {
					margin-top: 0;
					margin-left: -3.75em;
				}

					.row.gtr-150 > * {
						padding: 0 0 0 3.75em;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -3.75em;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 3.75em;
						}

				.row.gtr-200 {
					margin-top: 0;
					margin-left: -5em;
				}

					.row.gtr-200 > * {
						padding: 0 0 0 5em;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -5em;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 5em;
						}

		}

		@media screen and (max-width: 736px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-small {
					order: -1;
				}

				.row > .col-1-small {
					width: 8.33333%;
				}

				.row > .off-1-small {
					margin-left: 8.33333%;
				}

				.row > .col-2-small {
					width: 16.66667%;
				}

				.row > .off-2-small {
					margin-left: 16.66667%;
				}

				.row > .col-3-small {
					width: 25%;
				}

				.row > .off-3-small {
					margin-left: 25%;
				}

				.row > .col-4-small {
					width: 33.33333%;
				}

				.row > .off-4-small {
					margin-left: 33.33333%;
				}

				.row > .col-5-small {
					width: 41.66667%;
				}

				.row > .off-5-small {
					margin-left: 41.66667%;
				}

				.row > .col-6-small {
					width: 50%;
				}

				.row > .off-6-small {
					margin-left: 50%;
				}

				.row > .col-7-small {
					width: 58.33333%;
				}

				.row > .off-7-small {
					margin-left: 58.33333%;
				}

				.row > .col-8-small {
					width: 66.66667%;
				}

				.row > .off-8-small {
					margin-left: 66.66667%;
				}

				.row > .col-9-small {
					width: 75%;
				}

				.row > .off-9-small {
					margin-left: 75%;
				}

				.row > .col-10-small {
					width: 83.33333%;
				}

				.row > .off-10-small {
					margin-left: 83.33333%;
				}

				.row > .col-11-small {
					width: 91.66667%;
				}

				.row > .off-11-small {
					margin-left: 91.66667%;
				}

				.row > .col-12-small {
					width: 100%;
				}

				.row > .off-12-small {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0;
					margin-left: 0em;
				}

					.row.gtr-0 > * {
						padding: 0 0 0 0em;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0em;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0em;
						}

				.row.gtr-25 {
					margin-top: 0;
					margin-left: -0.625em;
				}

					.row.gtr-25 > * {
						padding: 0 0 0 0.625em;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -0.625em;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 0.625em;
						}

				.row.gtr-50 {
					margin-top: 0;
					margin-left: -1.25em;
				}

					.row.gtr-50 > * {
						padding: 0 0 0 1.25em;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -1.25em;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 1.25em;
						}

				.row {
					margin-top: 0;
					margin-left: -2.5em;
				}

					.row > * {
						padding: 0 0 0 2.5em;
					}

					.row.gtr-uniform {
						margin-top: -2.5em;
					}

						.row.gtr-uniform > * {
							padding-top: 2.5em;
						}

				.row.gtr-150 {
					margin-top: 0;
					margin-left: -3.75em;
				}

					.row.gtr-150 > * {
						padding: 0 0 0 3.75em;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -3.75em;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 3.75em;
						}

				.row.gtr-200 {
					margin-top: 0;
					margin-left: -5em;
				}

					.row.gtr-200 > * {
						padding: 0 0 0 5em;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -5em;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 5em;
						}

		}

		@media screen and (max-width: 480px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-xsmall {
					order: -1;
				}

				.row > .col-1-xsmall {
					width: 8.33333%;
				}

				.row > .off-1-xsmall {
					margin-left: 8.33333%;
				}

				.row > .col-2-xsmall {
					width: 16.66667%;
				}

				.row > .off-2-xsmall {
					margin-left: 16.66667%;
				}

				.row > .col-3-xsmall {
					width: 25%;
				}

				.row > .off-3-xsmall {
					margin-left: 25%;
				}

				.row > .col-4-xsmall {
					width: 33.33333%;
				}

				.row > .off-4-xsmall {
					margin-left: 33.33333%;
				}

				.row > .col-5-xsmall {
					width: 41.66667%;
				}

				.row > .off-5-xsmall {
					margin-left: 41.66667%;
				}

				.row > .col-6-xsmall {
					width: 50%;
				}

				.row > .off-6-xsmall {
					margin-left: 50%;
				}

				.row > .col-7-xsmall {
					width: 58.33333%;
				}

				.row > .off-7-xsmall {
					margin-left: 58.33333%;
				}

				.row > .col-8-xsmall {
					width: 66.66667%;
				}

				.row > .off-8-xsmall {
					margin-left: 66.66667%;
				}

				.row > .col-9-xsmall {
					width: 75%;
				}

				.row > .off-9-xsmall {
					margin-left: 75%;
				}

				.row > .col-10-xsmall {
					width: 83.33333%;
				}

				.row > .off-10-xsmall {
					margin-left: 83.33333%;
				}

				.row > .col-11-xsmall {
					width: 91.66667%;
				}

				.row > .off-11-xsmall {
					margin-left: 91.66667%;
				}

				.row > .col-12-xsmall {
					width: 100%;
				}

				.row > .off-12-xsmall {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0;
					margin-left: 0em;
				}

					.row.gtr-0 > * {
						padding: 0 0 0 0em;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0em;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0em;
						}

				.row.gtr-25 {
					margin-top: 0;
					margin-left: -0.625em;
				}

					.row.gtr-25 > * {
						padding: 0 0 0 0.625em;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -0.625em;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 0.625em;
						}

				.row.gtr-50 {
					margin-top: 0;
					margin-left: -1.25em;
				}

					.row.gtr-50 > * {
						padding: 0 0 0 1.25em;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -1.25em;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 1.25em;
						}

				.row {
					margin-top: 0;
					margin-left: -2.5em;
				}

					.row > * {
						padding: 0 0 0 2.5em;
					}

					.row.gtr-uniform {
						margin-top: -2.5em;
					}

						.row.gtr-uniform > * {
							padding-top: 2.5em;
						}

				.row.gtr-150 {
					margin-top: 0;
					margin-left: -3.75em;
				}

					.row.gtr-150 > * {
						padding: 0 0 0 3.75em;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -3.75em;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 3.75em;
						}

				.row.gtr-200 {
					margin-top: 0;
					margin-left: -5em;
				}

					.row.gtr-200 > * {
						padding: 0 0 0 5em;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -5em;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 5em;
						}

		}

/* Section/Article */

	section.special, article.special {
		text-align: center;
	}

	header p {
		color: #ffffff;
		position: relative;
		margin: 0 0 1.5em 0;
	}

	header h2 + p {
		font-size: 1.25em;
		margin-top: -1em;
		line-height: 1.75em;
	}

	header h3 + p {
		font-size: 1.1em;
		margin-top: -0.8em;
		line-height: 1.75em;
	}

	header h4 + p,
	header h5 + p,
	header h6 + p {
		font-size: 0.9em;
		margin-top: -0.6em;
		line-height: 1.5em;
	}

	header.major {
		margin: 0 0 4em 0;
		position: relative;
		text-align: center;
	}

		header.major:after {
			background: #e44c65;
			content: '';
			display: inline-block;
			height: 0.2em;
			max-width: 20em;
			width: 75%;
		}

	footer.major {
		margin: 4em 0 0 0;
	}

/* Form */

	form {
		margin: 0 0 2em 0;
	}

		form.cta {
			max-width: 35em;
			margin-left: auto;
			margin-right: auto;
		}

	label {
		color: #ffffff;
		display: block;
		font-size: 0.9em;
		font-weight: 300;
		margin: 0 0 1em 0;
	}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select,
	textarea {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		-moz-transition: border-color 0.2s ease-in-out;
		-webkit-transition: border-color 0.2s ease-in-out;
		-ms-transition: border-color 0.2s ease-in-out;
		transition: border-color 0.2s ease-in-out;
		background: transparent;
		border-radius: 4px;
		border: solid 1px rgba(255, 255, 255, 0.3);
		color: inherit;
		display: block;
		outline: 0;
		padding: 0 1em;
		text-decoration: none;
		width: 100%;
	}

		input[type="text"]:invalid,
		input[type="password"]:invalid,
		input[type="email"]:invalid,
		select:invalid,
		textarea:invalid {
			box-shadow: none;
		}

		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="email"]:focus,
		select:focus,
		textarea:focus {
			border-color: #e44c65;
		}

	select {
		background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' preserveAspectRatio='none' viewBox='0 0 40 40'%3E%3Cpath d='M9.4,12.3l10.4,10.4l10.4-10.4c0.2-0.2,0.5-0.4,0.9-0.4c0.3,0,0.6,0.1,0.9,0.4l3.3,3.3c0.2,0.2,0.4,0.5,0.4,0.9 c0,0.4-0.1,0.6-0.4,0.9L20.7,31.9c-0.2,0.2-0.5,0.4-0.9,0.4c-0.3,0-0.6-0.1-0.9-0.4L4.3,17.3c-0.2-0.2-0.4-0.5-0.4-0.9 c0-0.4,0.1-0.6,0.4-0.9l3.3-3.3c0.2-0.2,0.5-0.4,0.9-0.4S9.1,12.1,9.4,12.3z' fill='rgba(255, 255, 255, 0.3)' /%3E%3C/svg%3E");
		background-size: 1.25rem;
		background-repeat: no-repeat;
		background-position: calc(100% - 1rem) center;
		height: 3em;
		padding-right: 3em;
		text-overflow: ellipsis;
	}

		select option {
			color: #ffffff;
			background: #1c1d26;
		}

		select:focus::-ms-value {
			background-color: transparent;
		}

		select::-ms-expand {
			display: none;
		}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select {
		height: 3em;
	}

	textarea {
		padding: 0.75em 1em;
	}

	input[type="checkbox"],
	input[type="radio"] {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		display: block;
		float: left;
		margin-right: -2em;
		opacity: 0;
		width: 1em;
		z-index: -1;
	}

		input[type="checkbox"] + label,
		input[type="radio"] + label {
			text-decoration: none;
			color: rgba(255, 255, 255, 0.75);
			cursor: pointer;
			display: inline-block;
			font-size: 1em;
			font-weight: 100;
			padding-left: 2.55em;
			padding-right: 0.75em;
			position: relative;
		}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				display: inline-block;
				font-style: normal;
				font-variant: normal;
				text-rendering: auto;
				line-height: 1;
				text-transform: none !important;
				font-family: 'Font Awesome 5 Free';
				font-weight: 900;
			}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				border-radius: 4px;
				border: solid 1px rgba(255, 255, 255, 0.3);
				content: '';
				display: inline-block;
				font-size: 0.8em;
				height: 2.25em;
				left: 0;
				line-height: 2.25em;
				position: absolute;
				text-align: center;
				top: 0;
				width: 2.25em;
			}

		input[type="checkbox"]:checked + label:before,
		input[type="radio"]:checked + label:before {
			background: rgba(255, 255, 255, 0.25);
			color: #ffffff;
			content: '\f00c';
		}

		input[type="checkbox"]:focus + label:before,
		input[type="radio"]:focus + label:before {
			border-color: #e44c65;
		}

	input[type="checkbox"] + label:before {
		border-radius: 4px;
	}

	input[type="radio"] + label:before {
		border-radius: 100%;
	}

	::-webkit-input-placeholder {
		color: rgba(255, 255, 255, 0.5) !important;
		opacity: 1.0;
	}

	:-moz-placeholder {
		color: rgba(255, 255, 255, 0.5) !important;
		opacity: 1.0;
	}

	::-moz-placeholder {
		color: rgba(255, 255, 255, 0.5) !important;
		opacity: 1.0;
	}

	:-ms-input-placeholder {
		color: rgba(255, 255, 255, 0.5) !important;
		opacity: 1.0;
	}

/* Box */

	.box {
		border-radius: 4px;
		border: solid 1px rgba(255, 255, 255, 0.3);
		margin-bottom: 2em;
		padding: 1.5em;
	}

		.box > :last-child,
		.box > :last-child > :last-child,
		.box > :last-child > :last-child > :last-child {
			margin-bottom: 0;
		}

		.box.alt {
			border: 0;
			border-radius: 0;
			padding: 0;
		}

/* Icon */

	.icon {
		text-decoration: none;
		border-bottom: none;
		position: relative;
	}

		.icon:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			display: inline-block;
			font-style: normal;
			font-variant: normal;
			text-rendering: auto;
			line-height: 1;
			text-transform: none !important;
			font-family: 'Font Awesome 5 Free';
			font-weight: 400;
		}

		.icon > .label {
			display: none;
		}

		.icon:before {
			line-height: inherit;
		}

		.icon.solid:before {
			font-weight: 900 !important;
		}

		.icon.brands:before {
			font-family: 'Font Awesome 5 Brands' !important;
		}

		.icon.alt {
			text-decoration: none;
		}

			.icon.alt:before {
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				display: inline-block;
				font-style: normal;
				font-variant: normal;
				text-rendering: auto;
				line-height: 1;
				text-transform: none !important;
				font-family: 'Font Awesome 5 Free';
				font-weight: 400;
			}

			.icon.alt:before {
				color: #1c1d26 !important;
				text-shadow: 1px 0 0 #ffffff, -1px 0 0 #ffffff, 0 1px 0 #ffffff, 0 -1px 0 #ffffff;
			}

		.icon.major {
			background: #272833;
			border-radius: 100%;
			cursor: default;
			display: inline-block;
			height: 6em;
			line-height: 5.65em;
			margin: 0 0 2em 0;
			text-align: center;
			width: 6em;
		}

			.icon.major:before {
				font-size: 2.25em;
			}

			.icon.major.alt {
				text-decoration: none;
			}

				.icon.major.alt:before {
					-moz-osx-font-smoothing: grayscale;
					-webkit-font-smoothing: antialiased;
					display: inline-block;
					font-style: normal;
					font-variant: normal;
					text-rendering: auto;
					line-height: 1;
					text-transform: none !important;
					font-family: 'Font Awesome 5 Free';
					font-weight: 400;
				}

				.icon.major.alt:before {
					color: #272833 !important;
					text-shadow: 1px 0 0 #ffffff, -1px 0 0 #ffffff, 0 1px 0 #ffffff, 0 -1px 0 #ffffff;
				}

/* Image */

	.image {
		border-radius: 4px;
		border: 0;
		display: inline-block;
		position: relative;
		overflow: hidden;
	}

		.image:before {
			content: '';
			display: block;
			position: absolute;
			left: 0;
			top: 0;
			background-image: url("images/overlay.png");
			width: 100%;
			height: 100%;
			z-index: 1;
		}

		.image img {
			border-radius: 4px;
			display: block;
		}

		.image.left {
			float: left;
			margin: 0 1.5em 1em 0;
			top: 0.25em;
		}

		.image.right {
			float: right;
			margin: 0 0 1em 1.5em;
			top: 0.25em;
		}

		.image.left, .image.right {
			max-width: 40%;
		}

			.image.left img, .image.right img {
				width: 100%;
			}

		.image.fit {
			display: block;
			margin: 0 0 2em 0;
			width: 100%;
		}

			.image.fit img {
				width: 100%;
			}

/* List */

	ol {
		list-style: decimal;
		margin: 0 0 2em 0;
		padding-left: 1.25em;
	}

		ol li {
			padding-left: 0.25em;
		}

	ul {
		list-style: disc;
		margin: 0 0 2em 0;
		padding-left: 1em;
	}

		ul li {
			padding-left: 0.5em;
		}

		ul.alt {
			list-style: none;
			padding-left: 0;
		}

			ul.alt li {
				border-top: solid 1px rgba(255, 255, 255, 0.3);
				padding: 0.5em 0;
			}

				ul.alt li:first-child {
					border-top: 0;
					padding-top: 0;
				}

	dl {
		margin: 0 0 2em 0;
	}

/* Icons */

	ul.icons {
		cursor: default;
		list-style: none;
		padding-left: 0;
	}

		ul.icons li {
			display: inline-block;
			height: 2.5em;
			line-height: 2.5em;
			padding: 0 0.5em;
		}

			ul.icons li .icon {
				font-size: 0.8em;
			}

				ul.icons li .icon:before {
					font-size: 2em;
				}

/* Actions */

	ul.actions {
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		cursor: default;
		list-style: none;
		margin-left: -1em;
		padding-left: 0;
	}

		ul.actions li {
			padding: 0 0 0 1em;
			vertical-align: middle;
		}

		ul.actions.special {
			-moz-justify-content: center;
			-webkit-justify-content: center;
			-ms-justify-content: center;
			justify-content: center;
			width: 100%;
			margin-left: 0;
		}

			ul.actions.special li:first-child {
				padding-left: 0;
			}

		ul.actions.stacked {
			-moz-flex-direction: column;
			-webkit-flex-direction: column;
			-ms-flex-direction: column;
			flex-direction: column;
			margin-left: 0;
		}

			ul.actions.stacked li {
				padding: 1.3em 0 0 0;
			}

				ul.actions.stacked li:first-child {
					padding-top: 0;
				}

		ul.actions.fit {
			width: calc(100% + 1em);
		}

			ul.actions.fit li {
				-moz-flex-grow: 1;
				-webkit-flex-grow: 1;
				-ms-flex-grow: 1;
				flex-grow: 1;
				-moz-flex-shrink: 1;
				-webkit-flex-shrink: 1;
				-ms-flex-shrink: 1;
				flex-shrink: 1;
				width: 100%;
			}

				ul.actions.fit li > * {
					width: 100%;
				}

			ul.actions.fit.stacked {
				width: 100%;
			}

		@media screen and (max-width: 480px) {

			ul.actions:not(.fixed) {
				-moz-flex-direction: column;
				-webkit-flex-direction: column;
				-ms-flex-direction: column;
				flex-direction: column;
				margin-left: 0;
				width: 100% !important;
			}

				ul.actions:not(.fixed) li {
					-moz-flex-grow: 1;
					-webkit-flex-grow: 1;
					-ms-flex-grow: 1;
					flex-grow: 1;
					-moz-flex-shrink: 1;
					-webkit-flex-shrink: 1;
					-ms-flex-shrink: 1;
					flex-shrink: 1;
					padding: 1em 0 0 0;
					text-align: center;
					width: 100%;
				}

					ul.actions:not(.fixed) li > * {
						width: 100%;
					}

					ul.actions:not(.fixed) li:first-child {
						padding-top: 0;
					}

					ul.actions:not(.fixed) li input[type="submit"],
					ul.actions:not(.fixed) li input[type="reset"],
					ul.actions:not(.fixed) li input[type="button"],
					ul.actions:not(.fixed) li button,
					ul.actions:not(.fixed) li .button {
						width: 100%;
					}

						ul.actions:not(.fixed) li input[type="submit"].icon:before,
						ul.actions:not(.fixed) li input[type="reset"].icon:before,
						ul.actions:not(.fixed) li input[type="button"].icon:before,
						ul.actions:not(.fixed) li button.icon:before,
						ul.actions:not(.fixed) li .button.icon:before {
							margin-left: -0.5em;
						}

		}

/* Table */

	.table-wrapper {
		-webkit-overflow-scrolling: touch;
		overflow-x: auto;
	}

	table {
		margin: 0 0 2em 0;
		width: 100%;
	}

		table tbody tr {
			border: solid 1px rgba(255, 255, 255, 0.3);
			border-left: 0;
			border-right: 0;
		}

			table tbody tr:nth-child(2n + 1) {
				background-color: rgba(255, 255, 255, 0.075);
			}

		table td {
			padding: 0.75em 0.75em;
		}

		table th {
			color: #ffffff;
			font-size: 0.9em;
			font-weight: 300;
			padding: 0 0.75em 0.75em 0.75em;
			text-align: left;
		}

		table thead {
			border-bottom: solid 1px rgba(255, 255, 255, 0.3);
		}

		table tfoot {
			border-top: solid 1px rgba(255, 255, 255, 0.3);
		}

		table.alt {
			border-collapse: separate;
		}

			table.alt tbody tr td {
				border: solid 1px rgba(255, 255, 255, 0.3);
				border-left-width: 0;
				border-top-width: 0;
			}

				table.alt tbody tr td:first-child {
					border-left-width: 1px;
				}

			table.alt tbody tr:first-child td {
				border-top-width: 1px;
			}

			table.alt thead {
				border-bottom: 0;
			}

			table.alt tfoot {
				border-top: 0;
			}

/* Button */

	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	.button {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		-moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		-webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		-ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		background-color: transparent;
		border-radius: 4px;
		border: 0;
		box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.3);
		color: #ffffff !important;
		cursor: pointer;
		display: inline-block;
		font-weight: 300;
		height: 3em;
		line-height: 3em;
		padding: 0 2.25em;
		text-align: center;
		text-decoration: none;
		white-space: nowrap;
	}

		input[type="submit"]:hover, input[type="submit"]:active,
		input[type="reset"]:hover,
		input[type="reset"]:active,
		input[type="button"]:hover,
		input[type="button"]:active,
		.button:hover,
		.button:active {
			box-shadow: inset 0 0 0 1px #e44c65;
			color: #e44c65 !important;
		}

		input[type="submit"]:active,
		input[type="reset"]:active,
		input[type="button"]:active,
		.button:active {
			background-color: rgba(228, 76, 101, 0.15);
		}

		input[type="submit"].icon:before,
		input[type="reset"].icon:before,
		input[type="button"].icon:before,
		.button.icon:before {
			margin-right: 0.5em;
		}

		input[type="submit"].fit,
		input[type="reset"].fit,
		input[type="button"].fit,
		.button.fit {
			width: 100%;
		}

		input[type="submit"].small,
		input[type="reset"].small,
		input[type="button"].small,
		.button.small {
			font-size: 0.8em;
		}

		input[type="submit"].large,
		input[type="reset"].large,
		input[type="button"].large,
		.button.large {
			font-size: 1.35em;
		}

		input[type="submit"].primary,
		input[type="reset"].primary,
		input[type="button"].primary,
		.button.primary {
			background-color: #e44c65;
			box-shadow: none;
			color: #ffffff !important;
		}

			input[type="submit"].primary:hover,
			input[type="reset"].primary:hover,
			input[type="button"].primary:hover,
			.button.primary:hover {
				background-color: #e76278;
			}

			input[type="submit"].primary:active,
			input[type="reset"].primary:active,
			input[type="button"].primary:active,
			.button.primary:active {
				background-color: #e13652;
			}

		input[type="submit"].disabled, input[type="submit"]:disabled,
		input[type="reset"].disabled,
		input[type="reset"]:disabled,
		input[type="button"].disabled,
		input[type="button"]:disabled,
		.button.disabled,
		.button:disabled {
			background-color: rgba(255, 255, 255, 0.3) !important;
			box-shadow: none !important;
			color: #ffffff !important;
			cursor: default;
			opacity: 0.25;
		}

/* Goto Next */

	.goto-next {
		border: 0;
		bottom: 0;
		display: block;
		height: 5em;
		left: 50%;
		margin: 0 0 0 -5em;
		overflow: hidden;
		position: absolute;
		text-indent: 10em;
		white-space: nowrap;
		width: 10em;
		z-index: 1;
	}

		.goto-next:before {
			background-image: url("images/arrow.svg");
			background-position: center center;
			background-repeat: no-repeat;
			background-size: contain;
			content: '';
			display: block;
			height: 1.5em;
			left: 50%;
			margin: -0.75em 0 0 -1em;
			position: absolute;
			top: 50%;
			width: 2em;
			z-index: 1;
		}

/* Spotlight */

	.spotlight {
		background-attachment: fixed;
		background-position: center center;
		background-size: cover;
		box-shadow: 0 0.25em 0.5em 0 rgba(0, 0, 0, 0.25);
		height: 100vh;
		overflow: hidden;
		position: relative;
	}

		.spotlight:nth-last-of-type(1) {
			z-index: 1;
		}

		.spotlight:nth-last-of-type(2) {
			z-index: 2;
		}

		.spotlight:nth-last-of-type(3) {
			z-index: 3;
		}

		.spotlight:nth-last-of-type(4) {
			z-index: 4;
		}

		.spotlight:nth-last-of-type(5) {
			z-index: 5;
		}

		.spotlight:nth-last-of-type(6) {
			z-index: 6;
		}

		.spotlight:nth-last-of-type(7) {
			z-index: 7;
		}

		.spotlight:nth-last-of-type(8) {
			z-index: 8;
		}

		.spotlight:nth-last-of-type(9) {
			z-index: 9;
		}

		.spotlight:nth-last-of-type(10) {
			z-index: 10;
		}

		.spotlight:nth-last-of-type(11) {
			z-index: 11;
		}

		.spotlight:nth-last-of-type(12) {
			z-index: 12;
		}

		.spotlight:nth-last-of-type(13) {
			z-index: 13;
		}

		.spotlight:nth-last-of-type(14) {
			z-index: 14;
		}

		.spotlight:nth-last-of-type(15) {
			z-index: 15;
		}

		.spotlight:nth-last-of-type(16) {
			z-index: 16;
		}

		.spotlight:nth-last-of-type(17) {
			z-index: 17;
		}

		.spotlight:nth-last-of-type(18) {
			z-index: 18;
		}

		.spotlight:nth-last-of-type(19) {
			z-index: 19;
		}

		.spotlight:nth-last-of-type(20) {
			z-index: 20;
		}

		.spotlight:before {
			background-image: url("images/overlay.png");
			content: '';
			display: block;
			height: 100%;
			left: 0;
			top: 0;
			width: 100%;
		}

		.spotlight .image.main {
			display: none;
		}

			.spotlight .image.main img {
				position: relative;
			}

		.spotlight .content {
			-moz-transform: translate(0,0);
			-webkit-transform: translate(0,0);
			-ms-transform: translate(0,0);
			transform: translate(0,0);
			-moz-transition: -moz-transform 1s ease, opacity 1s ease;
			-webkit-transition: -webkit-transform 1s ease, opacity 1s ease;
			-ms-transition: -ms-transform 1s ease, opacity 1s ease;
			transition: transform 1s ease, opacity 1s ease;
			background: rgba(23, 24, 32, 0.95);
			border-style: solid;
			opacity: 1;
			position: absolute;
		}

		.spotlight .goto-next {
			-moz-transform: translate(0,0);
			-webkit-transform: translate(0,0);
			-ms-transform: translate(0,0);
			transform: translate(0,0);
			-moz-transition: -moz-transform 0.75s ease, opacity 1s ease-in;
			-webkit-transition: -webkit-transform 0.75s ease, opacity 1s ease-in;
			-ms-transition: -ms-transform 0.75s ease, opacity 1s ease-in;
			transition: transform 0.75s ease, opacity 1s ease-in;
			-moz-transition-delay: 0.5s;
			-webkit-transition-delay: 0.5s;
			-ms-transition-delay: 0.5s;
			transition-delay: 0.5s;
			opacity: 1;
		}

		.spotlight.top .content, .spotlight.bottom .content {
			left: 0;
			padding: 5.1em 0 3.1em 0;
			width: 100%;
		}

		.spotlight.top .content {
			border-bottom-width: 0.35em;
			top: 0;
		}

		.spotlight.bottom .content {
			border-top-width: 0.35em;
			bottom: 0;
		}

		.spotlight.left .content, .spotlight.right .content {
			height: 101%;
			padding: 6em 3em;
			top: 0;
			width: 28em;
		}

		.spotlight.left .content {
			border-right-width: 0.35em;
			left: 0;
		}

		.spotlight.right .content {
			border-left-width: 0.35em;
			right: 0;
		}

		.spotlight.style1 .content {
			border-color: #e44c65;
		}

		.spotlight.style2 .content {
			border-color: #5480f1;
		}

		.spotlight.style3 .content {
			border-color: #39c088;
		}

		.spotlight.inactive .content {
			opacity: 0;
		}

		.spotlight.inactive .goto-next {
			-moz-transform: translate(0,1.5em);
			-webkit-transform: translate(0,1.5em);
			-ms-transform: translate(0,1.5em);
			transform: translate(0,1.5em);
			opacity: 0;
		}

		.spotlight.inactive.top .content {
			-moz-transform: translate(0,-5em);
			-webkit-transform: translate(0,-5em);
			-ms-transform: translate(0,-5em);
			transform: translate(0,-5em);
		}

		.spotlight.inactive.bottom .content {
			-moz-transform: translate(0,5em);
			-webkit-transform: translate(0,5em);
			-ms-transform: translate(0,5em);
			transform: translate(0,5em);
		}

		.spotlight.inactive.left .content {
			-moz-transform: translate(-5em,0);
			-webkit-transform: translate(-5em,0);
			-ms-transform: translate(-5em,0);
			transform: translate(-5em,0);
		}

		.spotlight.inactive.right .content {
			-moz-transform: translate(5em,0);
			-webkit-transform: translate(5em,0);
			-ms-transform: translate(5em,0);
			transform: translate(5em,0);
		}

	body.is-touch .spotlight {
		background-attachment: scroll;
	}

/* Wrapper */

	.wrapper {
		padding: 6em 0 4em 0;
	}

		.wrapper.style2 {
			background: #e44c65;
		}

			.wrapper.style2 input[type="text"]:focus,
			.wrapper.style2 input[type="password"]:focus,
			.wrapper.style2 input[type="email"]:focus,
			.wrapper.style2 select:focus,
			.wrapper.style2 textarea:focus {
				border-color: rgba(255, 255, 255, 0.5);
			}

			.wrapper.style2 input[type="submit"]:hover, .wrapper.style2 input[type="submit"]:active,
			.wrapper.style2 input[type="reset"]:hover,
			.wrapper.style2 input[type="reset"]:active,
			.wrapper.style2 input[type="button"]:hover,
			.wrapper.style2 input[type="button"]:active,
			.wrapper.style2 .button:hover,
			.wrapper.style2 .button:active {
				background-color: rgba(255, 255, 255, 0.075) !important;
				box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.5) !important;
				color: #ffffff !important;
			}

			.wrapper.style2 input[type="submit"]:active,
			.wrapper.style2 input[type="reset"]:active,
			.wrapper.style2 input[type="button"]:active,
			.wrapper.style2 .button:active {
				background-color: rgba(255, 255, 255, 0.25) !important;
			}

			.wrapper.style2 input[type="submit"].primary,
			.wrapper.style2 input[type="reset"].primary,
			.wrapper.style2 input[type="button"].primary,
			.wrapper.style2 .button.primary {
				background-color: #ffffff;
				color: #e44c65 !important;
			}

				.wrapper.style2 input[type="submit"].primary:hover, .wrapper.style2 input[type="submit"].primary:active,
				.wrapper.style2 input[type="reset"].primary:hover,
				.wrapper.style2 input[type="reset"].primary:active,
				.wrapper.style2 input[type="button"].primary:hover,
				.wrapper.style2 input[type="button"].primary:active,
				.wrapper.style2 .button.primary:hover,
				.wrapper.style2 .button.primary:active {
					background-color: rgba(255, 255, 255, 0.075) !important;
					box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.5) !important;
					color: #ffffff !important;
				}

				.wrapper.style2 input[type="submit"].primary:active,
				.wrapper.style2 input[type="reset"].primary:active,
				.wrapper.style2 input[type="button"].primary:active,
				.wrapper.style2 .button.primary:active {
					background-color: rgba(255, 255, 255, 0.25) !important;
				}

		.wrapper.fade-down > .container {
			-moz-transform: translate(0,0);
			-webkit-transform: translate(0,0);
			-ms-transform: translate(0,0);
			transform: translate(0,0);
			-moz-transition: -moz-transform 1s ease, opacity 1s ease;
			-webkit-transition: -webkit-transform 1s ease, opacity 1s ease;
			-ms-transition: -ms-transform 1s ease, opacity 1s ease;
			transition: transform 1s ease, opacity 1s ease;
			opacity: 1;
		}

		.wrapper.fade-down.inactive > .container {
			-moz-transform: translate(0,-1em);
			-webkit-transform: translate(0,-1em);
			-ms-transform: translate(0,-1em);
			transform: translate(0,-1em);
			opacity: 0;
		}

		.wrapper.fade-up > .container {
			-moz-transform: translate(0,0);
			-webkit-transform: translate(0,0);
			-ms-transform: translate(0,0);
			transform: translate(0,0);
			-moz-transition: -moz-transform 1s ease, opacity 1s ease;
			-webkit-transition: -webkit-transform 1s ease, opacity 1s ease;
			-ms-transition: -ms-transform 1s ease, opacity 1s ease;
			transition: transform 1s ease, opacity 1s ease;
			opacity: 1;
		}

		.wrapper.fade-up.inactive > .container {
			-moz-transform: translate(0,1em);
			-webkit-transform: translate(0,1em);
			-ms-transform: translate(0,1em);
			transform: translate(0,1em);
			opacity: 0;
		}

		.wrapper.fade > .container {
			-moz-transition: opacity 1s ease;
			-webkit-transition: opacity 1s ease;
			-ms-transition: opacity 1s ease;
			transition: opacity 1s ease;
			opacity: 1;
		}

		.wrapper.fade.inactive > .container {
			opacity: 0;
		}

/* Dropotron */

	.dropotron {
		background: rgba(39, 40, 51, 0.965);
		border-radius: 4px;
		box-shadow: 0 0.075em 0.35em 0 rgba(0, 0, 0, 0.125);
		list-style: none;
		margin-top: calc(-0.25em + 1px);
		min-width: 12em;
		padding: 0.25em 0;
	}

		.dropotron > li {
			border-top: solid 1px rgba(255, 255, 255, 0.035);
			padding: 0;
		}

			.dropotron > li a, .dropotron > li span {
				border: 0;
				color: rgba(255, 255, 255, 0.75);
				display: block;
				padding: 0.1em 1em;
				text-decoration: none;
			}

			.dropotron > li:first-child {
				border-top: 0;
			}

			.dropotron > li.active > a, .dropotron > li.active > span {
				color: #e44c65;
			}

		.dropotron.level-0 {
			font-size: 0.8em;
			margin-top: 1em;
		}

			.dropotron.level-0:before {
				-moz-transform: rotate(45deg);
				-webkit-transform: rotate(45deg);
				-ms-transform: rotate(45deg);
				transform: rotate(45deg);
				background: #272833;
				content: '';
				display: block;
				height: 1em;
				position: absolute;
				right: 1.5em;
				top: -0.5em;
				width: 1em;
			}

	body.landing .dropotron.level-0 {
		margin-top: 0;
	}

/* Header */

	#page-wrapper {
		padding-top: 3.5em;
	}

	#header {
		background: rgba(39, 40, 51, 0.965);
		box-shadow: 0 0 0.25em 0 rgba(0, 0, 0, 0.25);
		cursor: default;
		height: 3.5em;
		left: 0;
		line-height: 3.5em;
		position: fixed;
		top: 0;
		width: 100%;
		z-index: 100;
	}

		#header h1 {
			height: inherit;
			left: 1.25em;
			line-height: inherit;
			margin: 0;
			position: absolute;
			top: 0;
		}

		#header nav {
			position: absolute;
			right: 1em;
			top: 0;
		}

			#header nav ul {
				margin: 0;
			}

				#header nav ul li {
					display: inline-block;
					margin-left: 1em;
				}

					#header nav ul li a, #header nav ul li span {
						border: 0;
						color: inherit;
						display: inline-block;
						height: inherit;
						line-height: inherit;
						outline: 0;
					}

						#header nav ul li a.button, #header nav ul li span.button {
							height: 2em;
							line-height: 2em;
							padding: 0 1.25em;
						}

						#header nav ul li a:not(.button):before, #header nav ul li span:not(.button):before {
							margin-right: 0.5em;
						}

					#header nav ul li.active > a, #header nav ul li.active > span {
						color: #e44c65;
					}

					#header nav ul li > ul {
						display: none;
					}

	body.landing #page-wrapper {
		padding-top: 0;
	}

	body.landing #header {
		background: transparent;
		box-shadow: none;
		position: absolute;
	}

/* Banner */

	#banner {
		background-attachment: fixed;
		background-color: #272833;
		background-image: url("../../images/banner.jpg");
		background-position: center center;
		background-size: cover;
		box-shadow: 0 0.25em 0.5em 0 rgba(0, 0, 0, 0.25);
		min-height: 100vh;
		position: relative;
		text-align: center;
		z-index: 21;
	}

		#banner:before {
			content: '';
			display: inline-block;
			height: 100vh;
			vertical-align: middle;
			width: 1%;
		}

		#banner:after {
			background-image: -moz-linear-gradient(top, rgba(23, 24, 32, 0.95), rgba(23, 24, 32, 0.95)), url("images/overlay.png");;
			background-image: -webkit-linear-gradient(top, rgba(23, 24, 32, 0.95), rgba(23, 24, 32, 0.95)), url("images/overlay.png");;
			background-image: -ms-linear-gradient(top, rgba(23, 24, 32, 0.95), rgba(23, 24, 32, 0.95)), url("images/overlay.png");;
			background-image: linear-gradient(top, rgba(23, 24, 32, 0.95), rgba(23, 24, 32, 0.95)), url("images/overlay.png");;
			content: '';
			display: block;
			height: 100%;
			left: 0;
			position: absolute;
			top: 0;
			width: 100%;
		}

		#banner .content {
			display: inline-block;
			margin-right: 1%;
			max-width: 95%;
			padding: 6em;
			position: relative;
			text-align: right;
			vertical-align: middle;
			z-index: 1;
		}

			#banner .content header {
				display: inline-block;
				vertical-align: middle;
			}

				#banner .content header h2 {
					font-size: 2.5em;
					margin: 0;
				}

				#banner .content header p {
					margin: 0.5em 0 0 0;
					top: 0;
				}

			#banner .content .image {
				border-radius: 100%;
				display: inline-block;
				height: 18em;
				margin-left: 3em;
				vertical-align: middle;
				width: 18em;
			}

				#banner .content .image img {
					border-radius: 100%;
					display: block;
					width: 100%;
				}

	body.is-touch #banner {
		background-attachment: scroll;
	}

/* Footer */

	#footer {
		background: #272833;
		padding: 6em 0;
		text-align: center;
	}

		#footer .icons .icon.alt {
			text-decoration: none;
		}

			#footer .icons .icon.alt:before {
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				display: inline-block;
				font-style: normal;
				font-variant: normal;
				text-rendering: auto;
				line-height: 1;
				text-transform: none !important;
				font-family: 'Font Awesome 5 Free';
				font-weight: 400;
			}

			#footer .icons .icon.alt:before {
				color: #272833 !important;
				text-shadow: 1px 0 0 rgba(255, 255, 255, 0.5), -1px 0 0 rgba(255, 255, 255, 0.5), 0 1px 0 rgba(255, 255, 255, 0.5), 0 -1px 0 rgba(255, 255, 255, 0.5);
			}

		#footer .copyright {
			color: rgba(255, 255, 255, 0.5);
			font-size: 0.8em;
			line-height: 1em;
			margin: 2em 0 0 0;
			padding: 0;
			text-align: center;
		}

			#footer .copyright li {
				border-left: solid 1px rgba(255, 255, 255, 0.3);
				display: inline-block;
				list-style: none;
				margin-left: 1.5em;
				padding-left: 1.5em;
			}

				#footer .copyright li:first-child {
					border-left: 0;
					margin-left: 0;
					padding-left: 0;
				}

				#footer .copyright li a {
					color: inherit;
				}

/* XLarge */

	@media screen and (max-width: 1680px) {

		/* Basic */

			body, input, select, textarea {
				font-size: 13pt;
			}

	}

/* Large */

	@media screen and (max-width: 1280px) {

		/* Basic */

			body, input, select, textarea {
				font-size: 11.5pt;
			}

		/* Spotlight */

			.spotlight.top .content {
				padding: 3.825em 0 1.825em 0;
			}

			.spotlight.bottom .content {
				padding: 3.825em 0 2.95em 0;
			}

			.spotlight.left .content, .spotlight.right .content {
				padding: 4.5em 2.5em;
				width: 25em;
			}

		/* Wrapper */

			.wrapper {
				padding: 4.5em 0 2.5em 0;
			}

		/* Dropotron */

			.dropotron.level-0 {
				font-size: 1em;
			}

		/* Banner */

			#banner .content {
				padding: 4.5em;
			}

		/* Footer */

			#footer {
				padding: 4.5em 0;
			}

	}

/* Medium */

	@media screen and (max-width: 980px) {

		/* Basic */

			body, input, select, textarea {
				font-size: 12pt;
			}

		/* Spotlight */

			.spotlight {
				background-attachment: scroll;
				height: auto;
			}

				.spotlight .image.main {
					display: block;
					margin: 0;
					max-height: 40vh;
					overflow: hidden;
				}

				.spotlight .content {
					background-color: #1c1d26;
					border-width: 0 !important;
					border-top-width: 0.35em !important;
					bottom: auto !important;
					left: auto !important;
					padding: 4.5em 2.5em 2.5em 2.5em !important;
					position: relative;
					right: auto !important;
					text-align: center;
					top: auto !important;
					width: 100% !important;
				}

					.spotlight .content ul.actions {
						-moz-justify-content: center;
						-webkit-justify-content: center;
						-ms-justify-content: center;
						justify-content: center;
						width: 100%;
						margin-left: 0;
					}

						.spotlight .content ul.actions li:first-child {
							padding-left: 0;
						}

				.spotlight .goto-next {
					display: none;
				}

		/* Wrapper */

			.wrapper {
				padding: 4.5em 2.5em 2.5em 2.5em;
			}

		/* Banner */

			#banner {
				background-attachment: scroll;
			}

				#banner .goto-next {
					height: 7em;
				}

				#banner .content {
					padding: 9em 0;
					text-align: center;
				}

					#banner .content header {
						display: block;
						margin: 0 0 2em 0;
						text-align: center;
					}

					#banner .content .image {
						margin: 0;
					}

		/* Footer */

			#footer {
				padding: 4.5em 0;
			}

	}

/* Small */

	#navPanel, #titleBar {
		display: none;
	}

	@media screen and (max-width: 736px) {

		/* Basic */

			html, body {
				overflow-x: hidden;
			}

			body, input, select, textarea {
				font-size: 12pt;
			}

			h2 {
				font-size: 1.5em;
			}

			h3 {
				font-size: 1.2em;
			}

			h4 {
				font-size: 1em;
			}

		/* Section/Article */

			header p br {
				display: none;
			}

			header h2 + p {
				font-size: 1em;
			}

			header h3 + p {
				font-size: 1em;
			}

			header h4 + p,
			header h5 + p,
			header h6 + p {
				font-size: 0.9em;
			}

			header.major {
				margin: 0 0 2em 0;
			}

		/* Goto Next */

			.goto-next:before {
				height: 0.8em;
				margin: -0.4em 0 0 -0.6em;
				width: 1.2em;
			}

		/* Spotlight */

			.spotlight {
				box-shadow: 0 0.125em 0.5em 0 rgba(0, 0, 0, 0.25);
			}

				.spotlight .image.main {
					max-height: 60vh;
				}

				.spotlight .content {
					border-top-width: 0.2em !important;
					padding: 3.25em 1.5em 1.25em 1.5em !important;
				}

		/* Wrapper */

			.wrapper {
				padding: 3.25em 1.5em 1.25em 1.5em;
			}

		/* Header */

			#header {
				display: none;
			}

		/* Banner */

			#banner {
				box-shadow: 0 0.125em 0.5em 0 rgba(0, 0, 0, 0.25);
				min-height: calc(100vh - 44px);
			}

				#banner:before {
					height: calc(100vh - 44px);
				}

				#banner .content {
					padding: 4.0625em 1.5em 4.875em 1.5em;
				}

					#banner .content header h2 {
						font-size: 1.5em;
					}

					#banner .content .image {
						height: 9em;
						width: 9em;
					}

		/* Nav */

			#page-wrapper {
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				-moz-transition: -moz-transform 0.5s ease;
				-webkit-transition: -webkit-transform 0.5s ease;
				-ms-transition: -ms-transform 0.5s ease;
				transition: transform 0.5s ease;
				padding-bottom: 1px;
				padding-top: 44px !important;
			}

			#titleBar {
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				-moz-transition: -moz-transform 0.5s ease;
				-webkit-transition: -webkit-transform 0.5s ease;
				-ms-transition: -ms-transform 0.5s ease;
				transition: transform 0.5s ease;
				display: block;
				height: 44px;
				left: 0;
				position: fixed;
				top: 0;
				width: 100%;
				z-index: 10001;
				background: #272833;
				box-shadow: 0 0.125em 0.125em 0 rgba(0, 0, 0, 0.125);
			}

				#titleBar .title {
					color: #ffffff;
					display: block;
					font-weight: 300;
					height: 44px;
					line-height: 44px;
					text-align: center;
				}

					#titleBar .title a {
						color: inherit;
						border: 0;
					}

				#titleBar .toggle {
					text-decoration: none;
					height: 60px;
					left: 0;
					position: absolute;
					top: 0;
					width: 90px;
					outline: 0;
					border: 0;
				}

					#titleBar .toggle:before {
						-moz-osx-font-smoothing: grayscale;
						-webkit-font-smoothing: antialiased;
						display: inline-block;
						font-style: normal;
						font-variant: normal;
						text-rendering: auto;
						line-height: 1;
						text-transform: none !important;
						font-family: 'Font Awesome 5 Free';
						font-weight: 900;
					}

					#titleBar .toggle:before {
						background: #e44c65;
						color: rgba(255, 255, 255, 0.5);
						content: '\f0c9';
						display: block;
						font-size: 18px;
						height: 44px;
						left: 0;
						line-height: 44px;
						position: absolute;
						text-align: center;
						top: 0;
						width: 54px;
					}

			#navPanel {
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				-moz-transform: translateX(-275px);
				-webkit-transform: translateX(-275px);
				-ms-transform: translateX(-275px);
				transform: translateX(-275px);
				-moz-transition: -moz-transform 0.5s ease;
				-webkit-transition: -webkit-transform 0.5s ease;
				-ms-transition: -ms-transform 0.5s ease;
				transition: transform 0.5s ease;
				display: block;
				height: 100%;
				left: 0;
				overflow-y: auto;
				position: fixed;
				top: 0;
				width: 275px;
				z-index: 10002;
				background: #181920;
				padding: 0.75em 1.25em;
			}

				#navPanel .link {
					border: 0;
					border-top: solid 1px rgba(255, 255, 255, 0.05);
					color: rgba(255, 255, 255, 0.75);
					display: block;
					height: 3em;
					line-height: 3em;
					text-decoration: none;
				}

					#navPanel .link:hover {
						color: inherit !important;
					}

					#navPanel .link:first-child {
						border-top: 0;
					}

					#navPanel .link.depth-0 {
						color: #ffffff;
						font-weight: 300;
					}

					#navPanel .link .indent-1 {
						display: inline-block;
						width: 1.25em;
					}

					#navPanel .link .indent-2 {
						display: inline-block;
						width: 2.5em;
					}

					#navPanel .link .indent-3 {
						display: inline-block;
						width: 3.75em;
					}

					#navPanel .link .indent-4 {
						display: inline-block;
						width: 5em;
					}

					#navPanel .link .indent-5 {
						display: inline-block;
						width: 6.25em;
					}

			body.navPanel-visible #page-wrapper {
				-moz-transform: translateX(275px);
				-webkit-transform: translateX(275px);
				-ms-transform: translateX(275px);
				transform: translateX(275px);
			}

			body.navPanel-visible #titleBar {
				-moz-transform: translateX(275px);
				-webkit-transform: translateX(275px);
				-ms-transform: translateX(275px);
				transform: translateX(275px);
			}

			body.navPanel-visible #navPanel {
				-moz-transform: translateX(0);
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}

		/* Footer */

			#footer {
				padding: 3.25em 1.5em;
			}

	}

/* XSmall */

	@media screen and (max-width: 480px) {

		/* Basic */

			html, body {
				min-width: 320px;
			}

			body, input, select, textarea {
				font-size: 12pt;
			}

		/* Button */

			input[type="submit"],
			input[type="reset"],
			input[type="button"],
			.button {
				padding: 0;
			}

		/* Spotlight */

			.spotlight .image.main {
				max-height: 50vh;
			}

			.spotlight .content {
				padding: 3em 1.25em 1em 1.25em !important;
			}

		/* Wrapper */

			.wrapper {
				padding: 3em 1.25em 1em 1.25em;
			}

		/* Banner */

			#banner .content {
				padding: 3em 1.5625em 5.25em 1.5625em;
			}

		/* Footer */

			#footer {
				padding: 3em 1.25em;
			}

				#footer .copyright {
					line-height: inherit;
				}

					#footer .copyright li {
						border-left: 0;
						display: block;
						margin: 0;
						padding: 0;
					}

	}<?php }
}
